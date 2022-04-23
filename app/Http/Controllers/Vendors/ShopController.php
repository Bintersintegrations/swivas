<?php

namespace App\Http\Controllers\Vendors;

use App\Bank;
use App\City;
use App\Shop;
use App\State;
use App\Country;
use App\Product;
use App\Category;
use App\BankAccount;
use Illuminate\Http\Request;
use App\Http\Requests\ShopRequest;
use App\Http\Controllers\Controller;
use App\Http\Traits\CreateUserTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ShopController extends Controller
{
    use CreateUserTrait;

    public function __construct(){
        $this->middleware('auth')->except(['create','setup','list','index']);
    }

    public function list(){
        if(Auth::check()){
            $state_id = Auth::user()->state_id;
            
        }else{
            $info = Cache::get(request()->ip());
            $state_id = $info['state_id'];
        } 
        $shops = Shop::where('state_id',$state_id)->get();
        $category_ids = $shops->pluck('categories')->collapse()->unique()->toArray();
        $categories = Category::whereIn('id',$category_ids)->get();
        
        return view('frontend.outside.shop.list',compact('shops','categories'));
    }
    //public view of shop
    public function index(Shop $shop){ 
        $products = $shop->products;
        // dd($products);
        // dd(request()->query('categories'));
        if(request()->query() && request()->query('categories')){
            $cats = request()->query('categories');
            $products = $products->filter(function($value) use($cats){ 
                return count(array_intersect($value->categories, $cats)); 
            });
        }
        // dd($products);
        if(request()->query() && request()->query('price')){
            $products = $products->whereBetween('price', explode(';',request()->query('price')));
        }
        $products = Product::whereIn('id',$products->pluck('id')->toArray())->orderBy('price',session('sortPrice', 'asc'))->paginate(session('perPage', '24'));
        $category_ids = $products->pluck('categories')->collapse()->unique()->toArray();
        $categories = Category::whereIn('id',$category_ids)->get();
        return view('frontend.outside.shop.view',compact('shop','products','categories'));
    }
    
    public function create(){
        $countries = Country::all();
        $categories = Category::where('parent_id',null)->get();
        $states = State::all();
        $cities = City::all();
        $banks = Bank::where('status',true)->orderBy('name','ASC')->get();
        // dd($categories);
        return view('frontend.outside.shop.create',compact('countries','categories','states','cities','banks'));
    }

    public function setup(ShopRequest $request){


        if(Auth::check()){
            $user = Auth::user();
        }
        elseif(Auth::attempt($request->only('email', 'password'))){
            $user = User::where('email',$request->email)->first();
        }else{
            $this->validator($request)->validate();
            $user = $this->createUser();
        } 
        $shop = new Shop;
        $shop->user_id = $user->id;
        $shop->contact_name = $request->contact_name;
        $shop->email = $request->contact_email;
        $shop->mobile = $request->contact_phone;
        $shop->name = $request->business_name;
        $shop->description = $request->business_description;
        $shop->categories = $request->business_categories;
        $shop->street = $request->address;
        $shop->country_id = $request->country_id;
        $shop->state_id = $request->state_id;
        $shop->city_id = $request->city_id;
        
        if($request->hasFile('cover')){
            $ext = $request->file('cover')->getClientOriginalExtension();
            $imageName = $user->id.rand().time().'.'.$ext;
            $shop->cover =  $imageName;
            $request->file('cover')->storeAs('public/media',$imageName);//save the file to public folder
        }
        if($request->hasFile('logo')){
            $ext = $request->file('logo')->getClientOriginalExtension();
            $imageName = $user->id.rand().time().'.'.$ext;
            $shop->logo =  $imageName;
            $request->file('logo')->storeAs('public/media',$imageName);//save the file to public folder
        }
        if($request->hasFile('business_certificate')){
            $ext = $request->file('business_certificate')->getClientOriginalExtension();
            $imageName = $user->id.rand().time().'.'.$ext;
            $shop->business_certificate =  $imageName;
            $request->file('business_certificate')->storeAs('public/media',$imageName);//save the file to public folder
        }
        if($request->hasFile('contact_document')){
            $ext = $request->file('contact_document')->getClientOriginalExtension();
            $imageName = $user->id.rand().time().'.'.$ext;
            $shop->contact_document =  $imageName;
            $request->file('contact_document')->storeAs('public/media',$imageName);//save the file to public folder
        }
        $shop->save();
        $bankAccount = new BankAccount;
        $bankAccount->owner_id = $shop->id;
        $bankAccount->owner_type = 'App\Shop';
        $bankAccount->bank_id = $request->bank_id;
        if($request->branch_code)
            $bankAccount->branch_code = $request->branch_code;
        $bankAccount->account_number = $request->account_number;
        $bankAccount->save();
        
        return redirect()->route('shop.dashboard',$shop);
    }

    

    //vendor dashboard
    public function dashboard(Shop $shop){
        return view('frontend.inside.shop.dashboard',compact('shop'));
    }
    
    public function profile(Shop $shop){
        $user = Auth::user();
        $countries = Country::all();
        $categories = Category::all();
        return view('frontend.inside.shop.profile.edit',compact('shop','user','countries','categories'));
        
    }

    public function saveprofile(Shop $shop,Request $request){
        //dd($request->all());
        $user = Auth::user();
        if($request->filled('categories')) $shop->categories = $request->categories;
        if($request->filled('mobile')) $shop->mobile = $request->mobile;
        if($request->filled('email')) $shop->email = $request->email;
        if($request->filled('street')) $shop->street = $request->street;
        if($request->filled('state_id')) $shop->state_id = $request->state_id;
        if($request->filled('city_id')) $shop->city_id = $request->city_id;
        $shop->save();
            // 'facebook'=> $request->facebook ? $request->facebook: null,
            // 'twitter'=> $request->twitter ? $request->twitter: null,
            // 'instagram'=> $request->instagram ? $request->instagram: null,
            // 'linkedin'=> $request->linkedin ? $request->linkedin: null,
        return redirect()->route('shop.profile',$shop);
    }

    public function settings(Shop $shop){
        return view('frontend.inside.shop.settings',compact('shop'));
    }
    
}

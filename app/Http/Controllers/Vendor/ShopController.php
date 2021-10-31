<?php

namespace App\Http\Controllers\Vendor;

use App\Bank;
use App\BankAccount;
use App\Logistic;
use App\City;
use App\Shop;
use App\State;
use App\Country;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\CreateUserTrait;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    use CreateUserTrait;

    public function __construct(){
        $this->middleware('auth')->except(['create','setup','list','index']);
    }

    public function list(){
        $shops = Shop::all();
        return view('frontend.outside.shop.list',compact('shops'));
    }
    //public view of shop
    public function index(Shop $shop){ 
        return view('frontend.outside.shop.view',compact('shop'));
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

    public function setup(Request $request){

        // dd($request->all());
        if(Auth::check())
            $user = Auth::user();
        elseif(Auth::attempt($request->only('email', 'password')))
            $user = User::where('email',$request->email)->first();
        else{
            $this->validator($request)->validate();
            $user = $this->createUser($request);
        } 
        $shop = new Shop;
        $shop->user_id = $user->id;
        $shop->contact_name = $request->business_name;
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
        
        for($i = 0; $i < 2; $i++){
            $logistic = new Logistic;
            $logistic->shop_id = $shop->id;
            $logistic->company_name = $request->delivery_company_name[$i];
            $logistic->username = $request->delivery_username[$i];
            $logistic->phone = $request->delivery_phone[$i];
            $logistic->document = $request->delivery_id[$i];
            if($request->hasFile("delivery_id.$i")){
                $ext = $request->file("delivery_id.$i")->getClientOriginalExtension();
                $imageName = $user->id.rand().time().'.'.$ext;
                $shop->logo =  $imageName;
                $request->file("delivery_id.$i")->storeAs('public/media',$imageName);//save the file to public folder
            }
            $logistic->save();
        }
        

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
        return view('frontend.inside.profile.shop.edit',compact('shop','user','countries'));
        
    }

    public function saveprofile(Shop $shop,Request $request){
        //dd($request->all());
        $user = Auth::user();
        $shop = Shop::updateOrCreate(['user_id'=> $user->id],[
            'name'=> $request->shop_name,
            'type'=> $request->type,
            'mobile'=> $request->mobile,
            'email'=> $request->email,
            'address'=> $request->address,
            'country_id'=> $user->country_id,
            'state_id'=> $request->state_id,
            'city_id'=> $request->city_id,
            'facebook'=> $request->facebook ? $request->facebook: null,
            'twitter'=> $request->twitter ? $request->twitter: null,
            'instagram'=> $request->instagram ? $request->instagram: null,
            'linkedin'=> $request->linkedin ? $request->linkedin: null,
            ]);
        return redirect()->route('profile',$shop);
    }

    public function settings(Shop $shop){
        return 'I dont exist';
    }

    public function createUser(){

    }

    
}

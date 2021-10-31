<?php

namespace App\Http\Controllers\Vendor;

use App\Bank;
use App\City;
use App\Shop;
use App\State;
use App\Country;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\CreateUserTrait;

class ShopController extends Controller
{
    use CreateUserTrait;

    public function __construct(){
        $this->middleware('auth')->except(['create','setup','list']);
    }

    public function list(){
        $vendors = Vendor::all();
        return view('frontend.outside.shop.list',compact('vendors'));
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
        $user = $this->getUser($request);
        dd($user);
        
        return redirect()->route('shop.dashboard');
    }

    //public view of shop
    public function index(Vendor $vendor){ 
        return view('frontend.outside.shop.view',compact('vendor'));
    }

    //vendor dashboard
    public function dashboard(){
        return view('frontend.inside.shop.dashboard');
    }
    
    public function profile(){
        $user = Auth::user();
        $countries = Country::all();
        return view('frontend.inside.profile.shop.edit',compact('user','countries'));
        
    }
    public function saveprofile(Request $request){
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
        return redirect()->route('profile');
    }

    public function settings(){
        return 'I dont exist';
    }
}

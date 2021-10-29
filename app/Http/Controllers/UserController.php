<?php

namespace App\Http\Controllers;

use App\City;
use App\State;
use App\Address;
use App\Country;
use App\Language;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Rules\OldPasswordRule;
use App\Rules\PasswordLengthRule;
use App\Rules\StrongPasswordRule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $user = Auth::user();
        return view('frontend.inside.user.dashboard',compact('user'));
    }
    
    public function profile(){
        $user = Auth::user();
        $countries = Country::all();
        $languages = Language::all();
        return view('frontend.inside.user.profile',compact('user','countries','languages'));
    }

    public function saveprofile(Request $request){
        // dd($request->all());
        $user = Auth::user();
        if($request->filled("firstname")) $user->firstname = $request->firstname;
        if($request->filled("surname")) $user->surname = $request->surname;
        if($request->filled("mobile")) $user->mobile = $request->mobile;
        if($request->filled("email")) $user->email = $request->email;
        if($request->filled("dob")) $user->dob = Carbon::createFromFormat('m/d/Y',$request->dob);
        if($request->filled("gender")) $user->gender = $request->gender;
        // if($request->filled("address")) $user->address = $request->address;
        if($request->filled("state_id")) $user->state_id = $request->state_id;
        if($request->filled("city_id")) $user->city_id = $request->city_id;
        $user->save();
        return redirect()->back()->with(['flash_type' => 'success','flash_msg'=>'Profile Saved successfully']); //with success
    }

    public function password(){
        return view('frontend.inside.user.password');
    }

    public function changePassword(Request $request){
        //dd($request->all());
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required|string',
            'password' => ['required','string','confirmed']
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with(['flash_type' => 'danger','flash_msg'=>'Something went wrong']);
        }
        if(Hash::check($request->oldpassword, $user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with(['flash_type' => 'success','flash_msg'=>'Password changed successfully']); //with success
        }
        else return redirect()->back()->withErrors(['oldpassword' => 'Your old password is wrong'])->with(['flash_type' => 'danger','flash_msg'=>'Something went wrong']);
    }

    public function address(){
        $user = Auth::user();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('frontend.inside.user.address',compact('user','countries','states','cities'));
    }
    
    public function manageAddress(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $address = Address::updateOrCreate(['user_id'=> $user->id ,'description'=> $request->description],
                    ['country_id'=> $request->country_id,'state_id'=> $request->state_id,'city_id'=> $request->city_id,'street'=> $request->street,'contact_name'=> $request->contact,'contact_number'=> $request->mobile]);
        return redirect()->back()->with(['flash_type' => 'success','flash_msg'=>'Address Saved successfully']); //with success
    }

    
    

}

<?php

namespace App\Http\Controllers;

use App\Country;
use App\Language;
use Illuminate\Http\Request;
use App\Rules\OldPasswordRule;
use App\Rules\PasswordLengthRule;
use App\Rules\StrongPasswordRule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\UserChangesNotification;

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
        //dd($request->all());
        $user = Auth::user();
        if($request->filled("firstname")) $user->firstname = $request->firstname;
        if($request->filled("surname")) $user->surname = $request->surname;
        if($request->filled("mobile")) $user->mobile = $request->mobile;
        if($request->filled("email")) $user->email = $request->email;
        if($request->filled("dob")) $user->dob = $request->dob;
        if($request->filled("gender")) $user->gender = $request->gender;
        if($request->filled("address")) $user->address = $request->address;
        if($request->filled("state_id")) $user->state_id = $request->state_id;
        if($request->filled("city_id")) $user->city_id = $request->city_id;
        if($request->filled("language")) $user->language_id = $request->language_id;
        if($request->filled("timezone")) $user->timezone = $request->timezone;
        $user->save();
        return redirect()->route('profile');
    }

    public function password(){
        return view('frontend.inside.user.password');
    }

    public function changePassword(Request $request){
        //dd($request->all());
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required|string',
            'password' => ['required','string','confirmed',new PasswordLengthRule,new StrongPasswordRule,new OldPasswordRule($user)]
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
            $user->password_histories()->create(['password'=> $user->password]);
            // $user->notify(new UserChangesNotification('password'));
            return redirect()->back()->with(['flash_type' => 'success','flash_msg'=>'Password changed successfully']); //with success
        }
        else return redirect()->back()->withErrors(['oldpassword' => 'Your old password is wrong'])->with(['flash_type' => 'danger','flash_msg'=>'Something went wrong']);
    }

    public function address(){
        $user = Auth::user();
        $countries = Country::all();
        return view('frontend.inside.user.address',compact('user','countries'));
    }
    
    public function manageAddress(Request $request){
        $validator = Validator::make($request->all(), [
            'oldpin' => 'required|string',
            'newpin' => 'required|string|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput()->with(['flash_type' => 'danger','flash_msg'=>'Something went wrong']);
        }
        if(Hash::check($request->oldpin, Auth::user()->accesspin)){
            $user = Auth::user();
            $user->accesspin = Hash::make($request->newpin);
            $user->save();
            // $user->notify(new UserChangesNotification('pin'));
            return redirect()->back()->with(['flash_type' => 'success','flash_msg'=>'Pin changed successfully']); //with success
        }
        else return redirect()->back()->withErrors(['oldpassword' => 'Your old pin is wrong'])->with(['flash_type' => 'danger','flash_msg'=>'Something went wrong']);
    }
    

}

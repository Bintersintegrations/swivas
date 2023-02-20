<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\State;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\GeoLocationTrait;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers,GeoLocationTrait;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm($slug = null)
    {
        if($slug) session(['referrer' => $slug]);
        $states = State::all();
        return view('frontend.outside.auth.register',compact('states'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'state' => ['required'],
            'city' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referrer = null;
        if(request()->session()->has('referrer')){
            $referrer = User::where('slug',session('referrer'))->first()->id;
        }
        $role = Role::where('name','user')->first();
        $user = User::create([
            'firstname' => $data['fname'],
            'surname' => $data['lname'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'state_id' => $data['state'], 
            'city_id' => $data['city'], 
            'role_id' => $role->id, 
            'parent_id' => $referrer, 
        ]);
        return $user;
    }
}

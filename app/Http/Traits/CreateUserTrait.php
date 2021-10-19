<?php
namespace App\Http\Traits;

use App\Role;
use App\User;
use App\Rules\UserExistRule;
use App\Rules\CustomerExistRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

trait CreateUserTrait
{
    protected function create(array $data,$userRole){
        $role = Role::where('name',$userRole)->first();
        $user = User::where('email',$data['email'])->first();
        if(!$user){
            $name = explode(' ',$data['name'],2);
            $info = Cache::get(request()->ip());
            $user = User::create([
                'firstname' => $name[0],
                'surname' => array_key_exists(1, $name) ? $name[1]:"",
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'country_id' => $info['country_id'],
                'state_id' => $info['state_id'],
                'place_id' => $info['city_id'],
                'timezone' => $info['timezone'], 
                'currency_id' => $info['country_currency'], 
            ]);
        }
        $user->roles()->attach($role->id);
        return $user;
    }

    protected function validator(array $data,$role)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', new UserExistRule($role)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function createCustomer(array $data,$merchant_id){
        //check if user exist, check if user is customer, check if user is merchant's customer
        $role = Role::where('name','customer')->first();
        $user = User::where('email',$data['email'])->first();
        if(!$user){
            $name = explode(' ',$data['name'],2);
            $info = Cache::get(request()->ip());
            $user = User::create([
                'firstname' => $name[0],
                'surname' => array_key_exists(1, $name) ? $name[1]:"",
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'country_id' => $info['country_id'],
                'state_id' => $info['state_id'],
                'place_id' => $info['city_id'],
                'timezone' => $info['timezone'], 
                'currency_id' => $info['country_currency'], 
            ]);
            $user->roles()->attach($role->id);
        }
        else $user->roles()->attach($role->id);
        $user->merchants()->attach($merchant_id,['relationship'=> 'customer']);
        return $user;
    }

    protected function validateCustomer(array $data){
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', new CustomerExistRule],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}


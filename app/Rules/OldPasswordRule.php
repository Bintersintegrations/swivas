<?php

namespace App\Rules;

use App\PasswordHistory;
use App\Setting;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class OldPasswordRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $oldpassword = Setting::where('name','prevent_old_password')->first()->value;
        $result = true;
        if($oldpassword){
            $passwordHistories = PasswordHistory::where('user_id',$this->user->id)->get();
            if($passwordHistories->isNotEmpty()){
                foreach($passwordHistories as $history){
                    if(Hash::check($value,$history->password)){
                        $result = false;
                    }
                }
            }
        }
        return $result;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You cannot use a previously used password.';
    }
}

<?php

namespace App\Rules;

use App\Setting;
use Illuminate\Contracts\Validation\Rule;

class PasswordLengthRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->length = Setting::where('name','password_minimum_length')->first()->value;
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

        return strlen($value) >= $this->length;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute must have $this->length or more characters.";
    }
}

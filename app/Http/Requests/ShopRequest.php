<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'agreement' => 'required',
            'business_name' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'business_name'=> 'required',
            'business_description'=> 'required',
            'business_categories'=> 'required',
            'address'=> 'required',
            'country_id'=> 'required',
            'state_id'=> 'required',
            'city_id'=> 'required',
            'cover'=> 'required',
            'logo'=> 'required',
            'business_certificate'=> 'required',
            'contact_document'=> 'required',
            'bank_id'=> 'required',
            'account_number'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            
            'agreement.required' => 'You must agree to terms and conditions',
            'business_name.required' => 'Business name is required',
            'contact_name.required' => 'Contact name is required',
            'contact_email.required' => 'Contact email is required',
            'contact_phone.required' => 'Contact Phone number is required',
            'business_name.required'=> 'Business Name is required',
            'business_description.required'=> 'Business description is required',
            'business_categories.required'=> 'Business Categories is required',
            'address.required'=> 'Address is required',
            'country_id.required'=> 'Country is required',
            'state_id.required'=> 'State is required',
            'city_id.required'=> 'City is required',
            'cover.required'=> 'Cover photo is required',
            'logo.required'=> 'Logo is required',
            'business_certificate.required'=> 'Business CAC Certificate is required',
            'contact_document.required'=> 'Contact Identification Document is required',
            'bank_id.required'=> 'Bank is required',
            'account_number.required'=> 'Account number is required',
        ];
    }
}

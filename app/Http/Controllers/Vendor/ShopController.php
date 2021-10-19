<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorThreadController extends Controller
{
    public function index(){
        
        return view('frontend.outside.shop.vendor');
    }
}

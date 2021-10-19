<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorManagementController extends Controller
{
    public function listvendors(){
        return view('backend.vendors.shops.list');
    }
    public function editvendor(){
        return view('backend.vendors.shops.edit');
    }
    public function savevendor(){
        return redirect()->back();
    }
    public function applications(){
        return view('backend.vendors.applications.list');
    }
    public function applicationview(){
        return view('backend.vendors.applications.view');
    }
}

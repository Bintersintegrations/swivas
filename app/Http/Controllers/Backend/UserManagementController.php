<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    public function listusers(){
        return view('backend.users.list');
    }
    public function editrole(){
        return view('backend.users.edit');
    }
    public function saveuser(){
        return redirect()->back();
    }
}

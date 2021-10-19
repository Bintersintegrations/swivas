<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleManagementController extends Controller
{
    public function listroles(){
        return view('backend.roles.list');
    }
    public function editrole(){
        return view('backend.roles.edit');
    }
    public function saverole(){
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    public function listusers(){
        $users = User::all();
        return view('backend.users.list',compact('users'));
    }
    public function editrole(){
        return view('backend.users.edit');
    }
    public function deleteuser(Request $request){
        $user = User::find($request->user_id);
        //$user->orders->delete();
        $user->delete();
        return redirect()->back();
    }   
    
}

<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembershipManagementController extends Controller
{
    public function listplans(){
        return view('backend.membership.plans.list');
    }
    public function createplan(){
        return view('backend.membership.plans.create');
    }
    public function editplan(){
        return view('backend.membership.plans.edit');
    }
    public function saveplan(){
        return redirect()->back();
    }
    public function features(){
        return view('backend.membership.plans.list');
    }
    public function listsubscriptions(){
        return view('backend.membership.subscriptions.list');
    }
    public function createsubscription(){
        return view('backend.membership.subscriptions.create');
    }
    public function editsubscription(){
        return view('backend.membership.subscriptions.edit');
    }
    public function savesubscription(){
        return redirect()->back();
    }
    public function listaddons(){
        return view('backend.membership.addons.list');
    }
    public function createaddon(){
        return view('backend.membership.addons.create');
    }
    public function editaddon(){
        return view('backend.membership.addons.edit');
    }
    public function saveaddon(){
        return redirect()->back();
    }
}

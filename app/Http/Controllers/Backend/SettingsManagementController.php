<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsManagementController extends Controller
{
    public function settings(){
        return view('backend.settings.settings');
    }
    public function savesettings(Request $request){

    }
}

<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportManagementController extends Controller
{
    public function reports(){
        return view('admin.reports.analysis');
    }
    public function generate(Request $request){
        return redirect()->back();
    }
}

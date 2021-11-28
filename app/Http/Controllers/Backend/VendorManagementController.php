<?php

namespace App\Http\Controllers\Backend;

use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorManagementController extends Controller
{
    public function listvendors(){
        $shops = Shop::all();
        // dd($shops[1]->bankAccount);
        return view('backend.shops.list',compact('shops'));
    }
    
    public function updatevendor(Request $request){
        $shop = Shop::find($request->shop_id);
        $shop->status = $request->action;
        $shop->save();
        return redirect()->back();
    }
    public function manage(Shop $shop){
        return view('backend.shops.application',compact('shop'));
    }

}

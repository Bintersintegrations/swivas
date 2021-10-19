<?php

namespace App\Http\Controllers\Backend;

use App\Item;
use App\Coupon;
use App\Country;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CouponManagementController extends Controller
{
    public function list(){
        $coupons = Coupon::all();
        return view('backend.coupons.list',compact('coupons'));
    }
    public function create(){
        $items = Item::all();
        $categories = Category::all();
        $countries = Country::all();
        return view('backend.coupons.create',compact('items','categories','countries'));
    }
    public function save(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $coupon = new Coupon;
        $coupon->user_id = $user->id;
        $coupon->name = $request->name;
        $coupon->code = $request->code;
        $coupon->start_at = $request->start_date ? Carbon::createFromFormat('m/d/Y',$request->start_date): null;
        $coupon->end_at = $request->end_date ? Carbon::createFromFormat('m/d/Y',$request->end_date): null;
        $coupon->quantity = $request->quantity;
        $coupon->available = $request->quantity;
        $coupon->is_percentage = $request->type == 'percent' ? true:false;
        $coupon->value = $request->value;
        $coupon->maximum_spend = $request->maximum_spend;
        $coupon->minimum_spend = $request->minimum_spend;
        $coupon->free_shipping = $request->shipping ? true:false;
        $coupon->category_limit = $request->categories ? $request->categories : null;
        $coupon->item_limit = $request->items ? $request->items :null;
        $coupon->country_limit = $request->countries ? $request->countries : null;
        $coupon->limit_per_user = $request->per_customer ? $request->per_customer : null;
        $coupon->status = $request->status ? true:false;
        $coupon->is_global = true;
        $coupon->save();
        return redirect()->route('admin.coupons.list')->with(['flash_type' => 'success','flash_msg' => 'Coupon Created Successfully']);
    }

    public function edit(Coupon $coupon){
        $items = Item::all();
        $categories = Category::all();
        $countries = Country::all();
        return view('backend.coupons.edit',compact('coupon','items','categories','countries'));
    }

    public function update(Coupon $coupon,Request $request){
        // dd($request->all());
        $user = Auth::user();
        $coupon->name= $request->name;
        $coupon->code= $request->code;
        $coupon->start_at= $request->start_date ? Carbon::createFromFormat('m/d/Y',$request->start_date): null;
        $coupon->end_at= $request->end_date ? Carbon::createFromFormat('m/d/Y',$request->end_date): null;
        $coupon->quantity= $request->quantity;
        $coupon->available= $request->quantity;
        $coupon->is_percentage= $request->type == 'percent' ? true:false;
        $coupon->value= $request->value;
        $coupon->maximum_spend = $request->maximum_spend;
        $coupon->minimum_spend = $request->minimum_spend;
        $coupon->free_shipping= $request->shipping ? true:false;
        $coupon->category_limit= $request->categories ? $request->categories : null;
        $coupon->item_limit= $request->items ? $request->items :null;
        $coupon->country_limit= $request->countries ? $request->countries : null;
        $coupon->limit_per_user= $request->per_customer ? $request->per_customer : null;
        $coupon->status= $request->status ? true:false;
        $coupon->is_global = true;
        $coupon->save();
        return redirect()->route('admin.coupons.list')->with(['flash_type' => 'success','flash_msg' => 'Coupon Edited Successfully']);
    
        
    }
}

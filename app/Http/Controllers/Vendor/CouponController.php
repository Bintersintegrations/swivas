<?php

namespace App\Http\Controllers\Vendor;

use App\Product;
use App\Coupon;
use App\Shop;
use App\Country;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function list(Shop $shop){
        $coupons = Coupon::where('shop_id',$shop->id)->get();
        return view('frontend.inside.shop.coupon.list',compact('shop','coupons'));
    }
    public function create(Shop $shop){
        $products = Product::where('shop_id',$shop->id)->get();
        $categories = Category::all();
        $countries = Country::all();
        return view('frontend.inside.shop.coupon.create',compact('shop','products','categories','countries'));
    }
    public function save(Shop $shop,Request $request){
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
        $coupon->product_limit = $request->products ? $request->products :null;
        $coupon->country_limit = $request->countries ? $request->countries : null;
        $coupon->limit_per_user = $request->per_customer ? $request->per_customer : null;
        $coupon->status = $request->status ? true:false;
        $coupon->is_global = false;
        $coupon->save();
        return redirect()->route('shop.coupons',$shop)->with(['flash_type' => 'success','flash_msg' => 'Coupon Created Successfully']);
    }
    public function edit(Shop $shop,Coupon $coupon){
        $products = Product::where('shop_id',$shop->id)->get();
        $categories = Category::all();
        $countries = Country::all();
        return view('frontend.inside.shop.coupon.edit',compact('shop','coupon','products','categories','countries'));
    }

    public function update(Shop $shop,Coupon $coupon,Request $request){
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
        $coupon->product_limit= $request->products ? $request->products :null;
        $coupon->country_limit= $request->countries ? $request->countries : null;
        $coupon->limit_per_user= $request->per_customer ? $request->per_customer : null;
        $coupon->status= $request->status ? true:false;
        $coupon->is_global = false;
        $coupon->save();
        return redirect()->route('shop.coupons',$shop)->with(['flash_type' => 'success','flash_msg' => 'Coupon Edited Successfully']);
    
        
    }

    public function delete(Shop $shop,Request $request){
        $coupon = Coupon::find($request->coupon_id);
        $coupon->delete();
        return redirect()->back();
    }
}

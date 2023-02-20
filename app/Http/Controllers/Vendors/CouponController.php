<?php

namespace App\Http\Controllers\Vendors;

use App\Product;
use App\Coupon;
use App\Shop;
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
        
        return view('frontend.inside.shop.coupon.create',compact('shop','products','categories'));
    }
    public function save(Shop $shop,Request $request){
        // dd($request->all());
        $user = Auth::user();
        $coupon = new Coupon;
        $coupon->shop_id = $shop->id;
        $coupon->name = $request->name;
        $coupon->code = $request->code;
        $coupon->start_at = $request->start_date ? Carbon::createFromFormat('m/d/Y',$request->start_date): null;
        $coupon->end_at = $request->end_date ? Carbon::createFromFormat('m/d/Y',$request->end_date): null;
        $coupon->quantity = $request->quantity;
        $coupon->available = $request->quantity;
        $coupon->is_percentage = $request->type == 'percent' ? true:false;
        $coupon->value = $request->value;
        $coupon->free_shipping = $request->shipping ? true:false;
        $coupon->category_limit = $request->categories ? $request->categories : null;
        $coupon->product_limit = $request->products ? $request->products :null;
        $coupon->limit_per_user = $request->per_customer ? $request->per_customer : null;
        $coupon->status = $request->status ? true:false;        
        $coupon->save();
        return redirect()->route('shop.coupons',$shop)->with(['flash_type' => 'success','flash_msg' => 'Coupon Created Successfully']);
    }
    public function edit(Shop $shop,Coupon $coupon){
        $products = Product::where('shop_id',$shop->id)->get();
        $categories = Category::all();
        
        return view('frontend.inside.shop.coupon.edit',compact('shop','coupon','products','categories'));
    }

    public function update(Shop $shop,Coupon $coupon,Request $request){
        // dd($request->all());
        $user = Auth::user();
        $coupon->name = $request->name;
        $coupon->code = $request->code;
        $coupon->start_at = $request->start_date ? Carbon::createFromFormat('m/d/Y',$request->start_date): null;
        $coupon->end_at = $request->end_date ? Carbon::createFromFormat('m/d/Y',$request->end_date): null;
        $coupon->quantity = $request->quantity;
        $coupon->available = $request->quantity;
        $coupon->is_percentage = $request->type == 'percent' ? true:false;
        $coupon->value = $request->value;
        $coupon->free_shipping = $request->shipping ? true:false;
        $coupon->category_limit = $request->categories ? $request->categories : null;
        $coupon->product_limit = $request->products ? $request->products :null;
        $coupon->limit_per_user = $request->per_customer ? $request->per_customer : null;
        $coupon->status = $request->status ? true:false;        
        $coupon->save();
        return redirect()->route('shop.coupons',$shop)->with(['flash_type' => 'success','flash_msg' => 'Coupon Edited Successfully']);
    
        
    }

    public function delete(Shop $shop,Request $request){
        $coupon = Coupon::find($request->coupon_id);
        $coupon->delete();
        return redirect()->back();
    }
}

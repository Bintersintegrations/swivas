<?php

namespace App\Http\Controllers\Vendor;

use App\Product;
use App\Color;
use App\Category;
use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function list(Vendor $vendor){
        $products = $vendor->products;
        return view('frontend.inside.shop.product.list',compact('products'));
    }
    public function create(Vendor $vendor){
        $categories = Category::all();
        $colors = Color::all();
        $attributes = Attribute::all();
        return view('frontend.inside.shop.product.create',compact('categories','colors','attributes'));
    }
    public function save(Vendor $vendor,Request $request){
        // dd($request->all());
        $user = Auth::user();
        $product = Product::create(['user_id'=> $user->id,'name'=> $request->title,'description'=> $request->description,'category_id'=> $request->category_id,'currency_id'=> $user->currency_id]);
        //dd($product->category->attributes->pluck('slug')->toArray());
        foreach($request->product_media as $key => $media){
            if($media) $product->media()->attach($media);
        }
        for($i = 0; $i < count($request->price); $i++){
            $product = new Product;
            $product->product_id = $product->id;
            $product->image_id = $request->product_image[$i];
            $product->quantity = $request->quantity[$i];
            $product->available = $request->quantity[$i];
            $product->amount = $request->price[$i];
            $product->save();
            foreach(Attribute::wherein('slug',$product->category->attributes->pluck('slug')->toArray())->get() as $attrib){
                if($request->input($attrib->slug)[$i]) $product->attributes()->attach($attrib->id,['result'=> $request->input($attrib->slug)[$i]]);
            }
        }
        return redirect()->route('shop.products')->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product created successfully']);
    }
    public function edit(Vendor $vendor,Product $product){
        // dd($product->category->attributes->pluck('slug')->toArray());
        $categories = Category::all();
        $colors = Color::all();
        $attributes = Attribute::all();
        // dd($product->media->where('format','video')[0]);
        return view('frontend.inside.shop.product.edit',compact('categories','colors','attributes','product'));
    }
    public function update(Vendor $vendor,Product $product,Request $request){
        // dd($request->all());
        if($request->title) $product->name = $request->title;
        if($request->description) $product->description = $request->description;
        if($request->category_id) $product->category_id = $request->category_id;
        $product->save();
        $product->media()->detach();
        foreach($request->product_media as $media){
            if($media) $product->media()->attach($media);
        }
        foreach($product->products as $prod){
            $prod->attributes()->detach();
        }
        foreach($product->products as $prod){
            $prod->delete();
        }
        for($i = 0; $i < count($request->price); $i++){
            $product = new Product;
            $product->product_id = $product->id;
            $product->image_id = $request->product_image[$i];
            $product->quantity = $request->quantity[$i];
            $product->available = $request->quantity[$i];
            $product->amount = $request->price[$i];
            $product->save();
            foreach(Attribute::wherein('slug',$product->category->attributes->pluck('slug')->toArray())->get() as $slug){
                if($request->input($slug->slug)[$i]) $product->attributes()->attach($slug->id,['result'=> $request->input($slug->slug)[$i]]);
            }
        }
        return redirect()->route('shop.products');
    }
    public function delete(Vendor $vendor,Request $request){
        $product = Product::find($request->product_id);
        if($product->orders->isNotEmpty())
        return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'Unsuccessful','flash_msg'=> 'Cannot delete Product']);
        $product->attributes()->detach();
        $product->delete();
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product deleted successfully']);
    }
    public function publish(Vendor $vendor,Request $request){
        $product = Product::find($request->product_id);
        $product->status = true;
        $product->save();
        return redirect()->back();
    }

    public function unpublish(Vendor $vendor,Request $request){
        $product = Product::find($request->product_id);
        $product->status = false;
        $product->save();
        return redirect()->back();
    }
}

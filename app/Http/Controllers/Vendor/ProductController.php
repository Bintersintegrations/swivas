<?php

namespace App\Http\Controllers\Vendor;

use App\Item;
use App\Color;
use App\Product;
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
    public function list(){
        $user = Auth::user();
        $products = $user->products;
        // dd($products[1]->image);
        return view('frontend.inside.product.list',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        $colors = Color::all();
        $attributes = Attribute::all();
        return view('frontend.inside.product.create',compact('categories','colors','attributes'));
    }
    public function save(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $item = Item::create(['user_id'=> $user->id,'name'=> $request->title,'description'=> $request->description,'category_id'=> $request->category_id,'currency_id'=> $user->currency_id]);
        //dd($item->category->attributes->pluck('slug')->toArray());
        foreach($request->item_media as $key => $media){
            if($media) $item->media()->attach($media);
        }
        for($i = 0; $i < count($request->price); $i++){
            $product = new Product;
            $product->item_id = $item->id;
            $product->image_id = $request->product_image[$i];
            $product->quantity = $request->quantity[$i];
            $product->available = $request->quantity[$i];
            $product->amount = $request->price[$i];
            $product->save();
            foreach(Attribute::wherein('slug',$item->category->attributes->pluck('slug')->toArray())->get() as $attrib){
                if($request->input($attrib->slug)[$i]) $product->attributes()->attach($attrib->id,['result'=> $request->input($attrib->slug)[$i]]);
            }
        }
        return redirect()->route('vendor.products')->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Item created successfully']);
    }
    public function edit(Item $item){
        // dd($item->category->attributes->pluck('slug')->toArray());
        $categories = Category::all();
        $colors = Color::all();
        $attributes = Attribute::all();
        // dd($item->media->where('format','video')[0]);
        return view('frontend.inside.product.edit',compact('categories','colors','attributes','item'));
    }
    public function update(Item $item,Request $request){
        // dd($request->all());
        if($request->title) $item->name = $request->title;
        if($request->description) $item->description = $request->description;
        if($request->category_id) $item->category_id = $request->category_id;
        $item->save();
        $item->media()->detach();
        foreach($request->item_media as $media){
            if($media) $item->media()->attach($media);
        }
        foreach($item->products as $prod){
            $prod->attributes()->detach();
        }
        foreach($item->products as $prod){
            $prod->delete();
        }
        for($i = 0; $i < count($request->price); $i++){
            $product = new Product;
            $product->item_id = $item->id;
            $product->image_id = $request->product_image[$i];
            $product->quantity = $request->quantity[$i];
            $product->available = $request->quantity[$i];
            $product->amount = $request->price[$i];
            $product->save();
            foreach(Attribute::wherein('slug',$item->category->attributes->pluck('slug')->toArray())->get() as $slug){
                if($request->input($slug->slug)[$i]) $product->attributes()->attach($slug->id,['result'=> $request->input($slug->slug)[$i]]);
            }
        }
        return redirect()->route('vendor.products');
    }
    public function delete(Request $request){
        $product = Product::find($request->product_id);
        if($product->orders->isNotEmpty())
        return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'Unsuccessful','flash_msg'=> 'Cannot delete Product']);
        $product->attributes()->detach();
        $product->delete();
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product deleted successfully']);
    }
    public function publish(Request $request){
        $product = Product::find($request->product_id);
        $product->status = true;
        $product->save();
        return redirect()->back();
    }

    public function unpublish(Request $request){
        $product = Product::find($request->product_id);
        $product->status = false;
        $product->save();
        return redirect()->back();
    }
}

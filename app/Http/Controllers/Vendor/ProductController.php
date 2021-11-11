<?php

namespace App\Http\Controllers\Vendor;

use App\Shop;
use App\Product;
use App\Category;
use App\Template;
use App\Attribute;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list(Shop $shop){
        $products = $shop->products;
        // dd($products);
        return view('frontend.inside.shop.product.list',compact('shop','products'));
    }

    public function templates(Shop $shop){
        $categories = Category::all();
        $templates = Template::orderBy('id','asc')->paginate(50);
        $attributes = Attribute::all();
        return view('frontend.inside.shop.template.list',compact('shop','categories','attributes','templates'));
    }

    public function create(Shop $shop){
        $categories = Category::all();
        $temp = Template::orderBy('id','asc')->get();
        $templates = collect([]);
        foreach($temp as $templt){
            if(Str::contains(json_encode($templt->categories),$shop->categories))
                $templates->push($templt);
        }
        $attributes = Attribute::all();
        return view('frontend.inside.shop.product.create',compact('shop','categories','attributes','templates'));
    }

    public function createWithTemplates(Shop $shop,Template $template){
        $categories = Category::all();
        $attributes = Attribute::all();
        return view('frontend.inside.shop.template.create',compact('shop','categories','attributes','template'));
    }

    public function save(Shop $shop,Request $request){
        $product = new Product;
        $product->shop_id = $shop->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->images = $request->images;
        $product->categories = $request->categories;
        if($request->group)
            $product->grouped_products = $request->group_items;
        if($request->bought_together)
            $product->bought_together = $request->bought_together;
        if($request->related)
            $product->related = $request->related;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        if($request->offer){
            $product->sale_price = $request->sale_price;
            $product->sale_from = Carbon::createFromFormat('m/d/Y',$request->start_date);
            $product->sale_to = Carbon::createFromFormat('m/d/Y',$request->end_date);
        }   
        if($request->save == 'draft')
            $product->status = $request->save;
        $product->save();

        
        // //dd($product->category->attributes->pluck('slug')->toArray());
        // foreach($request->product_media as $key => $media){
        //     if($media) $product->media()->attach($media);
        // }
        // for($i = 0; $i < count($request->price); $i++){
        //     $product = new Product;
        //     $product->product_id = $product->id;
        //     $product->image_id = $request->product_image[$i];
        //     $product->quantity = $request->quantity[$i];
        //     $product->available = $request->quantity[$i];
        //     $product->amount = $request->price[$i];
        //     $product->save();
        //     foreach(Attribute::wherein('slug',$product->category->attributes->pluck('slug')->toArray())->get() as $attrib){
        //         if($request->input($attrib->slug)[$i]) $product->attributes()->attach($attrib->id,['result'=> $request->input($attrib->slug)[$i]]);
        //     }
        // }
        return redirect()->route('shop.products',$shop)->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product created successfully']);
    }

    public function variant(Shop $shop,Product $product){
        return view('frontend.inside.shop.product.variant',compact('shop','product'));
    }
    
    public function saveVariant(Shop $shop,Product $product,Request $request){
        $variant = new Product;
        $variant->shop_id = $product->shop->id;
        $variant->name = $product->shop->name;
        $variant->description = $product->shop->description;
        $variant->images = $request->images;
        $variant->categories = $product->shop->categories;
        $variant->parent_id = $product->id;
        if(count($product->grouped_products))
            $variant->grouped_products = $product->grouped_products;
        if(count($product->bought_together))
            $variant->bought_together = $product->bought_together;
        if(count($product->related))
            $variant->related = $product->related;
        if($product->status == 'draft')
            $variant->status = $request->save;
        $variant->save();
        return redirect()->route('shop.products',$shop)->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product created successfully']);
    }

    public function edit(Shop $shop,Product $product){
        // dd($product->permalink);
        $categories = Category::all();
        $attributes = Attribute::all();
        return view('frontend.inside.shop.product.edit',compact('shop','categories','attributes','product'));
    }

    public function update(Shop $shop,Product $product,Request $request){
        // dd($request->all());
        $product->shop_id = $shop->id;
        if($request->name) $product->name = $request->name;
        if($request->description) $product->description = $request->description;
        if($request->images) $product->images = $request->images;
        if($request->categories) $product->categories = $request->categories;
        if($request->group)
            $product->grouped_products = $request->group_items;
        if($request->bought_together)
            $product->bought_together = $request->bought_together;
        if($request->related)
            $product->related = $request->related;
        if($request->price) $product->price = $request->price;
        if($request->quantity) $product->quantity = $request->quantity;
        if($request->offer){
            $product->sale_price = $request->sale_price;
            $product->sale_from = Carbon::createFromFormat('m/d/Y',$request->start_date);
            $product->sale_to = Carbon::createFromFormat('m/d/Y',$request->end_date);
        }   
        if($request->save == 'draft')
            $product->status = $request->save;
        $product->save();

        return redirect()->route('shop.products',$shop)->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product updated successfully']);
    }

    public function delete(Shop $shop,Request $request){
        $product = Product::find($request->product_id);
        if($product->orders->isNotEmpty())
        return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'Unsuccessful','flash_msg'=> 'Cannot delete Product']);
        $product->attributes()->detach();
        $product->delete();
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product deleted successfully']);
    }
    
    public function publish(Shop $shop,Request $request){
        $product = Product::find($request->product_id);
        $product->status = true;
        $product->save();
        return redirect()->back();
    }

    public function unpublish(Shop $shop,Request $request){
        $product = Product::find($request->product_id);
        $product->status = false;
        $product->save();
        return redirect()->back();
    }
}

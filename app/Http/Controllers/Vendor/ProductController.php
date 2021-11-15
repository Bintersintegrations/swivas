<?php

namespace App\Http\Controllers\Vendor;

use App\Shop;
use App\Product;
use App\Category;
use App\Template;
use App\Atribute;
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
        $atributes = Atribute::all();
        return view('frontend.inside.shop.template.list',compact('shop','categories','atributes','templates'));
    }

    public function create(Shop $shop){
        $categories = Category::all();
        $temp = Template::orderBy('id','asc')->get();
        $templates = collect([]);
        foreach($temp as $templt){
            if(Str::contains(json_encode($templt->categories),$shop->categories))
                $templates->push($templt);
        }
        $atributes = Atribute::all();
        return view('frontend.inside.shop.product.create',compact('shop','categories','atributes','templates'));
    }

    public function createWithTemplates(Shop $shop,Template $template){
        $categories = Category::all();
        $atributes = Atribute::all();
        return view('frontend.inside.shop.template.create',compact('shop','categories','atributes','template'));
    }

    public function save(Shop $shop,Request $request){
        // $categories = $this->getCategories($request->input('categories'));
        $product = new Product;
        $product->shop_id = $shop->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->images = $request->images;
        $product->categories = $request->categories;
        $product->atributes = $request->input('atributes');
        if($request->group)
            $product->grouped_products = $request->group_items;
        if($request->bought_together)
            $product->bought_together = $request->bought_together;
        if($request->related)
            $product->related = $request->related;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->min_qty = $request->min_qty;
        $product->max_qty = $request->max_qty;
        if($request->offer){
            $product->sale_price = $request->sale_price;
            $product->sale_from = Carbon::createFromFormat('m/d/Y',$request->start_date);
            $product->sale_to = Carbon::createFromFormat('m/d/Y',$request->end_date);
        }   
        if($request->save == 'publish')
            $product->status = $request->save;
        $product->save();
        return redirect()->route('shop.products',$shop)->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Product created successfully']);
    }

    public function variant(Shop $shop,Product $product){
        $atributes = Atribute::all();
        dd($product->getAtributez());
        return view('frontend.inside.shop.product.variant',compact('shop','product','atributes'));
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
        // dd(in_array('size_inch',array_keys(array_filter($product->atributes))));
        $categories = Category::all();
        $atributes = Atribute::all();
        return view('frontend.inside.shop.product.edit',compact('shop','categories','atributes','product'));
    }

    public function update(Shop $shop,Product $product,Request $request){
        
        if($request->name) $product->name = $request->name;
        if($request->description) $product->description = $request->description;
        if($request->images) $product->images = $request->images;
        if($request->categories) $product->categories = $request->categories;
        $product->atributes = $request->input('atributes');
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

    public function delete(Shop $shop,Product $product,Request $request){
        // if($product->orders->isNotEmpty())
        // return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'Unsuccessful','flash_msg'=> 'Cannot delete Product']);
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

    public function getCategories(Array $cat){
        
        // foreach($cat as $c){
        //     $category = 
        // }
    }
}

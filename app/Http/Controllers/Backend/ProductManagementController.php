<?php

namespace App\Http\Controllers\Backend;
use App\Item;
use App\Product;
use App\Category;
use App\Color;
use App\Atribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function list(){
        $products = Product::all();
        return view('backend.product.list',compact('products'));
    }

    public function status(Request $request){
        // dd($request->all());
        $product = Product::find($request->product_id);
        if($product->approved)
        $product->approved = false;
        else 
        $product->approved = true;
        $product->save();
        return redirect()->back();
    }
    
    public function delete(Request $request){
        $product = Product::find($request->product_id);
        $product->delete();
        return redirect()->back();
    }

    // public function create(){
    //     $categories = Category::all();
    //     $colors = Color::all();
    //     return view('backend.items.product.create',compact('categories','colors'));
    // }

    // public function save(Request $request){
        
    //     $user = Auth::user();
    //     //save item first
    //     $item = Item::create(['user_id'=> $user->id,'name'=> $request->title,'description'=> $request->description,'category_id'=> $request->category_id]);
    //     //dd($request->all());
    //     $atributes = Atribute::all();
    //     for($i = 0; $i < count($request->price); $i++){
    //         $product = new Product;
    //         $product->item_id = $item->id;
    //         $product->quantity = $request->quantity[$i];
    //         $product->available = $request->quantity[$i];
    //         $product->amount = $request->price[$i];
    //         $product->currency_id = $user->currency_id;
    //         foreach($atributes->pluck('slug') as $slug){
    //             if($request->input($slug)) $product->$slug = $request->input($slug)[$i];
    //         }
    //         $product->save();
    //     }
    //     return redirect()->route('admin.items.products');
        
    // }

    
    
    
}

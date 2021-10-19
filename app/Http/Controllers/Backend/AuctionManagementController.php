<?php

namespace App\Http\Controllers\Backend;

use App\Item;
use App\Product;
use App\Category;
use App\Auction;
use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AuctionManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function list(){
        $auctions = Auction::all();
        return view('backend.items.auction.list',compact('auctions'));
    }
    public function create(){
        $categories = Category::all();
        return view('backend.items.auction.create',compact('categories'));
    }
    public function save(Request $request){
        dd($request->all());
        $user = Auth::user();
        //save item first
        $item = Item::create(['user_id'=> $user->id,'name'=> $request->title,'description'=> $request->description,'category_id'=> $request->category_id]);
        $attributes = Attribute::all();
        for($i = 0; $i < count($request->price); $i++){
            $product = new Auction;
            $product->item_id = $item->id;
            $product->quantity = $request->quantity[$i];
            $product->available = $request->quantity[$i];
            $product->amount = $request->price[$i];
            $product->currency_id = $user->currency_id;
            foreach($attributes->pluck('slug') as $slug){
                if($request->input($slug)) $product->$slug = $request->input($slug)[$i];
            }
            $product->save();
        }
        return redirect()->route('admin.items.product');
        
    }
}

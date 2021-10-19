<?php

namespace App\Http\Controllers\Backend;

use App\Item;
use App\Category;
use App\Giving;
use App\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GivingManagementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function list(){
        $givings = Giving::all();
        return view('backend.items.giveaway.list',compact('givings'));
    }
    public function create(){
        $categories = Category::all();
        return view('backend.items.giveaway.create',compact('categories'));
    }
    public function save(Request $request){
        //dd($request->all());
        $user = Auth::user();
        //save item first
        $item = Item::create(['user_id'=> $user->id,'name'=> $request->title,'description'=> $request->description,'category_id'=> $request->category_id]);
        $attributes = Attribute::all();
        for($i = 0; $i < count($request->price); $i++){
            $product = new GiveAway;
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

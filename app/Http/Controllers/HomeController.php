<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->only('dashboards');
    }

    public function index(){
        return view('frontend.outside.welcome2');
    }
    public function dashboards(){
        $user = Auth::user();
        dd($user->isAdmin());
        if($user->isAdmin())
            return redirect()->route('admin.dashboard');
        else
            return redirect()->route('user.dashboard');
    }
    public function getCities(Request $request){
        $cities = City::where('state_id',$request->state_id)->get();
        return view('layouts.cities',compact('cities'));
    }
    public function getStates(Request $request){
        $states = State::where('country_id',$request->country_id)->get();
        return view('layouts.states',compact('states'));
    }
    // public function woocommerce(){
    //     // $response = Curl::to('https://swivas.com/wp-json/wc/v3/products')
    //     //             ->withData( array( 'consumer_key'=>'ck_703be22c84662694bbd1232ef6eab1d7033a298b','consumer_secret'=>'cs_513bbbcd5141aff1fcff5f587d81b77f12ae99c0','per_page'=> 100,'page'=> 9) )
    //     //             ->asJsonResponse()
    //     //             ->get();
    //     // // dd($response);
    //     $products = WoocommerceProduct::all();
    //     foreach($products as $product){
    //         $text = str_replace("https://swivas.com/","/",$product->permalink); 
    //         // dd($text);
    //         $product->permalink = $text;
    //         $product->save();
    //         // if($product->images && is_array($product->images)){
    //         //     $img = [];
    //         //     foreach($product->images as $image){
    //         //         if(array_key_exists('src',$image))
    //         //             $img[] = $image['src'];
    //         //     }
    //         //     $product->images = $img;
    //         //     $product->save();
    //         // }
    //     }
    //     dd('Done');
    // }
    
}

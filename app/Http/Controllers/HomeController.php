<?php

namespace App\Http\Controllers;

use App\WoocommerceProduct;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use App\WoocommerceAttributeTerm;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth')->only('index');
    }

    public function index(){
        return view('home');
    }
    public function woocommerce(){
        // $response = Curl::to('https://swivas.com/wp-json/wc/v3/products')
        //             ->withData( array( 'consumer_key'=>'ck_703be22c84662694bbd1232ef6eab1d7033a298b','consumer_secret'=>'cs_513bbbcd5141aff1fcff5f587d81b77f12ae99c0','per_page'=> 100,'page'=> 9) )
        //             ->asJsonResponse()
        //             ->get();
        // // dd($response);
        
    }
    
}

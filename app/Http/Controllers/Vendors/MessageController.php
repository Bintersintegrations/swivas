<?php

namespace App\Http\Controllers\Vendors;

use App\Message;
use App\Shop;
use App\Conversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Shop $shop){
        // $messages = Message::where('receiver_id',Auth::id())->orderBy('created_at','desc')->get();
        $messages = 'messages';
        return view('frontend.inside.shop.messages',compact('shop','messages'));
    }
    
    public function send(Shop $shop,Request $request){
        // dd($request->all());
        $message = Message::updateOrCreate(['user_id' => Auth::id(),'shop_id'=> $request->shop_id],['order_id'=> $request->order_id ?? null,'products'=> $request->products ?? null]);
        $conversation = Conversation::create(['message_id'=> $message->id,'body'=> $request->body,'customer'=> true]);
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Message Sent','flash_msg'=>'Message sent successfully']);
    }
    public function chat(Shop $shop){
        $message = Message::updateOrCreate(['user_id' => Auth::id(),'shop_id'=> $request->shop_id],['order_id'=> $request->order_id,'products'=> $request->products]);
        $conversation = Conversation::create(['message_id'=> $message->id,'body'=> $request->body,'customer'=> true]);
    }
    // public function read(){

    // }
}

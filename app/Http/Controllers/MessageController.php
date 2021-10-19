<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function inbox(){
        $messages = Message::where('receiver_id',Auth::id())->orderBy('created_at','desc')->get();
        // $messages = Message::all();

        return view('frontend.inside.messages.inbox',compact('messages'));
    }
    public function view(){
        return response();
    }
    public function sent(){
        $messages = Message::where('sender_id',Auth::id())->where('is_sent',true)->orderBy('created_at','desc')->get();
        return view('frontend.inside.messages.sent',compact('messages'));
    }
    public function draft(){
        $messages = Message::where('sender_id',Auth::id())->where('is_sent',false)->orderBy('created_at','desc')->get();
        return view('frontend.inside.messages.list',compact('messages'));
    }
    public function create(Request $request){
        dd($request->all());
        //send or save it
        $user = Auth::user();
        $user->unreadNotifications->where('type','App\Notifications\SupportResponseNotification')->markAsRead();
        return view('user.support.details',compact('ticket'));
    }
}

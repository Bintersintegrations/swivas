<?php

namespace App\Http\Controllers;

use App\Role;
use App\Media;
use App\Message;
use App\Conversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Traits\MediaManagementTrait;
use App\Notifications\SupportMessageClosedNotification;

class SupportThreadController extends Controller
{
    use MediaManagementTrait;
    public function create(){
        return view('frontend.outside.general.support');
    }
    
    public function save(Request $request){
        // dd($request->all());
        if(Auth::check())
        $user = Auth::user();
        else 
        $user = User::where('email',$request->email)->first();
        if(!$user)
        return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'User Not Found','flash_msg'=>'Please use other support channels']);
        $message = Message::create(['user_id'=> $user->id,'subject'=>$request->subject,'category'=>$request->category]);
        $receiver = Role::with(['users'])->where('name','customer_care')->first()->users->first();
        $conversation = Conversation::create(['message_id'=> $message->id,'body'=>$request->description,'sender_id'=> $user->id,'receiver_id'=> $receiver->id]);
        if($request->hasFile('attachment')){
            $ext = $request->file('attachment')->getClientOriginalExtension();
            $imageName = $user->id.rand().time().'.'.$ext;
            $media = Media::create(['name' => $imageName,'format' => 'image','user_id'=> $user->id]); //create media to database
            $request->file('attachment')->storeAs('public/media/image',$imageName);//save the file to public folder
            $conversation->media()->attach($media->id);
        }
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Support Created','flash_msg'=>'Check Your Email for Support Response']);
    }

}

<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard(){
        $user = Auth::user();
        $tickets = Ticket::all();
        return view('admin.support.dashboard',compact('user','tickets'));
    }
    public function index(){
        $user = Auth::user();
        $user->unreadNotifications->where('type','App\Notifications\SupportRequestNotification')->markAsRead();
        $tickets = Ticket::where('created_at','!=',null);
        if(request()->query('status')){
            switch(request()->query('status')){
                case 'opened': $tickets = $tickets->where('status',true)->where('attended_by','!=',null);;
                break;
                case 'closed': $tickets = $tickets->where('status',false);
                break;
                case 'new': $tickets = $tickets->where('status',true)->where('attended_by',null);
                break;
                case 'held': $tickets = $tickets->where('status','held');
                break;
            }
        }
        $tickets = $tickets->orderBy('created_at','DESC')->paginate(20);
        return view('admin.support.ticket',compact('tickets'));
    }

    public function supportMessage(Request $request){
        $ticket = Ticket::find($request->ticket_id);
        $message = new TicketMessage;
        $message->ticket_id = $ticket->id;
        //check for format
        $message->body = $request->message;
        $message->type = 'user';
        $message->user_id = Auth::id();
        $message->save();
        //event(new UserRequestingSupport($message));
        return redirect()->back(); //with success
    }

    public function details(Ticket $ticket){
        if(!$ticket->attended_by) $ticket->attended_by = Auth::id();
        $ticket->save();
        return view('admin.support.ticketdetails',compact('ticket'));
    }
    public function close(Request $request){
        if(!Hash::check($request->pin, Auth::user()->pin))
        return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'Operation Failure','flash_msg'=>'We could not verify its you ']); //with success;
        $ticket = Ticket::find($request->ticket_id);
        $ticket->status = false;
        $ticket->save();
        $ticket->user->notify(new SupportTicketClosedNotification($ticket));
        return redirect()->back()->with(['flash_type' => 'success','flash_msg'=>'Ticket closed successfully']);
    }

    public function reopen(Request $request){
        if(!Hash::check($request->pin, Auth::user()->pin))
        return redirect()->back()->with(['flash_type' => 'danger','flash_title' => 'Operation Failure','flash_msg'=>'We could not verify its you ']); //with success;
        $ticket = Ticket::find($request->ticket_id);
        $newticket = $ticket->replicate()->fill(['status' => true]);
        $newticket->save();
        foreach($ticket->ticketmessages as $message){
            $newmessage = $message->replicate()->fill(['ticket_id'=>$newticket->id]);
            $newmessage->save();
        }
        return redirect()->route('admin.ticketdetails',$newticket)->with(['flash_type' => 'success','flash_msg'=>'Ticket reopened successfully']);
    }
}

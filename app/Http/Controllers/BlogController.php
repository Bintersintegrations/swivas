<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function list(){
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('frontend.outside.blog.list',compact('posts','categories'));
    }

    public function post(Post $post){
        $post->views++;
        $post->save();
        return view('frontend.outside.blog.view',compact('post'));
    }
    public function comment(Request $request){
        $user = Auth::user();
        $comment = Comment::create(["post_id"=> $request->post_id , "user_id"=> $user->id, "body"=> $request->body]);
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=> 'Comments saved successfully']);
    }
    
    public function create(){
        $categories = Category::all();
        return view('frontend.inside.blog.posts.create',compact('categories'));
    }

    public function save(Request $request){
        // dd($request->all());
        $post = new Post;
        $post->title = $request->title;
        $post->excerpts = $request->excerpts;
        $post->categories = $request->categories;
        $post->publish_at = Carbon::createFromFormat('m/d/Y h:i A',$request->publish_date);
        $post->status = $request->status;
        $post->body = $request->body;
        $post->user_id = Auth::id();
        $post->save();
        if($request->featured_image)
        $post->media()->attach($request->featured_image);
        return redirect()->route('vendor.posts')->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=>'Post Created']); //with success;
    }

    public function edit(Post $post){
        return view('frontend.inside.blog.posts.edit',compact('post'));
    }

    public function update(Request $request){
        $post = Post::find($request->post_id);
        if($request->filled('title')) $post->title = $request->title;
        if($request->filled('tags')) $post->tags = $request->tags;
        if($request->filled('status')) $post->status = $request->status;
        if($request->filled('body')) $post->body = $request->body;
        if($request->filled('excerpts')) $post->excerpts = $request->excerpts;
        if($request->hasFile('cover')){
            if($post->image) Storage::delete('public/blog/'.$post->image);
            $cover = $request->file('cover')->getClientOriginalName();
            $request->file('cover')->storeAs('public/blog',$cover);
            $post->image = $cover;
        }
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=>'Post Updated']); //with success;
    }
    
    public function delete(Request $request){
        $post = Post::find($request->post_id);
        Comment::where('post_id',$post->id)->delete();
        $post->delete();
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=>'Post Deleted']); //with success;
    }
    
    public function status(Request $request){
        dd($request->all());
        return redirect()->back();
    }

    public function comments(){
        $comments = Comment::all();
        return view('frontend.inside.blog.comments.list',compact('comments'));
    }

    public function deleteComments(Request $request){
        $comment = Comment::find($request->comment_id);
        $comment->delete();
        return redirect()->back()->with(['flash_type' => 'success','flash_title' => 'Success','flash_msg'=>'Comments Deleted']); //with success;
    }

    public function changeCommentStatus(){
        return redirect()->back();
    }
}

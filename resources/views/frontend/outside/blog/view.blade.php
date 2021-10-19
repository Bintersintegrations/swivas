@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--section start-->
<section class="blog-detail-page section-b-space ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 blog-detail">
                @if($post->media->first())
                    <img src="{{asset('storage/media/image/'.$post->media->first()->name)}}" class="img-fluid blur-up lazyload" alt="">
                @else
                    <img src="{{asset('assets/images/about/about%20us.jpg')}}" class="img-fluid blur-up lazyload" alt="">
                @endif
                <h3>{{$post->title}}.</h3>
                <ul class="post-social">
                    <li>{{$post->created_at->format('d M Y')}}</li>
                    <li>Posted By : {{$post->user->name}}</li>
                    <li><i class="fa fa-eye"></i> {{$post->views}} Views</li>
                    <li><i class="fa fa-comments"></i> {{$post->comments->count()}} {{Illuminate\Support\Str::plural('Comment', $post->comments->count())}}</li>
                </ul>
                {{$post->body}}
            </div>
        </div>
        {{-- <div class="row section-b-space blog-advance">
            <div class="col-lg-12">
                {{$post->body}}
            </div>
        </div> --}}


        <div class="row section-b-space">
            @if($post->comments->isNotEmpty())
            <div class="col-sm-12">
                <ul class="comment-section">
                    @foreach ($post->comments as $comment)
                        <li>
                            <div class="media">
                                <img src="{{asset('storage/user/photo/'.$comment->user->photo)}}" alt="Generic placeholder image">  
                                
                                <div class="media-body">
                                    <h6>{{$comment->user->name}} <span>( {{$comment->created_at->format('d M Y').' @ '.$comment->created_at->format('h:i A')}} )</span></h6>
                                    <p>{{$comment->body}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
            @endif
        </div>
        <div class="row blog-contact">
            <div class="col-sm-12">
                <h2>Leave Your Comment</h2>
                @auth
                    <form class="theme-form" action="{{route('blogcomment')}}" method="POST">@csrf
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" placeholder="Write Your Comment"
                                    id="comment" rows="6" name="body"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>   
                @else
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('login')}}">Click here to Sign-in to add your comments</a>
                    </div>
                </div>
                    
                @endauth
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection
@push('scripts')
    
@endpush
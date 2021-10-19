@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!-- section start -->
<section class="section-b-space blog-page ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-7">
                @forelse ($posts as $post)
                <div class="row blog-media">
                    <div class="col-xl-6">
                        <div class="blog-left">
                            <a href="{{route('blogpost',$post)}}">
                                @if($post->media->first())
                                    <img src="{{asset('storage/media/image/'.$post->media->first()->name)}}" class="img-fluid blur-up lazyload " alt="">
                                @else
                                <img src="{{asset('assets/images/blog/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                @endif   
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-right">
                            <div>
                                <h6>{{$post->created_at->format('d M Y')}}</h6> 
                                <a href="{{route('blogpost',$post)}}">
                                    <h4>{{$post->title}}</h4>
                                </a>
                                <ul class="post-social">
                                    <li>Posted By : {{$post->user->name}}</li>
                                    <li><i class="fa fa-eye"></i> {{$post->views}} Views</li>
                                    <li><i class="fa fa-comments"></i> {{$post->comments->count()}} {{Illuminate\Support\Str::plural('Comment', $post->comments->count())}}</li>
                                </ul>
                                <p>{{$post->excerpts}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="card">
                        <div class="card-body"><p class="text-center">No Posts</p></div>
                    </div>
                @endforelse
                
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="blog-sidebar">
                    <div class="theme-card">
                        <h4>Recent Blog</h4>
                        <ul class="recent-blog">
                            <li>
                                <div class="media"> <img class="img-fluid blur-up lazyload"
                                        src="{{asset('assets/images/blog/1.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h6>25 Dec 2018</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <img class="img-fluid blur-up lazyload"
                                        src="{{asset('assets/images/blog/2.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h6>25 Dec 2018</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <img class="img-fluid blur-up lazyload"
                                        src="{{asset('assets/images/blog/3.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h6>25 Dec 2018</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <img class="img-fluid blur-up lazyload"
                                        src="{{asset('assets/images/blog/4.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h6>25 Dec 2018</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"> <img class="img-fluid blur-up lazyload"
                                        src="{{asset('assets/images/blog/5.jpg')}}" alt="Generic placeholder image">
                                    <div class="media-body align-self-center">
                                        <h6>25 Dec 2018</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="theme-card">
                        <h4>Popular Blog</h4>
                        <ul class="popular-blog">
                            <li>
                                <div class="media">
                                    <div class="blog-date"><span>03 </span><span>may</span></div>
                                    <div class="media-body align-self-center">
                                        <h6>Injected humour the like</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                                <p>it look like readable English. Many desktop publishing text.</p>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="blog-date"><span>03 </span><span>may</span></div>
                                    <div class="media-body align-self-center">
                                        <h6>Injected humour the like</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                                <p>it look like readable English. Many desktop publishing text.</p>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="blog-date"><span>03 </span><span>may</span></div>
                                    <div class="media-body align-self-center">
                                        <h6>Injected humour the like</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                                <p>it look like readable English. Many desktop publishing text.</p>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="blog-date"><span>03 </span><span>may</span></div>
                                    <div class="media-body align-self-center">
                                        <h6>Injected humour the like</h6>
                                        <p>0 hits</p>
                                    </div>
                                </div>
                                <p>it look like readable English. Many desktop publishing text.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

@endsection
@push('scripts')
    
@endpush
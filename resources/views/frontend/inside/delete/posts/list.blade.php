@extends('layouts.frontend.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>all posts</h3>
                                    <a href="{{route('shop.posts.create')}}" class="btn btn-sm btn-solid">add posts</a>
                                </div>
                                <table class="table-responsive-md table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">image</th>
                                            <th scope="col">title</th>
                                            <th scope="col">author</th>
                                            <th scope="col">status</th>
                                            <th scope="col">stats</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('blogpost',$post)}}">
                                                            <img src="{{asset('storage/media/image/'.$post->media->first()->name)}}" alt="" class="img-fluid img-50 blur-up lazyloaded"></a>
                                                    </div>
                                                </td>
                                                <td><a href="{{route('blogpost',$post)}}">{{$post->title}}</a></td>
                                                
                                                <td><a href="#">{{$post->user->name}}</a></td>
                                                <td>
                                                    @if($post->status)
                                                        <span class="badge badge-success">Published</span>
                                                        | <form action="{{route('shop.posts.status')}}" method="POST" class="d-inline">@csrf
                                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                                            <button class="btn btn-sm btn-warning border-rounded">Make Draft</button></form>
                                                    @else
                                                        <span class="badge badge-warning">Draft</span>
                                                        | <form action="{{route('shop.posts.status')}}" method="POST" class="d-inline">@csrf
                                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                                            <button class="btn btn-sm btn-success border-rounded">Publish Now</button></form> 
                                                    @endif
                                                    
                                                    
                                                </td>
                                                <td><i class="fa fa-eye">2</i> <i class="fa fa-comment">2</i></td>
                                                <td>
                                                    <a href="{{route('shop.posts.edit',$post)}}" class="btn btn-sm btn-success" title="pen"><i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-sm btn-primary"  title="Delete" data-toggle="modal" data-target="#deletepost{{$post->id}}"><i class="fa fa-trash"></i></button>
                                                    <div class="modal fade" id="deletepost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="deletepost{{$post->id}}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Post</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <form class="needs-validation" action="{{route('shop.posts.delete')}}" method="POST">@csrf
                                                                    <div class="modal-body">
                                                                        <h5>Are you sure you want to delete post titled: {{$post->title}} </h5>
                                                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-primary" type="submit">Yes, Delete</button>
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->

@endsection

@push('scripts')
    
@endpush
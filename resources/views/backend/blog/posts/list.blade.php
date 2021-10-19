@extends('layouts.backend.app')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Orders
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Sales</li>
                    <li class="breadcrumb-item active">Orders</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Product</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            
                            <th>Author</th>
                            <th>Status</th>
                            <th>Stats</th>
                            <th>Action</th>
                            
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
                                        @else
                                            <span class="badge badge-light">Draft</span>
                                        @endif
                                        {{-- <div class="custom-switch custom-switch-primary-inverse mb-2">
                                            <input name="user_can_delete_account" value="0" class="custom-switch-input" id="user_can_delete_account" type="checkbox">
                                            <label class="custom-switch-btn" for="user_can_delete_account"></label>
                                        </div> --}}
                                        <div class="switch-field">
                                            <input type="radio" id="radio-one" name="switch-one" value="yes" checked/>
                                            <label for="radio-one" class="btn btn-primary">Deleted</label>
                                            <input type="radio" id="radio-two" name="switch-one" value="no" />
                                            <label for="radio-two">Restore</label>
                                        </div>
                                    </td>
                                    <td><i class="fa fa-eye">2</i> <i class="fa fa-comment">2</i></td>
                                    <td>
                                        <a href="{{route('admin.posts.edit',$post)}}" class="btn btn-sm btn-success" title="pen"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-sm btn-primary"  title="Delete" data-toggle="modal" data-target="#deletepost{{$post->id}}"><i class="fa fa-trash"></i></button>
                                        <div class="modal fade" id="deletepost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="deletepost{{$post->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Post</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <form class="needs-validation" action="{{route('admin.posts.delete')}}" method="POST">@csrf
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
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Datatable js-->
<script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables/custom-basic.js')}}"></script>
@endpush

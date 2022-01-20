@extends('layouts.frontend.app')
@push('styles')
    <style>
        td,th{
            text-align: left !important;
        }
    </style>
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body text-left">
                                <div class="top-sec">
                                    <h3>all products</h3>
                                    <a href="{{route('shop.product.create',$shop)}}" class="btn btn-sm btn-solid">add product</a>
                                </div>
                                
                                <table class="table-responsive-md table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">image</th>
                                            <th scope="col">product name</th>
                                            <th scope="col">price</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">status</th>
                                            <th scope="col">duplicate/edit/delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <th scope="row">
                                                    <a href="{{route('product.view',$product)}}">
                                                        <img src="{{$product->images[0]}}" class="blur-up lazyloaded">
                                                    </a>
                                                </th>
                                                <td><a href="{{route('product.view',$product)}}">{{$product->name}}</a></td>
                                                
                                                <td>{{$product->shop->country->currency_symbol.' '.$product->price}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>@if($product->status == "publish")
                                                    <span class="badge badge-success ">Published</span>
                                                    @else
                                                    <span class="badge badge-warning ">Draft</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <a href="{{route('shop.product.variant',[$shop,$product])}}" class="btn btn-sm btn-primary rounded" title="variation">Add Variant</a> --}}
                                                    <a href="{{route('shop.product.edit',[$shop,$product])}}" class="btn btn-sm btn-secondary rounded" title="Edit"><i class="fa fa-copy"></i>Copy</a>
                                                    <a href="{{route('shop.product.edit',[$shop,$product])}}" class="btn btn-sm btn-info rounded" title="Edit"><i class="fa fa-pencil"></i>Edit</a>
                                                    <button class="btn btn-sm btn-danger rounded" title="Delete" data-toggle="modal" data-target="#product{{$product->id}}"><i class="fa fa-trash"></i>Delete</button>
                                                    <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="product{{$product->id}}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Product</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <form class="needs-validation" action="{{route('shop.product.delete',[$shop,$product])}}" method="POST" enctype="multipart/form-data">@csrf
                                                                    <div class="modal-body">
                                                                        <h5>Are you sure you want to delete product: {{$product->name}} </h5>
                                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-danger" type="submit">Yes, Delete</button>
                                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </tr>
                                        @empty
                                            <tr><td colspan="7" class="text-center">No Product for sale</td></tr>
                                        @endforelse
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
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endpush
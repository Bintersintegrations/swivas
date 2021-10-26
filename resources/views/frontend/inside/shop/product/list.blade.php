@extends('layouts.frontend.app')
@push('styles')
    
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
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>all products</h3>
                                <a href="{{route('shop.product.create')}}" class="btn btn-sm btn-solid">add product</a>
                                </div>
                                <table class="table-responsive-md table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">image</th>
                                            <th scope="col">product name</th>
                                            <th scope="col">category</th>
                                            <th scope="col">price</th>
                                            <th scope="col">stock</th>
                                            <th scope="col">status</th>
                                            <th scope="col">edit/delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <th scope="row"><a href="{{route('product.view',$product)}}">
                                                    <img
                                                        src="{{asset('storage/media/image/'.$product->image->name)}}"
                                                        class="blur-up lazyloaded"></a>
                                                </th>
                                                <td><a href="{{route('product.view',$product)}}">{{$product->item->name}}</a></td>
                                                <td>{{$product->item->category->name}}</td>
                                                <td>{{$product->item->currency->symbol.' '.$product->amount}}</td>
                                                <td>{{$product->available}}</td>
                                                <td>@if($product->status)
                                                    <span class="badge badge-success ">Published</span>
                                                    @else
                                                    <span class="badge badge-warning ">Draft</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($product->status)
                                                    <form class="d-inline" action="{{route('shop.product.unpublish')}}" method="POST">@csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <button type="submit" class="btn btn-sm btn-warning rounded" title="Unpublish"><i class="fa fa-eye-slash"></i></button>
                                                    </form>
                                                    
                                                    @else
                                                    <form class="d-inline" action="{{route('shop.product.publish')}}" method="POST">@csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <button type="submit" class="btn btn-sm btn-success rounded" title="Publish"><i class="fa fa-eye"></i></button>
                                                    </form>
                                                    @endif
                                
                                                    <a href="{{route('shop.product.edit',$product->item)}}" class="btn btn-sm btn-info rounded" title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-sm btn-danger rounded" title="Delete" data-toggle="modal" data-target="#product{{$product->id}}"><i class="fa fa-trash"></i></button>
                                                    <div class="modal fade" id="product{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="product{{$product->id}}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Product</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <form class="needs-validation" action="{{route('shop.product.delete')}}" method="POST" enctype="multipart/form-data">@csrf
                                                                    <div class="modal-body">
                                                                        <h5>Are you sure you want to delete product: {{$product->item->name}} </h5>
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
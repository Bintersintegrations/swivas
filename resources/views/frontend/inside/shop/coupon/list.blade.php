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
                                    <h3>all coupons</h3>
                                <a href="{{route('shop.coupon.create',$shop)}}" class="btn btn-sm btn-solid">add coupon</a>
                                </div>
                                {{-- <table class="table-responsive-md table mb-0"> --}}
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Title</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">Discount</th>
                                            
                                                <th scope="col">Period</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($coupons as $coupon)
                                                <tr class="jsgrid-row">
                                                    {{-- <td class="jsgrid-cell jsgrid-align-center">
                                                        <input type="checkbox">
                                                    </td> --}}
                                                    <td scope="row"> {{$coupon->name}}</td>
                                                    <td scope="row"> {{$coupon->code}}</td>
                                                    <td scope="row"> @if($coupon->type=="percent") {{$coupon->value}}% Off @else -{{$coupon->value}}Off @endif</td>
                                                    <td scope="row">Nigeria</td>
                                                    <td scope="row"> @if($coupon->start_at && $coupon->end_at){{ $coupon->start_at->format('M-d')}} to {{$coupon->end_at->format('M-d')}} @else - @endif</td>
                                                    <td scope="row"><i class="fa fa-circle @if($coupon->status) text-success @else text-danger @endif f-12"></i></td>
                                                    <td scope="row">
                                                        
                                                        <a href="{{route('shop.coupon.edit',$coupon)}}" class="btn btn-sm btn-primary rounded" title="pen"><i class="fa fa-pencil"></i></a>
                                                        <button class="btn btn-sm btn-danger rounded" title="Delete" data-toggle="modal" data-target="#coupon{{$coupon->id}}"><i class="fa fa-trash"></i></button>
                                                        <div class="modal fade" id="coupon{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="coupon{{$coupon->id}}" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Coupon</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <form class="needs-validation" action="{{route('shop.coupon.delete')}}" method="POST" enctype="multipart/form-data">@csrf
                                                                        <div class="modal-body">
                                                                            <h5>Are you sure you want to delete coupon: {{$coupon->name}} </h5>
                                                                            <input type="hidden" name="coupon_id" value="{{$coupon->id}}">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-danger" type="submit">Yes, Delete</button>
                                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr> 
                                            @empty
                                                <td scope="row">No Coupon</td>
                                            @endforelse
                                            {{-- <tr>
                                                <th scope="row">#78153</th>
                                                <td>belted trench coat</td>
                                                <td>shipped</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#51512</th>
                                                <td>man print tee</td>
                                                <td>pending</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#78153</th>
                                                <td>belted trench coat</td>
                                                <td>shipped</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">#51512</th>
                                                <td>man print tee</td>
                                                <td>pending</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                {{-- </table> --}}
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
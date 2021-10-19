@extends('layouts.frontend.app')
@push('styles')
    
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
                                    <h3>orders</h3>
                                    <a href="#" class="btn btn-sm btn-solid">add product</a>
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">order id</th>
                                            <th scope="col">product details</th>
                                            <th scope="col">status</th>
                                            <th scope="col">price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">#125021</th>
                                            <td>neck velvet dress</td>
                                            <td>shipped</td>
                                            <td>$205</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#521214</th>
                                            <td>belted trench coat</td>
                                            <td>shipped</td>
                                            <td>$350</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#521021</th>
                                            <td>men print tee</td>
                                            <td>pending</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#245021</th>
                                            <td>woman print tee</td>
                                            <td>shipped</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#122141</th>
                                            <td>men print tee</td>
                                            <td>canceled</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#125015</th>
                                            <td>men print tee</td>
                                            <td>pending</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#245021</th>
                                            <td>woman print tee</td>
                                            <td>shipped</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#122141</th>
                                            <td>men print tee</td>
                                            <td>canceled</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#125015</th>
                                            <td>men print tee</td>
                                            <td>pending</td>
                                            <td>$150</td>
                                        </tr>
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
    <!-- dare picker js -->
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <!-- chart js -->
    <script src="{{asset('assets/js/chart/apex/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/chart/apex/custom-chart.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
@endpush
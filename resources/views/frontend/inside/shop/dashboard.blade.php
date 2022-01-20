@extends('layouts.frontend.app')
@push('styles')
<style>
    .dashboard-section .dashboard-sidebar {
        position: static !important;
        z-index: 0px !important;
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
                
                <div class="counter-section">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="counter-box">
                                <img src="{{asset('assets/images/icon/dashboard/order.png')}}" class="img-fluid">
                                <div>
                                    <h3>25</h3>
                                    <h5>total products</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-box">
                                <img src="{{asset('assets/images/icon/dashboard/sale.png')}}" class="img-fluid">
                                <div>
                                    <h3>12500</h3>
                                    <h5>total sales</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-box">
                                <img src="{{asset('assets/images/icon/dashboard/homework.png')}}" class="img-fluid">
                                <div>
                                    <h3>50</h3>
                                    <h5>order pending</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="chart-order"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="card dashboard-table">
                            <div class="card-body">
                                <h3>trending products</h3>
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">image</th>
                                            <th scope="col">product name</th>
                                            <th scope="col">price</th>
                                            <th scope="col">sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><img
                                                    src="{{asset('assets/images/dashboard/product/1.jpg')}}"
                                                    class="blur-up lazyloaded"></th>
                                            <td>neck velvet dress</td>
                                            <td>$205</td>
                                            <td>1000</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><img
                                                    src="{{asset('assets/images/dashboard/product/9.jpg')}}"
                                                    class="blur-up lazyloaded"></th>
                                            <td>belted trench coat</td>
                                            <td>$350</td>
                                            <td>800</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><img src="{{asset('assets/images/pro3/34.jpg')}}"
                                                    class="blur-up lazyloaded"></th>
                                            <td>man print tee</td>
                                            <td>$150</td>
                                            <td>750</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card dashboard-table">
                            <div class="card-body">
                                <h3>recent orders</h3>
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">order id</th>
                                            <th scope="col">product details</th>
                                            <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">#21515</th>
                                            <td>neck velvet dress</td>
                                            <td>confrimed</td>
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
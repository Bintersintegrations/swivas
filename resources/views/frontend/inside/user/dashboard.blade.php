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
<!--  dashboard sectAdion start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">
                
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, {{$user->name}} !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                                account activity and update your account information. Select a link below to view or
                                edit information.</p>
                        </div>
                        <div class="counter-section my-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="counter-box border-0">
                                        <img src="{{asset('assets/images/icon/dashboard/naira.png')}}" class="img-fluid">
                                        <div>
                                            <h3>25</h3>
                                            <small>Earning this week</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-box border-0">
                                        <img src="{{asset('assets/images/icon/dashboard/naira.png')}}" class="img-fluid">
                                        <div>
                                            <h3>12500</h3>
                                            <small>Earning this month</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-box border-0">
                                        <img src="{{asset('assets/images/icon/dashboard/naira.png')}}" class="img-fluid">
                                        <div>
                                            <h3>{{$user->wallet}}</h3>
                                            <small>Available Balance</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="card dashboard-table">
                                    <div class="card-body">
                                        <h3>Latest Products</h3>
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
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Unread Messages</h3>
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="text-nowrap">12-02-2022 04:18PM</span> 
                                                    </td>
                                                    <td> 
                                                        <span class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit... </span> 
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12-02-2022 04:18PM</td>
                                                    <td> 
                                                        <span class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                        Vel atque natus ducimus </span>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>Recent Withdrawals</h3>
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">04/12/2022</th>
                                                    <td>N20,000</td>
                                                    <td>Pending</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#12/02/2022</th>
                                                    <td>N15,000</td>
                                                    <td>Completed</td>
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
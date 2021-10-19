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
                    <div class="col-6">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <div class="dashboard-title">
                                        <h4>Personal Profile</h4>
                                        <a href="{{route('user.profile')}}" class="px-2">edit</a>
                                    </div>
                                    <div class="dashboard-detail">
                                        <ul>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>name</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->name}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>email address</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->email}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Mobile</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->mobile ?? 'null'}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Country / Region</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->state->name.' '.$user->country->name}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>street address</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->address ?? 'null'}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>city/state</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->city->name}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Birthday</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->dob ?? 'null'}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Total Employees</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>101 - 200 People</h6>
                                                    </div>
                                                </div>
                                            </li> --}}
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Language</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>English</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <div class="dashboard-title">
                                        <h4>Vendor profile</h4>
                                        <a href="{{route('vendor.profile')}}" class="px-2">edit</a>
                                    </div>
                                    <div class="dashboard-detail">
                                        <ul>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>company name</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->shop->name ?? null}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>email address</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->shop->email ?? null}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Country / Region</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->shop->country->name ?? null}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>street address</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->shop->address ?? null}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>city/state</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->shop->city->name ?? null}},{{$user->shop->state->name ?? null}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Year Established</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>2018</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>Total Employees</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>101 - 200 People</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>category</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>clothing</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>zip</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>60515</h6>
                                                    </div>
                                                </div>
                                            </li> --}}
                                        </ul>
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
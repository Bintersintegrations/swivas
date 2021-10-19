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
                <div class="card tab2-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                    </svg>
                                    Settings
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content p-4" id="top-tabContent">
                            <div class="tab-pane fade active show" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                <h5 class="f-w-600">Company Details</h5>
                                <form class="theme-form" action="{{route('vendor.profile')}}" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="shop_name">Entity Name</label>
                                                <input type="text" class="form-control" id="shop_name" name="shop_name" value="{{$user->shop->name ?? old('shop_name')}}" placeholder="Company name" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type">Profile</label>
                                                <select class="form-control" id="type" name="type" required>
                                                    <option value="seller">Seller</option>
                                                    <option value="orphanage">Orphanages</option>
                                                    <option value="charity">Charity Organizations</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="mobile">Business phone</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->shop->mobile ?? old('mobile')}}" placeholder="Enter your number" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Business Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{$user->shop->email ?? old('email')}}" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control mb-0" name="address" placeholder="Street Address" value="{{$user->shop->address ?? old('address')}}" id="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Country *</label>
                                                <select class="form-control select2" id="country" name="country_id" disabled>
                                                    @foreach ($countries as $country)
                                                        <option value="{{$country->id}}" @if($user->shop->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                                <small class="text-muted text-danger">You cannot change your country. <a href="#">Help</a></small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City *</label>
                                                <select class="form-control select2" id="city" name="city_id">
                                                    @foreach ($user->country->cities as $city)
                                                        <option value="{{$city->id}}" @if($user->shop->city_id == $city->id) selected @endif>{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">Region/State *</label>
                                                <select class="form-control select2" id="state" name="state_id">
                                                    @foreach ($user->country->states as $state)
                                                        <option value="{{$state->id}}" @if($user->shop->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">F</span>
                                                </div>
                                                <input type="text" name="facebook" value="{{$user->shop->facebook ?? old('facebook')}}" id="facebook" placeholder="facebook.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">I</span>
                                                </div>
                                                <input type="text" name="instagram" value="{{$user->shop->instagram ?? old('instagram')}}" id="instagram" placeholder="instagram.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">T</span>
                                                </div>
                                                <input type="text" name="twitter" value="{{$user->shop->twitter ?? old('twitter')}}" id="twitter" placeholder="twitter.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">L</span>
                                                </div>
                                                <input type="text" name="linkedin" value="{{$user->shop->linkedin ?? old('linkedin')}}" id="linkedin" placeholder="linkedin.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                <div class="account-setting">
                                    <h5 class="f-w-600">Notifications</h5>
                                    <div class="row">
                                        <div class="col">
                                            <div class="custom-control custom-checkbox collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                                <label class="custom-control-label" for="public">SMS</label>
                                            </div>
                                            <div class="custom-control custom-checkbox collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                                <label class="custom-control-label" for="public">Email</label>
                                            </div>
                                            <div class="custom-control custom-checkbox collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                                <label class="custom-control-label" for="public">Facial Authentication</label>
                                            </div>
                                            <div class="custom-control custom-checkbox collection-filter-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                                <label class="custom-control-label" for="public">Public</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="account-setting deactivate-account my-4">
                                    <h5 class="f-w-600">Deactivate Account</h5>
                                    <div class="row">
                                        <div class="col">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">
                                                I have a privacy concern
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                                This is temporary
                                            </label>
                                            <label class="d-block mb-0" for="edo-ani2">
                                                <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" class="mt-2 btn btn-primary">Deactivate Account</button>
                                </div>
                                <div class="account-setting deactivate-account my-4">
                                    <h5 class="f-w-600">Delete Account</h5>
                                    <div class="row">
                                        <div class="col">
                                            <label class="d-block" for="edo-ani3">
                                                <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1" checked="">
                                                No longer usable
                                            </label>
                                            <label class="d-block" for="edo-ani4">
                                                <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1">
                                                Want to switch on other account
                                            </label>
                                            <label class="d-block mb-0" for="edo-ani5">
                                                <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani1" checked="">
                                                Other
                                            </label>
                                        </div>
                                    </div>
                                    <button type="button" class="mt-2 btn btn-primary">Delete Account</button>
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
    
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    {{-- <script>
        $('.select2').select2({
            'placeholder':'Select Attributes',
        });
    </script> --}}
@endpush
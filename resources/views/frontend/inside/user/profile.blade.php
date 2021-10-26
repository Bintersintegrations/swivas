@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Profile Edit</h5>
                    </div>
                    <div class="card-body">
                        {{-- <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
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
                            <li class="nav-item">
                                <a class="nav-link " id="auth-top-tab" data-toggle="tab" href="#top-auth" role="tab" aria-controls="top-auth" aria-selected="true">
                                    <i class="fa fa-lock"></i>
                                    Authentication
                                </a>
                            </li>
                            

                        </ul> --}}
                        <form class="theme-form" action="{{route('user.profile')}}" method="POST" enctype="multipart/form-data">@csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$user->firstname ?? old('firstname')}}" placeholder="First name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="surname">Surname</label>
                                        <input type="text" class="form-control" id="surname" name="surname" value="{{$user->surname ?? old('surname')}}" placeholder="Surname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="mobile">Phone number</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile ?? old('mobile')}}" placeholder="Enter your number" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{$user->email ?? old('email')}}" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="dob">Birthday</label>
                                    <input type="text" class="form-control" id="birthday" name="dob" value="{{$user->dob ? $user->dob->toDateString() : old('dob')}}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option @if($user->gender =="male") selected @endif>Male</option>
                                            <option @if($user->gender =="female") selected @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">Country *</label>
                                        <select class="form-control" id="country" name="country_id" disabled>
                                            @foreach ($countries as $country)
                                                <option value="{{$country->id}}" @if($user->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">Region/State *</label>
                                        <select class="form-control select2" id="state" name="state_id">
                                            @foreach ($user->country->states as $state)
                                                <option value="{{$state->id}}" @if($user->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City *</label>
                                        <select class="form-control select2" id="city" name="city_id">
                                            @foreach ($user->country->cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="language">Language</label>
                                        <select class="form-control" id="language" name="language_id">
                                            @foreach ($languages as $language)
                                                <option value="{{$language->id}}" @if($user->language_id == $language->id) selected @endif>{{$language->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timezone">Timezone</label>
                                        <select class="form-control select2" id="timezone" name="timezone">
                                            <option value="Africa/Lagos">Africa/Lagos</option>
                                            <option value="England/London">England/London</option>
                                            <option value="America/Newyork">America/Newyork</option>
                                            <option value="Canada/Ontario">Canada/Ontario</option>
                                        </select>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <div class="input-group mb-3 px-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">F</span>
                                        </div>
                                        <input type="text" name="facebook" id="facebook" placeholder="facebook.com/" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3 px-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">I</span>
                                        </div>
                                        <input type="text" name="instagram" id="instagram" placeholder="instagram.com/" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3 px-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">T</span>
                                        </div>
                                        <input type="text" name="twitter" id="twitter" placeholder="twitter.com/" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3 px-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">L</span>
                                        </div>
                                        <input type="text" name="linkedin" id="linkedin" placeholder="linkedin.com/" class="form-control ">
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                                </div>
                            </div>
                        </form>
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
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4'
        });
        
    </script>
    <script>
        $('.select2').select2();
    </script>
@endpush
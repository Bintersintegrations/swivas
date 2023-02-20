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
                                    <input type="text" class="form-control" id="birthday" name="dob" value="{{$user->dob ? $user->dob->format('m/d/Y') : old('dob')}}" required="">
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
                                        <label for="state">State *</label>
                                        <select class="form-control select2" id="state" name="state_id">
                                            @foreach ($states as $state)
                                                <option value="{{$state->id}}" @if($user->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City/Town *</label>
                                        <select class="form-control select2" id="city" name="city_id">
                                            @foreach ($user->state->cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Change Password</h5>
                    </div>
                    <div class="card-body">
                        <form class="theme-form" action="{{route('user.changePassword')}}" method="POST">@csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="oldpassword">Old Password</label>
                                        <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Your current Password" required="">
                                        @error('oldpassword')
                                            <span class="invalid-feedback d-inline ml-2" role="alert">
                                                <strong>- {{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="newpassword">New Password</label>
                                        <input type="password" class="form-control" id="newpassword" name="password" required>
                                        @error('password')
                                            <span class="invalid-feedback d-inline ml-2" role="alert">
                                                <strong>- {{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_repeat">Repeat New Password</label>
                                        <input type="password" class="form-control" id="password_repeat" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid" type="submit">Change Password</button>
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
        
        $('#state').on('change',function(){
            var state_id = $(this).val();
            // alert(state_id)
            $.ajax({
                type:'POST',
                dataType: 'html',
                url: "{{route('getCities')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'state_id': state_id
                },
                success:function(data) {
                    $('#city').html(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
    </script>
@endpush
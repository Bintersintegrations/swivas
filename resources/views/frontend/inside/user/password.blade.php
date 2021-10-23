@extends('layouts.frontend.app')
@push('styles')
    
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
@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="fname">First Name 
                                    @error('fname')
                                    <span class="invalid-feedback d-inline ml-2" role="alert">
                                        <strong>- {{$message}}</strong>
                                    </span>
                                    @enderror
                                </label>
                                
                                <input type="text" name="fname" value="{{ old('fname') }}" class="form-control @error('fname') is-invalid @enderror" id="fname" placeholder="First Name"
                                    required="" autocomplete="fname" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name
                                    @error('lname')
                                    <span class="invalid-feedback d-inline ml-2" role="alert">
                                        <strong>- {{$message}}</strong>
                                    </span>
                                    @enderror
                                </label>
                                <input type="text" name="lname" value="{{ old('lname') }}" class="form-control @error('lname') is-invalid @enderror" id="lname" placeholder="Last Name"
                                    required="" autocomplete="lname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">email
                                    @error('email')
                                    <span class="invalid-feedback d-inline ml-2" role="alert">
                                        <strong>- {{$message}}</strong>
                                    </span>
                                    @enderror
                                </label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="mobile">Mobile
                                    @error('mobile')
                                    <span class="invalid-feedback d-inline ml-2" role="alert">
                                        <strong>- {{$message}}</strong>
                                    </span>
                                    @enderror
                                </label>
                                <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="Phone number" required="">
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="password">Password
                                    @error('password')
                                    <span class="invalid-feedback d-inline ml-2" role="alert">
                                        <strong>- {{$message}}</strong>
                                    </span>
                                    @enderror
                                </label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password" placeholder="Enter your password" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirm"
                                    name="password_confirmation" placeholder="Repeat your password" required="">
                            </div>
                            <button type="submit" class="btn btn-solid">create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection
@push('scripts')
    
@endpush

@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--section start-->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>{{ __('Reset Password') }}</h3>
                <div class="theme-card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="theme-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email 
                                @error('email')
                                    <span class="invalid-feedback d-inline" role="alert">
                                        <strong>: {{ $message }}</strong>
                                    </span>
                                @enderror
                            </label> 
                            
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required="" autocomplete="email" autofocus>
                        </div>
                        <button type="submit" class="btn btn-solid">{{ __('Send Password Reset Link') }}</button>
                        <a href="{{route('login')}}" class="h6 pt-2 float-right">Back to Login</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3>New Customer</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Create A Account</h6>
                    <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                        able to order from our shop. To start shopping click register.</p>
                        <a href="{{route('register')}}" class="btn btn-solid">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection
@push('scripts')
    
@endpush

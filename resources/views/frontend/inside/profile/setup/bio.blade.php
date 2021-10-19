@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
<style>
    .select2-container{
        width: 100% !important;
    }
</style>
@endpush
@section('main')
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            @include('frontend.inside.profile.setup.menu')
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>SetUp</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>
                            <p>Your registration is successful. Let's help you get started with a few setup functionalities to jumpstart your experience on Swivas-Marketplace.
                                This setup process includes your profile completion, accesspin, bank acccount, identity verification.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2>
                            </div>
                        <form method="POST" action="{{route('setup.bio')}}" enctype="multipart/form-data">@csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Upload Image</h3>
                                        </div>
                                        <div class="box-content" id="upload-photo">
                                            
                                            <img src="{{asset('assets/images/img/1.jpg')}}" style="height:150px;width:150px;cursor:pointer" id="photo-upload">
                                        </div>
                                        <input type="file" style="visibility:hidden" name="photo" id="photo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Bio</h3>
                                        </div>
                                        <div class="box-content">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input name="dob" id="birthday" class="form-control digits col-md-7" type="text" >
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="d-flex">
                                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="male" name="gender" value="male">
                                                        <label class="custom-control-label" for="male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox collection-filter-checkbox mx-auto">
                                                        <input type="checkbox" class="custom-control-input" id="female" name="gender" value="female">
                                                        <label class="custom-control-label" for="female">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <button type="submit" class="btn btn-primary">Save & Continue</button>
                                </div>
                                <div>
                                    <a href="{{route('setup.address')}}" class="btn btn-dark float-right" id="goto-address">Skip</a>
                                </div>
                            </div>
                        </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
@endsection

@push('scripts')
<script src="{{asset('assets/js/date-picker.js')}}"></script>
    <script>
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4'
        });

        $('#upload-photo').click(function(){
            $('#photo').trigger('click');
        });
        $("#photo").change(function() {
            readURL(this,'photo-upload');
            $('#remove_image').show();
        });
        function readURL(input,output) {
            console.log(input.id);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                $('#'+output).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
      
    </script>
@endpush
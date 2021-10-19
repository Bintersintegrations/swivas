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
                            <h2>ADDRESS</h2>
                        </div>
                        <div class="welcome-msg">
                            
                            <p>Where would you like items you purchased and gifts you received to be delivered to ? . Specifying your address now helps you streamline the logistics procedures after. You can edit this later.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head mb-3">
                                <h2>Fill Address Information</h2>
                            </div>
                            <form action="{{route('setup.address')}}" method="POST"> @csrf
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="e.g 1234 Main St" required>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="country">Country</label>
                                        <select id="country" class="form-control" name="country_id" required>
                                            @foreach ($countries as $country)
                                                <option value="{{$country->id}}" @if($user->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="timezone">Timezone</label>
                                        <select id="timezone" class="form-control" name="timezone" required>
                                            <option value="Africa/Lagos" selected>Africa/Lagos</option>
                                            <option value="London">London</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <select id="state" class="form-control" name="state_id" required>
                                            @foreach ($states as $state)
                                                <option value="{{$state->id}}" @if($user->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <select id="city" class="form-control" name="city_id" required>
                                            @foreach ($cities as $city)
                                                <option value="{{$city->id}}" @if($user->city_id == $city->id) selected @endif>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save & Continue</button>
                                <a href="{{route('setup.accesspin')}}" class="btn btn-dark float-right" id="goto-accesspin">Skip</a>
                                
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
        $('#issue_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#expiry_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
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
        $('#goto-accesspin').on('click',function(){
            // $('.tab-pane').removeClass('active show');
            $('#accesspin').addClass('active show').siblings().removeClass('active show');
        });
        $('#goto-address').on('click',function(){
            $('#address').addClass('active show').siblings().removeClass('active show');
        });
    </script>
@endpush
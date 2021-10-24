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
            <div class="col-lg-3">
                <div class="account-sidebar">
                    <a class="popup-btn">my account</a>
                </div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back">
                        <span class="filter-back">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> back
                        </span>
                    </div>
                    <div class="block-content">
                        <ul class="nav nav-tabs" id="top-tab" role="tablist">
                            <li class="active show w-100"><a href="#welcome" data-toggle="tab">Welcome</a></li>
                            
                            <li class="w-100"><a href="#owner" data-toggle="tab">Owner</a></li>
                           
                            <li class="w-100"><a href="#details" data-toggle="tab">Details</a></li>
                            
                            <li class="w-100"><a href="#address" data-toggle="tab">Location</a></li>
                            <li class="w-100"><a href="#identification" data-toggle="tab">Identification</a></li>
                            <li class="w-100"><a href="#bankaccount" data-toggle="tab">Bank Account</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="">
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="welcome" role="tabpanel">
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>Shop Agreement</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        
                                        <p>Your are about to start making lots of money from sales. Let's help you get started with a few setup functionalities to jumpstart your experience on Swivas-Marketplace.
                                            This setup process includes your profile completion, accesspin, bank acccount, identity verification.</p>
                                    </div>
                                    <div class="box-account box-info">
                                        {{-- <div class="box-head">
                                            <h2>Account Information</h2>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Terms</h3>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                                                        Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                    <p>Click here to view whole document https://swivas.something.com</p>
                                                    
                                                </div>
                                                <div class="form-group ">
                                                    {{-- <label class="col-xl-3 col-md-4">Free Shipping</label> --}}
                                                    <div class="checkbox checkbox-primary ">
                                                        <input id="checkbox-primary-1" type="checkbox" data-original-title="" title="" name="shipping" value="1">
                                                        <label for="checkbox-primary-1 px-2"> Allow Free Shipping</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            
                                            <div>
                                                <a href="javascript:void(0)" class="btn btn-dark next float-right" id="goto-owner">Next</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="owner" role="tabpanel">
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>Owner Details</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <p>With an something your transactions and operations are authenticated to confirm its really you that is performing those actions. Please choose an accesspin that is hard to guess and do not share it with anyone, including us.</p>
                                    </div>
                                    <div class="box-account box-info my-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstname" class="form-label">First Name</label>
                                                    <input type="text" name="firstname" class="form-control" id="firstname" @auth value="{{Auth::user()->firstname}}" readonly @endauth placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Surname</label>
                                                    <input type="text" name="surname" class="form-control" id="surname" @auth value="{{Auth::user()->surname}}" readonly @endauth   placeholder="Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" @auth value="{{Auth::user()->email}}" readonly @endauth   placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Mobile</label>
                                                    <input type="text" name="mobile" class="form-control" id="mobile" @auth value="{{Auth::user()->mobile}}" readonly @endauth   placeholder="Mobile">
                                                </div>
                                            </div>
                                        </div>
                                        @guest
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="******">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password-confirmation" class="form-label">Repeat Password</label>
                                                    <input type="password" name="password-confirmation" class="form-control" id="password-confirmation" placeholder="******">
                                                </div>
                                            </div>
                                        </div>
                                        @endguest  
                                        <a href="javascript:void(0)" class="btn btn-primary previous" id="goto-welcome">previous</a>
                                        <a href="javascript:void(0)" class="btn btn-dark next float-right" id="goto-details">next</a>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="details" role="tabpanel" >
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>Shop SetUp</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        
                                        <p>Your are about to start making lots of money from sales. Let's help you get started with a few setup functionalities to jumpstart your experience on Swivas-Marketplace.
                                            This setup process includes your profile completion, accesspin, bank acccount, identity verification.</p>
                                    </div>
                                    <div class="box-account box-info">
                                        {{-- <div class="box-head">
                                            <h2>Account Information</h2>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Upload Cover Image</h3>
                                                    </div>
                                                    <div class="box-content" id="upload-photo">
                                                        
                                                        <img src="{{asset('assets/images/img/1.jpg')}}" class="img-fluid" style="width:100%;height:500px;cursor:pointer" id="photo-upload">
                                                    </div>
                                                    <input type="file" style="visibility:hidden" name="photo" id="photo">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Upload Logo</h3>
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
                                                        <h3>Info</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <div class="form-group">
                                                            <label>Business Name</label>
                                                            <input name="name" id="name" class="form-control digits" type="text" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Categories</label>
                                                            <div class="">
                                                                <select name="categories" class="select2" multiple>
                                                                    <option>Food</option>
                                                                    <option>Agriculture</option>
                                                                    <option>Spare Parts</option>
                                                                    <option>Vehicles</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                        </div>
                                        
                                            <a href="javascript:void(0)" class="btn btn-primary previous" id="goto-owner">Previous</a>
                                            
                                            <a href="javascript:void(0)" class="btn btn-dark next float-right" id="goto-address">Next</a>
                                            
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address" role="tabpanel" >
                            <div class="dashboard-right tab-content">
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
                                        <form> 
                                            <div class="form-group">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="country">Country</label>
                                                    <select id="country" class="form-control">
                                                        @foreach ($countries as $country)
                                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputState">Timezone</label>
                                                    <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control">
                                                        <option>Long</option>
                                                        <option>Lat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <select id="inputCity" class="form-control">
                                                        <option>Long</option>
                                                        <option>Lat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" class="btn btn-primary previous" id="goto-details">Previous</a>
                                            <a href="javascript:void(0)" class="btn btn-dark next float-right" id="goto-identification">next</a>
                                            
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="identification" role="tabpanel">
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>Identification</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <p>This procedure is necessary to confirm that we are dealing with who you say you are. This will help you prevent impersonations of your personal identity on the use of our platform.</p>
                                    </div>
                                    <div class="box-account box-info">
                                        {{-- <div class="box-head">
                                            <h2>Account Information</h2>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Upload Document</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <form>   
                                                            <div class="form-group">
                                                                <label for="document_type">Document Type</label>
                                                                <select id="document_type" class="form-control">
                                                                    <option value="internation_passport">International Passport</option> 
                                                                    <option value="drivers_license">Drivers License</option> 
                                                                    <option value="national_identity">National Identity</option> 
                                                                </select>
                                                            </div>   
                                                            <div class="form-group">
                                                                <label for="document">Upload Document</label>
                                                                <input type="file" class="form-control" id="document" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="identity_number">Document Number</label>
                                                                <input type="text" class="form-control" id="identity_number" placeholder="">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-6">
                                                                    <label for="issue_date">Issue Date</label>
                                                                    <input name="issue_date" id="issue_date" class="datepicker form-control digits" type="text" data-language="en">
                                                                </div>
                                                                <div class="form-group col-6">
                                                                    <label for="expiry_date">Expiry Date</label>
                                                                    <input name="expiry_date" id="expiry_date" class="datepicker form-control digits" type="text" data-language="en">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Information</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <p>Please be informed that these information will be verified before your account is completely active.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary previous " id="goto-address">previous</button>
                                        <a href="javascript:void(0)" class="btn btn-dark next float-right" id="goto-bankaccount">next</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bankaccount" role="tabpanel">
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>Bank Accounts</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <p>Hello, MARK JECNO !</p>
                                        <p>Your registration is successful. Let's help you get started with a few setup functionalities to jumpstart your experience on Swivas-Marketplace.
                                            This setup process includes your profile completion, accesspin, bank acccount, identity verification.</p>
                                    </div>
                                    <div class="box-account box-info">
                                        {{-- <div class="box-head">
                                            <h2>Account Information</h2>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title mb-3">
                                                        <h3>Bank Information</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <form>   
                                                            <div class="form-group">
                                                                <label for="bank_verification">Bank Verification Number (BVN)</label>
                                                                <input type="text" class="form-control" id="bvn" placeholder="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="bank w-100">Select Bank</label>
                                                                <select id="bank" class="form-control select2 w-100">
                                                                    <option value="uba">United Bank of Africa</option> 
                                                                    <option value="access">Access Bank</option> 
                                                                    <option value="zenith">Zenith Bank</option> 
                                                                </select>
                                                            </div>   
                                                            <div class="form-group">
                                                                <label for="account_number">Account Number</label>
                                                                <input type="text" class="form-control" id="document" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="branch">Select Branch</label>
                                                                <select id="branch" class="form-control select2">
                                                                    <option value="uba">United Bank of Africa</option> 
                                                                    <option value="access">Access Bank</option> 
                                                                    <option value="zenith">Zenith Bank</option> 
                                                                </select>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Information</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <p>Please be informed that these information will be verified before your account is completely active.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-primary previous">previous</a>
                                        <button type="submit" class="btn btn-dark float-right">save & continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </form>
                
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
        $('.select2').select2({
            placeholder:'Select Categories'
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
        $('#goto-welcome').on('click',function(){
            $('#welcome').addClass('active show').siblings().removeClass('active show');
        });
        $('#goto-owner').on('click',function(){
            $('#owner').addClass('active show').siblings().removeClass('active show');
        });
        $('#goto-details').on('click',function(){
            $('#details').addClass('active show').siblings().removeClass('active show');
        });
        
        $('#goto-address').on('click',function(){
            $('#address').addClass('active show').siblings().removeClass('active show');
        });
        $('#goto-identification').on('click',function(){
            $('#identification').addClass('active show').siblings().removeClass('active show');
        });
        $('#goto-bankaccount').on('click',function(){
            $('#bankaccount').addClass('active show').siblings().removeClass('active show');
        });
    </script>
@endpush
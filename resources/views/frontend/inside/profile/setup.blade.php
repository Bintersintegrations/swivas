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
                            <li class="w-100"><a href="#address" data-toggle="tab">Shipment Address</a></li>
                            <li class="w-100"><a href="#accesspin" data-toggle="tab">Access Pin</a></li>
                            <li class="w-100"><a href="#identification" data-toggle="tab">Identification</a></li>
                            <li class="w-100"><a href="#bankaccount" data-toggle="tab">Bank Account</a></li>
                            {{-- <li><a href="#">My Account</a></li>
                            <li><a href="#">Change Password</a></li> --}}
                            <li class="last"><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade active show" id="welcome" role="tabpanel">
                        <div class="dashboard-right tab-content">
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
                                            <a href="javascript:void(0)" class="btn btn-dark float-right" id="goto-address">Skip</a>
                                        </div>
                                    </div>
                                    
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
                                                        <option value="{{$country->id}}" @if($user->country_id == $country->id) selected @endif>{{$country->name}}</option>
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
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->id}}" @if($user->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <select id="inputCity" class="form-control">
                                                    @foreach ($cities as $city)
                                                        <option value="{{$city->id}}" @if($user->city_id == $city->id) selected @endif>{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save & Continue</button>
                                        <a href="javascript:void(0)" class="btn btn-dark float-right" id="goto-accesspin">Skip</a>
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="accesspin" role="tabpanel">
                        <div class="dashboard-right tab-content">
                            <div class="dashboard">
                                <div class="page-title">
                                    <h2>AccessPin</h2>
                                </div>
                                <div class="welcome-msg">
                                    <p>With an access pin, your transactions and operations are authenticated to confirm its really you that is performing those actions. Please choose an accesspin that is hard to guess and do not share it with anyone, including us.</p>
                                </div>
                                <div class="box-account box-info">
                                    <div class="box-head mb-3">
                                        <h2>Set Access Pin</h2>
                                    </div>
                                    <form> 
                                        <div class="form-group row">
                                            <label for="accesspin" class="col-md-3 form-label">Enter 6 digit pin</label>
                                            <input type="password" class="form-control col-md-4" id="accesspin" placeholder="******">
                                        </div>
                                        <div class="form-group row">
                                            <label for="repeatpin" class="col-md-3 form-label">Repeat pin</label>
                                            <input type="password" class="form-control col-md-4" id="repeatpin" placeholder="******">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save & Continue</button>
                                        <a href="javascript:void(0)" class="btn btn-dark float-right" id="goto-accesspin">Skip</a>
                                        
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
                                    <button type="submit" class="btn btn-primary">Save & Continue</button>
                                    <a href="javascript:void(0)" class="btn btn-dark float-right" id="goto-accesspin">Skip</a>
                                    
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
                                    <button type="submit" class="btn btn-primary">Save & Continue</button>
                                    <a href="javascript:void(0)" class="btn btn-dark float-right" id="goto-accesspin">Skip</a>
                                </div>
                            </div>
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
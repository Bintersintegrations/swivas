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
                            <form action="{{route('setup.bankaccount')}}" method="POST"> @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title mb-3">
                                                <h3>Bank Information</h3>
                                            </div>
                                            <div class="box-content">
                                                
                                                    <div class="form-group">
                                                        <label for="bank_verification">Bank Verification Number (BVN)</label>
                                                        <input type="text" name="bvn" class="form-control" id="bvn" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bank w-100">Select Bank</label>
                                                        <select id="bank" class="form-control select2 w-100" name="bank_name">
                                                            <option value="uba">United Bank of Africa</option> 
                                                            <option value="access">Access Bank</option> 
                                                            <option value="zenith">Zenith Bank</option> 
                                                        </select>
                                                    </div>   
                                                    <div class="form-group">
                                                        <label for="account_number">Account Number</label>
                                                        <input type="text" class="form-control" id="document" name="account_number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="branch">Select Branch</label>
                                                        <select id="branch" class="form-control select2" name="bank_branch">
                                                            <option value="uba">United Bank of Africa</option> 
                                                            <option value="access">Access Bank</option> 
                                                            <option value="zenith">Zenith Bank</option> 
                                                        </select>
                                                    </div>
                                                
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
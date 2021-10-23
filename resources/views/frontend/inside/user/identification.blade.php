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
                            <h2>Identification</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>This procedure is necessary to confirm that we are dealing with who you say you are. This will help you prevent impersonations of your personal identity on the use of our platform.</p>
                        </div>
                        <div class="box-account box-info">
                            {{-- <div class="box-head">
                                <h2>Account Information</h2>
                            </div> --}}
                            <form action="{{route('setup.identification')}}" method="POST" enctype="multipart/form-data">@csrf   
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <h3>Upload Document</h3>
                                            </div>
                                            <div class="box-content">
                                                
                                                    <div class="form-group">
                                                        <label for="document_type">Document Type</label>
                                                        <select id="document_type" class="form-control" name="document_type" required>
                                                            <option value="internation_passport">International Passport</option> 
                                                            <option value="drivers_license">Drivers License</option> 
                                                            <option value="national_identity">National Identity</option> 
                                                        </select>
                                                    </div>   
                                                    <div class="form-group">
                                                        <label for="document">Upload Document</label>
                                                        <input name="document" type="file" class="form-control" id="document"  required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="identity_number">Document Number</label>
                                                        <input name="document_number" id="identity_number" type="text" class="form-control"  placeholder=""  required>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-6">
                                                            <label for="issue_date">Issue Date</label>
                                                            <input name="issue_date" id="issue_date" class="datepicker form-control digits" type="text" data-language="en" required>
                                                        </div>
                                                        <div class="form-group col-6">
                                                            <label for="expiry_date">Expiry Date</label>
                                                            <input name="expiry_date" id="expiry_date" class="datepicker form-control digits" type="text" data-language="en" required>
                                                        </div>
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
                                <a href="{{route('setup.bankaccount')}}" class="btn btn-dark float-right">Skip</a>
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
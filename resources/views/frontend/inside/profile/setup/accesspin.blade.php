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
                            <h2>AccessPin</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>With an access pin, your transactions and operations are authenticated to confirm its really you that is performing those actions. Please choose an accesspin that is hard to guess and do not share it with anyone, including us.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head mb-3">
                                <h2>Set Access Pin</h2>
                            </div>
                            <form action="{{route('setup.accesspin')}}" method="POST">@csrf
                                <div class="form-group row">
                                    <label for="accesspin" class="col-md-3 form-label">Enter 6 digit pin</label>
                                    <input type="password" class="form-control col-md-4" id="accesspin" maxlength="6" minlength="6" name="accesspin" placeholder="******" required>
                                </div>
                                <div class="form-group row">
                                    <label for="repeatpin" class="col-md-3 form-label">Repeat pin</label>
                                    <input type="password" class="form-control col-md-4" id="repeatpin" maxlength="6" minlength="6"  name="accesspin_confirmation" placeholder="******" required>
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
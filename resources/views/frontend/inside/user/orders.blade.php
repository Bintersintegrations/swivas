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
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">  
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>My Orders   </h3>
                                    {{-- <a href="#" class="btn btn-sm btn-solid">add product</a> --}}
                                </div>
                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">order id</th>
                                            <th scope="col">product details</th>
                                            <th scope="col">amount</th>
                                            <th scope="col">status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">12-Dec-2015</th>
                                            <th scope="row">#125021</th>
                                            <td>neck velvet dress</td>
                                            
                                            <td>$205</td>
                                            <td>shipped</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#521214</th>
                                            <th scope="row">#521214</th>
                                            <td>belted trench coat</td>
                                            
                                            <td>$350</td>
                                            <td>shipped</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#521021</th>
                                            <th scope="row">#521021</th>
                                            <td>men print tee</td>
                                            
                                            <td>$150</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#245021</th>
                                            <th scope="row">#245021</th>
                                            <td>woman print tee</td>
                                            
                                            <td>$150</td>
                                            <td>shipped</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#122141</th>
                                            <th scope="row">#122141</th>
                                            <td>men print tee</td>
                                            
                                            <td>$150</td>
                                            <td>canceled</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#125015</th>
                                            <th scope="row">#125015</th>
                                            <td>men print tee</td>
                                            
                                            <td>$150</td>
                                            <td>pending</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#245021</th>
                                            <th scope="row">#245021</th>
                                            <td>woman print tee</td>
                                            
                                            <td>$150</td>
                                            <td>shipped</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#122141</th>
                                            <th scope="row">#122141</th>
                                            <td>men print tee</td>
                                            
                                            <td>$150</td>
                                            <td>canceled</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#125015</th>
                                            <th scope="row">#125015</th>
                                            <td>men print tee</td>
                                            
                                            <td>$150</td>
                                            <td>pending</td>
                                        </tr>
                                    </tbody>
                                </table>
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
@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Settings</h5>
                    </div>
                    <div class="card-body">
                        <div class="account-setting">
                            <h5 class="f-w-600">Notifications</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                        <label class="custom-control-label" for="public">SMS</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                        <label class="custom-control-label" for="public">Email</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                        <label class="custom-control-label" for="public">Facial Authentication</label>
                                    </div>
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="public" name="eligibility[]" value="public">
                                        <label class="custom-control-label" for="public">Public</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="account-setting deactivate-account my-4">
                            <h5 class="f-w-600">Deactivate Account</h5>
                            <div class="row">
                                <div class="col">
                                    <label class="d-block" for="edo-ani">
                                        <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">
                                        I have a privacy concern
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                        This is temporary
                                    </label>
                                    <label class="d-block mb-0" for="edo-ani2">
                                        <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="mt-2 btn btn-primary">Deactivate Account</button>
                        </div>
                        <div class="account-setting deactivate-account my-4">
                            <h5 class="f-w-600">Delete Account</h5>
                            <div class="row">
                                <div class="col">
                                    <label class="d-block" for="edo-ani3">
                                        <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1" checked="">
                                        No longer usable
                                    </label>
                                    <label class="d-block" for="edo-ani4">
                                        <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1">
                                        Want to switch on other account
                                    </label>
                                    <label class="d-block mb-0" for="edo-ani5">
                                        <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani1" checked="">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="mt-2 btn btn-primary">Delete Account</button>
                        </div>

                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->

@endsection

@push('scripts')

    <!-- dare picker js -->
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    
    <script>
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4'
        });
        
    </script>
    {{-- <script>
        $('.select2').select2({
            'placeholder':'Select Attributes',
        });
    </script> --}}
@endpush
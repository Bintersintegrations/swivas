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
                    <a class="popup-btn">setup menu</a>
                </div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back">
                        <span class="filter-back">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> back
                        </span>
                    </div>
                    <div class="block-content">
                        <ul class="nav nav-tabs setupmenu" id="top-tab" role="tablist">
                            <li class="active show welcome w-100"><a href="#welcome" data-toggle="tab">Welcome</a></li>
                            <li class="w-100 owner"><a href="#owner" data-toggle="tab">Owner</a></li>
                            <li class="w-100 details"><a href="#details" data-toggle="tab">Details</a></li>
                            <li class="w-100 address"><a href="#address" data-toggle="tab">Location</a></li>
                            <li class="w-100 identification"><a href="#identification" data-toggle="tab">Logistics</a></li>
                            <li class="w-100 bankaccount"><a href="#bankaccount" data-toggle="tab">Bank Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form action="{{route('shop.setup')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="welcome" role="tabpanel">
                            @if (Session::has('errors'))
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title text-danger">
                                        <h2>Errors</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li class="d-block">
                                                <p class="invalid-feedback d-block text-danger" role="alert">
                                                    <strong>{{ $error }}</strong>
                                                </p>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
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
                                                    @error('email')
                                                    <span class="invalid-feedback d-inline" role="alert">
                                                        <strong>: {{ $message }}</strong>
                                                    </span>
                                                    @enderror
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
                                                        <input id="checkbox-primary-1" type="checkbox" data-original-title="" title="" name="agreement" value="1" >
                                                        <label for="checkbox-primary-1 px-2"> I have read the agreement</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            
                                            <div>
                                                <button type="button" type="button" class="btn btn-dark next float-right" id="goto-owner">Next</button>
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
                                                    <input type="text" name="firstname" class="form-control" id="firstname" @auth value="{{ Auth::user()->firstname ?? old('firstname') }}" readonly @endauth placeholder="First Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Surname</label>
                                                    <input type="text" name="surname" class="form-control" id="surname" @auth value="{{Auth::user()->surname ?? old('surname')}}" readonly @endauth   placeholder="Last Name" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email" @auth value="{{Auth::user()->email ?? old('email')}}" readonly @endauth   placeholder="Email" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Mobile</label>
                                                    <input type="text" name="mobile" class="form-control" id="mobile" @auth value="{{Auth::user()->mobile ?? old('mobile')}}" readonly @endauth   placeholder="Mobile" >
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
                                    </div>
                                    <div class="page-title">
                                        <h2>Contact Person</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <p>With an something your transactions and operations are authenticated to confirm its really you that is performing those actions. Please choose an accesspin that is hard to guess and do not share it with anyone, including us.</p>
                                    </div>
                                    <div class="box-account box-info my-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact_name" class="form-label">Full Name</label>
                                                    <input type="text" name="contact_name" value="{{ old('contact_name') }}" class="form-control" id="contact_name" placeholder="Contact Person Full name" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact_email" class="form-label">Email</label>
                                                    <input type="text" name="contact_email" value="{{ old('contact_email') }}" class="form-control" id="contact_email" placeholder="Contact Email" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact_phone" class="form-label">Phone Number</label>
                                                    <input type="text" name="contact_phone" value="{{ old('contact_phone') }}" class="form-control" id="contact_phone" placeholder="Contact Mobile number" >
                                                </div> 
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact_document">Upload Contact Person's ID</label>
                                                    <input type="file" name="contact_document" class="form-control" id="contact_document" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary previous" id="goto-welcome">previous</button>
                                        <button type="button" class="btn btn-dark next float-right" id="goto-details">next</button>
                                            
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
                                       
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Upload Cover Image</h3>
                                                    </div>
                                                    <div class="box-content upload-photo mb-4">
                                                        <input type="file" style="visibility:hidden" name="cover" id="cover">
                                                        <img src="{{asset('assets/images/img/1.jpg')}}" class="img-fluid" style="width:100%;height:500px;cursor:pointer" id="cover-upload">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Upload Logo</h3>
                                                    </div>
                                                    <div class="box-content upload-photo mb-3">
                                                        <input type="file" style="visibility:hidden" name="logo" id="logo">
                                                        <img src="{{asset('assets/images/img/1.jpg')}}" style="height:150px;width:150px;cursor:pointer" id="logo-upload">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Info</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        <div class="form-group">
                                                            <label>Business Name</label>
                                                            <input name="business_name" value="{{ old('business_name') }}" id="business_name" class="form-control digits" type="text" autocomplete="" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Business Description</label>
                                                            <textarea name="business_description" value="{{ old('business_description') }}" id="business_description" placeholder="We are into sales of..." class="form-control digits" ></textarea>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h3>Info</h3>
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                        <div class="form-group">
                                                            <label for="certificate">CAC Document</label>
                                                            <input type="file" name="business_certificate" class="form-control" id="certificate" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Categories of Products You Sell</label>
                                                            <div class="">
                                                                <select name="business_categories[]" class="select2" multiple >
                                                                @foreach ($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary previous" id="goto-owner">Previous</button>
                                        
                                        <button type="button" class="btn btn-dark next float-right" id="goto-address">Next</button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address" role="tabpanel" >
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>PHYSICAL LOCATION</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        
                                        <p>Where would you like items you purchased and gifts you received to be delivered to ? . Specifying your address now helps you streamline the logistics procedures after. You can edit this later.</p>
                                    </div>
                                    <div class="box-account box-info">
                                        <div class="box-head mb-3">
                                            <h2>Fill Address Information</h2>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="inputAddress" placeholder="1234 Main St" >
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="country">Country</label>
                                                <select id="country" name="country_id" class="countries select2 form-control" >
                                                    @foreach ($countries as $country)
                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">State</label>
                                                <select id="inputState" name="state_id" class="states form-control" >
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputCity">Area</label>
                                                <select id="inputCity" name="city_id" class="cities form-control" >
                                                    <option>Long</option>
                                                    <option>Lat</option>
                                                </select>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary previous" id="goto-details">Previous</button>
                                        <button type="button" class="btn btn-dark next float-right" id="goto-identification">next</button>
                                     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="identification" role="tabpanel">
                            <div class="dashboard-right tab-content">
                                <div class="dashboard">
                                    <div class="page-title">
                                        <h2>Delivery Details</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <p>With an something your transactions and operations are authenticated to confirm its really you that is performing those actions. Please choose an accesspin that is hard to guess and do not share it with anyone, including us.</p>
                                    </div>
                                    <div class="box-account box-info my-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_company_name_1" class="form-label">Logistic Company Name</label>
                                                    <input type="text" name="delivery_company_name[]" value="{{ old('delivery_company_name') }}" class="form-control" id="delivery_company_name_1" placeholder="Delivery Company">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_man_name_1" class="form-label">Delivery Personnel Name</label>
                                                    <input type="text" name="delivery_username[]" value="{{ old('delivery_username') }}" class="form-control" id="delivery_man_name_1" placeholder="Delivery Personnel" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_man_phone_1" class="form-label">Delivery Personnel Phone</label>
                                                    <input type="text" name="delivery_phone[]" value="{{ old('delivery_phone') }}"  class="form-control" id="delivery_man_phone_1" placeholder="Delivery Person Mobile number" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_man_id_1">Upload Delivery Person's ID</label>
                                                    <input type="file" name="delivery_id[]" class="form-control" id="delivery_man_id_1" >
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_company_name_2" class="form-label">Logistic Company Name</label>
                                                    <input type="text" name="delivery_company_name[]" value="{{ old('delivery_company_name') }}" class="form-control" id="delivery_company_name_2" placeholder="Delivery Company">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_man_name_2" class="form-label">Delivery Personnel Name</label>
                                                    <input type="text" name="delivery_username[]" value="{{ old('delivery_username') }}" class="form-control" id="delivery_man_name_2" placeholder="Delivery Personnel" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_man_phone_2" class="form-label">Delivery Personnel Phone</label>
                                                    <input type="text" name="delivery_phone[]" value="{{ old('delivery_phone') }}" class="form-control" id="delivery_man_phone_2" placeholder="Delivery Person Mobile number" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="delivery_man_id_2">Upload Delivery Person's ID</label>
                                                    <input type="file" name="delivery_id[]" class="form-control" id="delivery_man_id_2" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary previous" id="goto-welcome">previous</button>
                                        <button type="button" class="btn btn-dark next float-right" id="goto-details">next</button>
                                            
                                        </form>
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
                                                        <div class="form-group">
                                                            <label for="bank w-100">Select Bank</label>
                                                            <select id="bank" name="bank_id" class="form-control select2 w-100" >
                                                                @foreach ($banks as $bank)
                                                                    <option value="{{$bank->id}}">{{$bank->name}}</option>
                                                               @endforeach
                                                            </select>
                                                        </div>   
                                                        <div class="form-group">
                                                            <label for="account_number">Account Number</label>
                                                            <input name="account_number" value="{{ old('account_number') }}" type="text" class="form-control" id="account_number" >
                                                        </div>
                                                        <div class="form-group" style="display: none;">
                                                            <label for="bank_branch">Select Branch</label>
                                                            <select id="bank_branch" class="form-control select2" name="bank_branch">
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="account_number">Account Name</label>
                                                            <input name="account_name" type="text" class="form-control" id="document" readonly >
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
                                        <button type="button" class="btn btn-primary previous">previous</button>
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
        
        $('.select2').select2();
        $('#issue_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#expiry_date').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
        $('.upload-photo').click(function(e){
            e.stopPropagation();
            $(this).find('input').trigger('click.input');
        });
        $("#logo,#cover").change(function() {
            readURL(this,$(this).siblings('img').attr('id'));
            // $('#remove_image').show();
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
        // // function checkinput(){
        //     var required = $('input,textarea,select').filter('[required]:visible');
        //     var allRequired = false;
            
        //     required.each(function(){
        //         alert($(this).val())
        //         // if($(this).val() != ''){
        //         //     allRequired = true;
        //         // }
        //     });

        //     if(allRequired){
        //         $('.next').attr('disabled',false)
        //         //DO SOMETHING HERE... POPUP AN ERROR MESSAGE, ALERT , ETC.
        //     }
        // // }
        
        
        $('.next').on('click',function(){
            $('.tab-pane').removeClass('active show');
            $(this).closest('.tab-pane').next().addClass('active show');
            $('li.'+$(this).closest('.tab-pane').attr('id')).removeClass('active show');
            $('li.'+$(this).closest('.tab-pane').next().attr('id')).addClass('active show');
            $(window).scrollTop(0);
        })
        $('.previous').on('click',function(){
            $('.tab-pane').removeClass('active show');
            $(this).closest('.tab-pane').prev().addClass('active show');
            $('li.'+$(this).closest('.tab-pane').attr('id')).removeClass('active show');
            $('li.'+$(this).closest('.tab-pane').prev().attr('id')).addClass('active show');
            $(window).scrollTop(0);
        })
        $('ul.setupmenu li').on('click',function(){
            $('ul.setupmenu li').removeClass('active show');
            $(this).addClass('active show');
        })


        $('.countries').on('change',function(){
            var country_id = $(this).val();
            // alert(state_id)
            $.ajax({
                type:'POST',
                dataType: 'html',
                url: "{{route('getStates')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'country_id': country_id
                },
                success:function(data) {
                    $('.cities').html(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
        $('.states').on('change',function(){
            var state_id = $(this).val();
            // alert(state_id)
            $.ajax({
                type:'POST',
                dataType: 'html',
                url: "{{route('getCities')}}",
                data:{
                    '_token' : $('meta[name="csrf-token"]').attr('content'),
                    'state_id': state_id
                },
                success:function(data) {
                    $('.cities').html(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
        
    </script>
@endpush
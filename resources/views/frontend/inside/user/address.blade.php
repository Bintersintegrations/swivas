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
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Addresses</h5>
                    </div>
                    <div class="card-body">
                        
                        <div class="dashboard">
                            
                            <div class="welcome-msg">
                                
                                <p>Where would you like items you purchased and gifts you received to be delivered to ? . Specifying your address now helps you streamline the logistics procedures after. You can edit this later.</p>
                            </div>
                            <div class="box-account box-info my-4">
                                <a href="javascript:void(0)" id="newAddress" class="mb-3 text-white btn btn-warning">Add New Address</a>
                                <div class="row" id="addresses">
                                    @forelse ($user->addresses as $address)
                                        <div class="col-sm-4" id="address1">
                                            <div class="card">
                                                <div class="box card-body">
                                                    <div class="box-title">
                                                        <h3>{{$address->description}}</h3><a href="javascript:void(0)" class="editAddress" id="{{$address->id}}editAddress">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6>{{$address->street.' '.$address->city->name.' '.$address->state->name}}</h6>
                                                        <h6>{{$address->contact_name}}</h6>
                                                        <h6>{{$address->contact_number}}</h6>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
   
                                    @endforelse    
                                </div>
                                <form id="addressNew" class="addressEdit" style="display:none;" action="{{route('user.address')}}" method="POST">@csrf 
                                    <h3>Add New Address</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <input type="text" name="description" class="form-control" id="description" placeholder="Home or Office or Grandma's Place">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="contact">Contact Person</label>
                                                <input type="text" name="contact_name" class="form-control" id="contact" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">Contact Number</label>
                                                <input type="text" name="contact_number" class="form-control" id="mobile" placeholder="080....">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">Contact Email</label>
                                                <input type="text" name="contact_email" class="form-control" id="mobile" placeholder="080....">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="country">Country</label>
                                            <select id="country" name="country_id" class="form-control">
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->id}}" @if($user->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    
                                        <div class="col-md-6 form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" name="street" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                    </div>
                                    <div class="form-row"> 
                                        <div class="form-group col-md-4">
                                            <label for="state">State</label>
                                            <select id="state" name="state_id" class="states form-control select2">
                                                @foreach ($states as $state)
                                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="city">City</label>
                                            <select id="city" name="city_id" class="cities form-control select2">
                                                <option>Long</option>
                                                <option>Lat</option>
                                            </select>
                                        </div> 
                                        <div class="form-group col-md-4">
                                            <label for="town">Town</label>
                                            <select id="town_id" class="form-control">
                                                <option>Long</option>
                                                <option>Lat</option>
                                            </select>
                                        </div> 
                                    </div>
                                    
                                    <button type="button" class="btn btn-dark float-left backToAddresses">Back to All Addresses</button>
                                    <button type="submit" class="btn btn-warning float-right">Save & Close</button>
                                </form>
                                @forelse ($user->addresses as $address)
                                    <form id="addressEdit{{$address->id}}" class="addressEdit" style="display:none;" action="{{route('user.address')}}" method="POST">@csrf 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <input type="text" name="description" value="{{$address->description}}" class="form-control" id="description" placeholder="Home or Office or Grandma's Place">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="contact">Contact Person</label>
                                                    <input type="text" name="contact_name"  value="{{$address->contact_name}}" class="form-control" id="contact" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="mobile">Contact Number</label>
                                                    <input type="text" name="contact_number"  value="{{$address->contact_number}}" class="form-control" id="mobile" placeholder="080....">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Contact Email</label>
                                                    <input type="text" name="contact_email"  value="{{$address->contact_email}}" class="form-control" id="email" placeholder="abc@something.com">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="country">Country</label>
                                                <select id="country" name="country_id" class="form-control">
                                                    @foreach ($countries as $country)
                                                        <option value="{{$country->id}}" @if($address->country_id == $country->id) selected @endif>{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        
                                            <div class="col-md-6 form-group">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" name="street"  value="{{$address->street}}" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                            </div>
                                        </div>
                                        <div class="form-row"> 
                                            <div class="form-group col-md-4">
                                                <label for="state">State</label>
                                                <select id="state" name="state_id" class="states form-control select2">
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->id}}" @if($address->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="city">City</label>
                                                <select id="city" name="city_id" class="cities form-control select2">
                                                    @foreach ($cities as $city)
                                                        <option value="{{$city->id}}" @if($address->city_id == $city->id) selected @endif>{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label for="town">Town</label>
                                                <select id="town_id" class="form-control">
                                                    <option>Long</option>
                                                    <option>Lat</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <button type="button" class="btn btn-dark float-left backToAddresses">Back to All Addresses</button>
                                        <button type="submit" class="btn btn-warning float-right">Save & Close</button>
                                        
                                    </form>
                                @empty
                                @endforelse
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
<script>
    $('.select2').select2();
    
    $('#newAddress').on('click',function(){
        $('#addresses,.addressEdit').hide();
        $('#addressNew').show();
    });
    
    $('.editAddress').on('click',function(){
        $('#addresses,.addressEdit').hide();
        $('#addressEdit'+parseInt($(this).attr('id'))).show();
    });
    $('.backToAddresses').on('click',function(){
        $('.addressEdit').hide();
        $('#addresses').show();
        
    });

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
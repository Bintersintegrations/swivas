@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="card tab2-card">
                    <div class="card-body">
                        <h5 class="f-w-600">Company Details</h5>
                                <form class="theme-form" action="{{route('shop.profile',$shop)}}" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="shop_name">Shop Name</label>
                                                <input type="text" class="form-control" id="shop_name" name="shop_name" value="{{$shop->name ?? old('shop_name')}}" placeholder="Company name" required="" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type">Categories</label>
                                                <select class="form-control select2" id="categories" name="categories[]" required multiple>
                                                    @foreach ($categories as $category)
                                                        <option value="{{$category->id}}" @if(in_array($category->id,$shop->categories()->pluck('id')->toArray())) selected @endif>{{$category->name}}</option>
                                                    @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="mobile">Business phone</label>
                                            <input type="text" class="form-control" id="mobile" name="mobile" value="{{$shop->mobile ?? old('mobile')}}" placeholder="Enter your number" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Business Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{$shop->email ?? old('email')}}" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="street">Address</label>
                                                <input type="text" class="form-control mb-0" name="street" placeholder="Street Address" value="{{$shop->street ?? old('street')}}" id="street">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state">Region/State *</label>
                                                <select class="form-control select2" id="state" name="state_id">
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->id}}" @if($shop->state_id == $state->id) selected @endif>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City *</label>
                                                <select class="form-control select2" id="city" name="city_id">
                                                    @foreach ($shop->state->cities as $city)
                                                        <option value="{{$city->id}}" @if($shop->city_id == $city->id) selected @endif>{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        {{-- <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">F</span>
                                                </div>
                                                <input type="text" name="facebook" value="{{$shop->facebook ?? old('facebook')}}" id="facebook" placeholder="facebook.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">I</span>
                                                </div>
                                                <input type="text" name="instagram" value="{{$shop->instagram ?? old('instagram')}}" id="instagram" placeholder="instagram.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">T</span>
                                                </div>
                                                <input type="text" name="twitter" value="{{$shop->twitter ?? old('twitter')}}" id="twitter" placeholder="twitter.com/" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3 px-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">L</span>
                                                </div>
                                                <input type="text" name="linkedin" value="{{$shop->linkedin ?? old('linkedin')}}" id="linkedin" placeholder="linkedin.com/" class="form-control ">
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                                        </div>
                                    </div>
                                </form>

                        
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
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    <script>
        $('.select2').select2();
        
        $('#state').on('change',function(){
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
                    $('#city').html(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        })
    </script>
@endpush
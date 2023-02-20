@extends('layouts.backend.app')
@push('styles')

@endpush
@section('main')
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body tab-content">
                        <div class="dashboard">
                            <div class="page-title">
                                <h2>{{$shop->name}}</h2>
                                
                            </div>
                            <div class="welcome-msg">
                                <p>{{$shop->description}}</p>
                            </div>
                            <div class="box">
                                <div class="box-title">
                                    <form action="{{route('admin.shop.update',$shop)}}" method="POST">@csrf
                                        <input type="hidden" name="shop_id" value="{{$shop->id}}">
                                        @if($shop->status == 'starter' || $shop->status == 'banned' ) 
                                        <button type="submit" class="btn btn-success" name="action" value="approved">Approve Shop</button>
                                        @elseif($shop->status == 'approved')
                                        <button type="submit" class="btn btn-primary" name="action" value="banned">Ban Shop</button>
                                        @endif
                                    </form>
                                    
                                </div>
                            </div>
                            <div class="box-account box-info">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box">
                                            <div class="box-content -photo mb-4">
                                                <input type="file" style="visibility:hidden" name="cover" id="cover">
                                                <img src="{{asset('storage/media/'.$shop->cover)}}" class="img-fluid" style="width:100%;height:500px;cursor:pointer" id="cover-">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        
                                        <div class="box-content -photo mb-3">
                                            <h5> Logo</h5>
                                            <img src="{{asset('storage/media/'.$shop->logo)}}" style="height:150px;width:150px;cursor:pointer" id="logo-">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm">
                                        <div class="box">
                                            <div class="box-title">
                                                <h5>Info</h5>
                                            </div>
                                            <div class="box-content">
                                                <div class="form-group">
                                                    <label>Categories of Products</label>
                                                    <div class="">
                                                        <input type="text" class="form-control" name="categ0ry" readonly value="{{implode(',',$shop->categories()->pluck('name')->toArray())}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        
                                                    <a href="{{asset('storage/media/'.$shop->business_certificate)}}" target="_blank" class="btn btn-secondary">View CAC Document</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                  
                            </div>
                        </div>
                        <div class="dashboard">
                            <div class="page-title">
                                <h5>Owner Details</h5>
                            </div>
                            
                            <div class="box-account box-info my-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" name="firstname" class="form-control" id="firstname" value="{{ $shop->user->firstname}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="surname" class="form-label">Surname</label>
                                            <input type="text" name="surname" class="form-control" id="surname" value="{{ $shop->user->surname}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" value="{{ $shop->user->email}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" name="mobile" class="form-control" id="mobile" value="{{ $shop->user->mobile}}" readonly >
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                            <div class="page-title">
                                <h5>Contact Person</h5>
                            </div>
                            
                            <div class="box-account box-info my-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_name" class="form-label">Full Name</label>
                                            <input type="text" name="contact_name" value="{{ $shop->contact_name}}" readonly class="form-control" id="contact_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_email" class="form-label">Email</label>
                                            <input type="text" name="contact_email" value="{{ $shop->email}}" readonly class="form-control" id="contact_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_phone" class="form-label">Phone Number</label>
                                            <input type="text" name="contact_phone" value="{{ $shop->mobile}}" readonly class="form-control" id="contact_phone">
                                        </div> 
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_document"> Contact Person's ID</label><br> 
                                            <a href="{{asset('storage/media/'.$shop->contact_document)}}" id="contact_document" class="btn btn-info" >View Contact ID</a>
                                        </div>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                        
                        
                        <div class="dashboard">
                            
                            <div class="box-account box-info">
                                <div class="box-head mb-3">
                                    <h5> Address Information</h5>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" name="address" value="{{ $shop->street}}" readonly class="form-control" id="inputAddress" >
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <input type="text" class="form-control" name="state" value="{{ $shop->state->name}}" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">Area</label>
                                        <input type="text" class="form-control" name="city" value="{{ $shop->city->name}}" readonly>
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                        </div>
                        {{-- <div class="dashboard">
                            <div class="page-title">
                                <h5>Delivery Details</h5>
                            </div>
                            
                            <div class="box-account box-info my-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_company_name_1" class="form-label">Logistic Company Name</label>
                                            <input type="text" name="delivery_company_name[]" class="form-control" id="delivery_company_name_1" placeholder="Delivery Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_man_name_1" class="form-label">Delivery Personnel Name</label>
                                            <input type="text" name="delivery_username[]" class="form-control" id="delivery_man_name_1" placeholder="Delivery Personnel" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_man_phone_1" class="form-label">Delivery Personnel Phone</label>
                                            <input type="text" name="delivery_phone[]"  class="form-control" id="delivery_man_phone_1" placeholder="Delivery Person Mobile number" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_man_id_1"> Delivery Person's ID</label>
                                            <button type="button" class="btn btn-secondary">View</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_company_name_2" class="form-label">Logistic Company Name</label>
                                            <input type="text" name="delivery_company_name[]" class="form-control" id="delivery_company_name_2" placeholder="Delivery Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_man_name_2" class="form-label">Delivery Personnel Name</label>
                                            <input type="text" name="delivery_username[]" class="form-control" id="delivery_man_name_2" placeholder="Delivery Personnel" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_man_phone_2" class="form-label">Delivery Personnel Phone</label>
                                            <input type="text" name="delivery_phone[]" class="form-control" id="delivery_man_phone_2" placeholder="Delivery Person Mobile number" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="delivery_man_id_2"> Delivery Person's ID</label>
                                            <input type="file" name="delivery_id[]" class="form-control" id="delivery_man_id_2" >
                                        </div>
                                    </div>
                                </div>
                                
                                  
                                
                            </div>
                        </div> --}}
                        <div class="dashboard">
                            <div class="page-title">
                                <h5>Bank Accounts</h5>
                            </div>
                           
                            <div class="box-account box-info">
                                {{-- <div class="box-head">
                                    <h5>Account Information</h5>
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            
                                            <div class="box-content">
                                                <div class="form-group">
                                                    <label for="bank w-100">Bank</label>
                                                    <input type="text" class="form-control" name="bank" value="{{ $shop->bankaccount->bank->name}}" readonly>
                                                </div>   
                                                <div class="form-group">
                                                    <label for="account_number">Account Number</label>
                                                    <input name="account_number" value="{{ $shop->bankaccount->account_number}}" readonly class="form-control" id="account_number" >
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="account_number">Account Name</label>
                                                    <input name="account_name" type="text" class="form-control" id="account_name" value="{{ $shop->bankaccount->account_name}}" readonly >
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
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

@endpush
@extends('layouts.frontend.app')
@push('styles')
    
@endpush
@section('main')
<!--section start-->
<section class="contact-page section-b-space">
    <div class="container">
        <div class="row section-b-space">
            <div class="col-lg-6">
                <form class="theme-form" action="{{route('support')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                        @guest
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your email" required="">
                        </div>
                        @endguest
                        <div class="col-md-12 ">
                            <label for="category">Category</label>
                            <select class="form-control mb-4" id="category" name="category" required>
                                <option>Billing</option>
                                <option>Account</option>
                                <option>Dispute</option>
                                <option>Payment</option>
                                <option>Technical</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="email">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="description">Write a Message</label>
                            <textarea class="form-control" placeholder="Kindly be as detailed as possible" id="description" name="description" rows="6"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="attachment">Attachment</label>
                            <input type="file" name="attachment" id="attachment" class="form-control" >
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-solid" type="submit">Send Your Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-right">
                    <ul>
                        <li>
                            <div class="contact-icon"><img src="../assets/images/icon/phone.png"
                                    alt="Generic placeholder image">
                                <h6>Contact Us</h6>
                            </div>
                            <div class="media-body">
                                <p>+91 123 - 456 - 7890</p>
                                <p>+86 163 - 451 - 7894</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h6>Address</h6>
                            </div>
                            <div class="media-body">
                                <p>ABC Complex,Near xyz, New York</p>
                                <p>USA 123456</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><img src="../assets/images/icon/email.png"
                                    alt="Generic placeholder image">
                                <h6>Address</h6>
                            </div>
                            <div class="media-body">
                                <p>Support@Shopcart.com</p>
                                <p>info@shopcart.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                <h6>Fax</h6>
                            </div>
                            <div class="media-body">
                                <p>Support@Shopcart.com</p>
                                <p>info@shopcart.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--Section ends-->
@endsection
@push('scripts')
    
@endpush
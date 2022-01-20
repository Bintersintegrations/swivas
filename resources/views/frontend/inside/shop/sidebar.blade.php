<div class="dashboard-sidebar">
    <div class="profile-top">
        <div class="profile-image">
            <img src="{{asset('storage/media/'.$shop->logo)}}" alt="" class="img-fluid">
        </div>
        <div class="profile-detail">
            <h5>{{$shop->name}}</h5>
            <h6>750 products | 10 review</h6>
            <h6>mark.enderess@mail.com</h6>
        </div>
    </div>
    <div class="faq-tab">
        <ul class="nav nav-tabs" id="top-tab" role="tablist">
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link @if(Route::is('shop.dashboard')) active @endif" href="{{route('shop.dashboard',$shop)}}">dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a data-toggle="dropdown" class="nav-link dropdown-toggle @if(Route::is('shop.products') || Route::is('shop.product.create')) active @endif" href="#" id="navbardrop" >
                    Products
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('shop.product.create',$shop)}}">New Product</a>
                    <a class="dropdown-item" href="{{route('shop.products',$shop)}}">All Products</a>
                    
                </div>
            </li>
            
            
            
            <li class="nav-item"><a class="nav-link @if(Route::is('shop.orders')) active @endif" href="{{route('shop.orders',$shop)}}">Orders</a>
            <li class="nav-item"><a class="nav-link @if(Route::is('shop.coupons')) active @endif" href="{{route('shop.coupons',$shop)}}">Coupon</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Messages
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Inbox</a>
                    <a class="dropdown-item" href="#">Draft</a>
                    <a class="dropdown-item" href="#">Sent</a>
                </div>
            </li>
            
            <li class="nav-item"><a class="nav-link @if(Route::is('shop.profile')) active @endif" href="{{route('shop.profile',$shop)}}">profile</a>
            </li>
            <li class="nav-item"><a class="nav-link @if(Route::is('shop.settings')) active @endif" href="{{route('shop.settings',$shop)}}">settings</a></li>
            <li class="nav-item"><a class="nav-link @if(Route::is('shop.settings')) active @endif" href="{{route('shop.settings',$shop)}}">Withdrawals</a></li>
            <li class="nav-item"><a class="nav-link @if(Route::is('shop.settings')) active @endif" href="{{route('shop.settings',$shop)}}">Transactions</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout"
                    href="">logout</a>
            </li>
        </ul>
    </div>
</div>

<!-- Modal start -->
<div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to log out?
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">no</a>
                <a href="{{ route('logout') }}" class="btn btn-solid btn-custom" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>yes</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
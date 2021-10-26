<div class="dashboard-sidebar">
    <div class="profile-top">
        <div class="profile-image">
            <img src="{{asset('assets/images/logos/17.png')}}" alt="" class="img-fluid">
        </div>
        <div class="profile-detail">
            <h5>Fashion Store</h5>
            <h6>750 followers | 10 review</h6>
            <h6>mark.enderess@mail.com</h6>
        </div>
    </div>
    <div class="faq-tab">
        <ul class="nav nav-tabs" id="top-tab" role="tablist">
            <li class="nav-item"><a data-toggle="tab" class="nav-link active"
                    href="{{route('user.dashboard')}}">dashboard</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Products
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('shop.product.create')}}">New Product</a>
                    <a class="dropdown-item" href="{{route('shop.products')}}">All Products</a>
                    <a class="dropdown-item" href="{{route('shop.product.orders')}}">Orders</a>
                </div>
            </li>
            
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Blog
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('shop.posts.create')}}">New Post</a>
                    <a class="dropdown-item" href="{{route('shop.posts')}}">All Posts</a>
                    <a class="dropdown-item" href="{{route('shop.posts.comments')}}">Comments</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{route('shop.coupons')}}">Coupon</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Messages
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('user.messages.inbox')}}">Inbox</a>
                    <a class="dropdown-item" href="{{route('user.messages.draft')}}">Draft</a>
                    <a class="dropdown-item" href="{{route('user.messages.sent')}}">Sent</a>
                </div>
            </li>
            
            <li class="nav-item"><a class="nav-link" href="{{route('profile')}}">profile</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{route('shop.settings')}}">settings</a>
            </li>
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
                <a href="index.html" class="btn btn-solid btn-custom">yes</a>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
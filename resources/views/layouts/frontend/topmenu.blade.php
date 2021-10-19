<div class="menu-right pull-right">
    <div>
        <nav id="main-nav">
            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
            <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                <li>
                    <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                            aria-hidden="true"></i></div>
                </li>
                <li class="active">
                    <a href="{{url('/')}}">Home</a>
                    
                </li>
                <li>
                    <a href="{{route('products')}}">Products</a>
                </li>
                <li>
                    <a href="{{route('givings')}}">Giveaways</a>
                </li>
                <li>
                    <a href="{{route('auctions')}}">Auctions</a>
                </li>
                {{-- <li>
                    <a href="#">pages</a>
                </li> --}}
                <li>
                    <a href="{{route('blogroll')}}">blog</a>
                </li>
            </ul>
        </nav>
    </div>
    <div>
        <div class="icon-nav">
            <ul>
                <li class="onhover-div mobile-search">
                    <div><img src="{{asset('assets/images/icon/white-icon/search.png')}}" onclick="openSearch()"
                            class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                            onclick="openSearch()"></i></div>
                    <div id="search-overlay" class="search-overlay">
                        <div>
                            <span class="closebtn" onclick="closeSearch()"
                                title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        id="exampleInputPassword1"
                                                        placeholder="Search a Product">
                                                </div>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mobile-wish">
                    <a href="{{route('wishlist')}}">
                        <img src="{{asset('assets/images/icon/white-icon/like.png')}}" class="img-fluid blur-up lazyloaded" alt="">
                        <span id="wish_counter" class="badge badge-pill badge-warning pull-right" @if(!Session('wish')) style="display:none;" @endif>{{count((array) session('wish'))}}</span> 
                    </a>
                </li>
                <li class="onhover-div mobile-cart">
                    <div>
                        <img src="{{asset('assets/images/icon/white-icon/cart.png')}}" class="img-fluid blur-up lazyload" alt=""> 
                        <span id="cart-notification" class="badge badge-pill badge-primary pull-right" @if(!Session('cart')) style="display:none;" @endif>{{count((array) session('cart'))}}</span>
                        <i class="ti-shopping-cart"></i>
                    </div>
                    <ul class="show-div shopping-cart" @if(!Session('cart')) style="display:none;" @endif>
                        <div id="shopping_list">
                            @forelse((array)Session('cart') as $key=>$cart)
                                <li id="cartlist{{$key}}">
                                    <div class="media">
                                        <a href="#">
                                            <img alt="" class="mr-3"
                                                src="{{asset('storage/media/image/'.$cart['image'])}}">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                <h4>{{$cart['name']}}</h4>
                                            </a>
                                            <h4><span>{{$cart['quantity']}} x $ {{$cart['amount']}}</span></h4>
                                        </div>
                                    </div>
                                    <div class="close-circle">
                                        <a href="javascript:void(0)" class="remove-from-cart" data-product="{{$key}}product"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </div>
                                </li>
                            @empty
                            @endforelse
                        </div>
                        
                        <li>
                            <div class="total">
                                @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['amount'] * $details['quantity'] @endphp
                                @endforeach
                                <h5>subtotal : <span id="cart_total">${{$total}}</span></h5>
                            </div>
                        </li>
                        <li>
                            <div class="buttons">
                                <a href="{{route('cart')}}" class="view-cart">view cart</a>
                                <form action="{{route('checkout')}}" class="d-inline" method="POST">@csrf
                                    @foreach ((array) session('cart') as $id => $cart)
                                        <input type="hidden" name="variant[]" value="{{$id}}">
                                        <input type="hidden" name="quantity[]" value="{{$cart['quantity']}}">
                                    @endforeach
                                    <button type="submit" class="checkout">checkout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
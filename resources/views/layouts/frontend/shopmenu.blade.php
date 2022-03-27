<div class="col-xl-3">
    <div class="category-menu d-none d-xl-block h-100">
        <div id="toggle-sidebar" class="toggle-sidebar">
            <i class="fa fa-bars sidebar-bar"></i>
            <h5 class="mb-0">shop by category</h5>
        </div>
    </div>
    <div class="sidenav fixed-sidebar marketplace-sidebar">
        <nav>
            <div>
                <div class="sidebar-back text-left d-xl-none d-block">
                    <i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back
                </div>
            </div>
            <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                {{-- <li> <a href="#" >TV & Audio- {{$categories->first()->name}}</a>
                    <ul class="mega-menu clothing-menu">
                        <li>
                            <div class="row m-0">
                                <div class="col-xl-4">
                                    <div class="link-section">
                                        <h5>women's fashion</h5>
                                        <ul>
                                            <li><a href="#">dresses</a></li>
                                            <li><a href="#">skirts</a></li>
                                            <li><a href="#">westarn wear</a></li>
                                            <li><a href="#">ethic wear</a></li>
                                            <li><a href="#">sport wear</a></li>
                                        </ul>
                                        <h5>men's fashion</h5>
                                        <ul>
                                            <li><a href="#">sports wear</a></li>
                                            <li><a href="#">western wear</a></li>
                                            <li><a href="#">ethic wear</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="link-section">
                                        <h5>accessories</h5>
                                        <ul>
                                            <li><a href="#">fashion jewellery</a></li>
                                            <li><a href="#">caps and hats</a></li>
                                            <li><a href="#">precious jewellery</a></li>
                                            <li><a href="#">necklaces</a></li>
                                            <li><a href="#">earrings</a></li>
                                            <li><a href="#">wrist wear</a></li>
                                            <li><a href="#">ties</a></li>
                                            <li><a href="#">cufflinks</a></li>
                                            <li><a href="#">pockets squares</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <a href="#" class="mega-menu-banner"><img src="{{asset('assets/images/mega-menu/fashion.jpg')}}" alt="" class="img-fluid blur-up lazyload"></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li> --}}
                @foreach ($categories->where('parent_id',null) as $category)
                     <li> <a href="{{route('products.category',$category)}}" >{{$category->name}}</a>
                        @if($category->children->isNotEmpty())
                        <ul>
                            @foreach ($category->children as $children)
                                <li>
                                    <a href="{{route('products.category',$children)}}">{{$children->name}}</a>
                                    @if ($children->children->isNotEmpty())
                                        <ul>
                                            @foreach ($children->children as $babies)
                                                <li><a href="{{route('products.category',$babies)}}">{{$babies->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        @endif
                     </li>
                @endforeach
               
                {{-- <li> <a href="#">Refrigerators</a>
                    <ul>
                        <li><a href="#">shopper bags</a></li>
                        <li><a href="#">laptop bags</a></li>
                        <li><a href="#">clutches</a></li>
                        <li> <a href="#">purses</a>
                            <ul>
                                <li><a href="#">purses</a></li>
                                <li><a href="#">wallets</a></li>
                                <li><a href="#">leathers</a></li>
                                <li><a href="#">satchels</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a href="#">Washing Machines</a>
                    <ul>
                        <li><a href="#">sport shoes</a></li>
                        <li><a href="#">formal shoes</a></li>
                        <li><a href="#">casual shoes</a></li>
                    </ul>
                </li>
                <li><a href="#">Kitchen &amp; Home</a></li>
                <li><a href="#">Gaming Consoles</a></li>
                <li> <a href="#">cameras<span class="sub-arrow"></span></a>
                    <ul>
                        <li><a href="#">fashion jewellery</a></li>
                        <li><a href="#">caps and hats</a></li>
                        <li><a href="#">precious jewellery</a></li>
                        <li> <a href="#">more..<span class="sub-arrow"></span></a>
                            <ul>
                                <li><a href="#">necklaces</a></li>
                                <li><a href="#">earrings</a></li>
                                <li><a href="#">wrist wear</a></li>
                                <li> <a href="#">accessories<span class="sub-arrow"></span></a>
                                    <ul>
                                        <li><a href="#">ties</a></li>
                                        <li><a href="#">cufflinks</a></li>
                                        <li><a href="#">pockets squares</a></li>
                                        <li><a href="#">helmets</a></li>
                                        <li><a href="#">scarves</a></li>
                                        <li> <a href="#">more...<span class="sub-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">accessory gift sets</a></li>
                                                <li><a href="#">travel accessories</a></li>
                                                <li><a href="#">phone cases</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">belts &amp; more</a></li>
                                <li><a href="#">wearable</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Heating &amp; Cooling</a></li>
                <li><a href="#">All accessories </a></li>
                <li><a href="#">All Electronics </a></li> --}}
            </ul>
        </nav>
    </div>
</div>
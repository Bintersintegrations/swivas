<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('assets/images/dashboard/multikart-logo.png')}}" alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle blur-up lazyloaded" src="{{asset('assets/images/dashboard/man.png')}}" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{Auth::user()->firstname.' '.Auth::user()->surname}}</h6>
            <p>{{Auth::user()->roles->where('name','admin')->first()->description}}.</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{route('admin.dashboard')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li>
                <a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.items.product.new')}}"><i class="fa fa-circle"></i>New</a></li>
                    <li><a href="{{route('admin.items.products')}}"><i class="fa fa-circle"></i>All</a></li>
                    <li><a href="{{route('admin.orders.list')}}"><i class="fa fa-circle"></i>Orders</a></li>
                    {{-- <li><a href="product-list.html"><i class="fa fa-circle"></i>Categories</a></li> --}}
                </ul>
            </li>
            
            
            <li><a class="sidebar-header" href="{{route('admin.categories')}}"><i data-feather="bar-chart"></i>Categories</a></li>
            <li><a class="sidebar-header" href="{{route('admin.attributes')}}"><i data-feather="bar-chart"></i>Attributes</a></li>
            <li><a class="sidebar-header" href="{{route('admin.media.list')}}"><i data-feather="camera"></i><span>Media</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.coupons.list')}}"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="{{route('admin.coupons.create')}}"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Shipment</span><i class="fa fa-angle-right pull-right"></i></a>            </li>
            <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Payments</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.transactions')}}"><i class="fa fa-circle"></i>Transactions</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                        <span>Withdrawals</span> <i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.withdrawals')}}"><i class="fa fa-circle"></i>Requests</a></li>
                            <li><a href="{{route('admin.withdrawal.request')}}"><i class="fa fa-circle"></i>Completed</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            
            
            <li>
                <a class="sidebar-header" href="#"><i data-feather="align-left"></i><span>Blog</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Post</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.posts.create')}}"><i class="fa fa-circle"></i>New</a></li>
                            <li><a href="{{route('admin.posts.list')}}"><i class="fa fa-circle"></i>List Post</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('admin.posts.comments.list')}}"><i class="fa fa-circle"></i>List Comments</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.users.list')}}"><i class="fa fa-circle"></i>List Users</a></li>
                    <li><a href="{{route('admin.roles.list')}}"><i class="fa fa-circle"></i>List Roles</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.vendors.list')}}"><i class="fa fa-circle"></i>List Vendors</a></li>
                    <li><a href="{{route('admin.vendors.applications')}}"><i class="fa fa-circle"></i>List Applications</a></li>
                </ul>
            </li>
            <li>
                <a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Membership</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Plans</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.plans.create')}}"><i class="fa fa-circle"></i>New</a></li>
                            <li><a href="{{route('admin.plans.list')}}"><i class="fa fa-circle"></i>List </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle"></i>
                            <span>Subscriptions</span> <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.subscriptions.create')}}"><i class="fa fa-circle"></i>New</a></li>
                            <li><a href="{{route('admin.subscriptions.list')}}"><i class="fa fa-circle"></i>List</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('admin.addons.list')}}"><i class="fa fa-circle"></i>Addons</a></li>
                    <li><a href="{{route('admin.features.list')}}"><i class="fa fa-circle"></i>Features</a></li>
                </ul>
            </li>
            
            <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                    
                    <li><a href="profile.html"><i class="fa fa-circle"></i>Notifications</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Review</span></a>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Support</span></a>
            </li>
            <li><a class="sidebar-header" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i data-feather="log-in"></i><span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
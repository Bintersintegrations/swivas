<div class="account-sidebar"><a class="popup-btn">my account</a></div>
<div class="dashboard-left">
    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                aria-hidden="true"></i> back</span></div>
    <div class="block-content">
        <ul>
            <li @if(Route::is('user.dashboard')) class="active" @endif><a href="{{route('user.dashboard')}}">Account Info</a></li>
            <li @if(Route::is('user.address')) class="active" @endif><a href="{{route('user.address')}}">Address Book</a></li>
            <li @if(Route::is('user.orders')) class="active" @endif><a href="{{route('user.orders')}}">My Orders</a></li>
            {{-- <li @if(Route::is('user.dashboard')) class="active" @endif><a href="#">Newsletter</a></li> --}}
            <li @if(Route::is('user.network')) class="active" @endif><a href="#">My Network</a></li>
            <li @if(Route::is('user.profile')) class="active" @endif><a href="{{route('user.profile')}}">Edit Profile</a></li>
            <li @if(Route::is('user.password')) class="active" @endif><a href="{{route('user.password')}}">Change Password</a></li>
            <li class="last"><a href="#" data-toggle="modal" data-target="#logout">Log Out</a></li>
        </ul>
    </div>
    @if(Auth::user()->shops->isNotEmpty())
        <div class="block-content">
            <h4>Your Shops</h4>
            <ul>
            @foreach (Auth::user()->shops as $shop)
                <li><a href="{{route('shop.dashboard',$shop)}}">{{$shop->name}}</a></li>
            @endforeach
            </ul>
            
        </div>
    @endif
    
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
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
            <li class="last"><a href="#">Log Out</a></li>
        </ul>
    </div>
</div>
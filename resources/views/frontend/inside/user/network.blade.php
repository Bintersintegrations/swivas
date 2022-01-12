@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.min.css')}}">
<style>
    /*Now the CSS*/
div,ul,li {margin: 0; padding: 0;}

.tree ul 
{
	padding-top: 20px; 
	position: relative;
	transition: all 0.5s;
}

.tree li 
{
	float: left; 
	text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}
.tree li::before, .tree li::after
{
	content: '';
	position: absolute; 
	top: 0; 
	right: 50%;
	border-top: 1px solid #ccc;
	width: 50%; height: 20px;
}
.tree li::after
{
	right: auto; left: 50%;
	border-left: 1px solid #ccc;
}
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}
.tree li:only-child{ padding-top: 0;}
.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}
.tree li:last-child::before{
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #ccc;
	width: 0; height: 20px;
}

.tree li a{
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: verdana, tahoma;
	font-size: 10px;
	display: inline-block;
	border-radius: 5px;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}

    
</style>
@endpush
@section('main')
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">  
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>My Downlines   </h3>
                                    {{-- <a href="#" class="btn btn-sm btn-solid">add product</a> --}}
                                </div>
                                <p>Copy and share link for people to register and become your downlines</p>
                                <div class="input-group mb-3">
                                    <input type="text" name="link" id="link" class="form-control" value="{{route('register')}}/?referer='{{$user->slug}}'">
                                    <button class="btn btn-danger" onclick="document.getElementById('link').select(); document.execCommand('copy');" >Copy</button>
                                </div>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Downlines</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Notifications</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="tree">
                                            <ul>
                                                <li>
                                                    <a href="#">ME</a>
                                                    
                                                    <ul>
                                                        @forelse($user->children()->get() as $child)
                                                        <li>
                                                            <a href="#">{{$child->name}}</a>
                                                            
                                                            <ul>
                                                                @forelse($child->children()->get() as $grandChild)
                                                                <li>
                                                                    <a href="#">{{$grandChild->name}}</a>
                                                                    <ul>
                                                                        @forelse($grandChild->children()->get() as $greatGrandChild)
                                                                        <li>
                                                                            <a href="#">{{$greatGrandChild->name}}</a>
                                                                            <ul>
                                                                                @forelse($greatGrandChild->children()->get() as $descendant)
                                                                                <li>
                                                                                    <a href="#">{{$descendant->name}}</a>   
                                                                                </li>
                                                                                @empty
                                                                                @endforelse
                                                                                
                                                                            </ul>
                                                                        </li>
                                                                        @empty
                                                                        @endforelse
                                                                        
                                                                    </ul>
                                                                </li>
                                                                @empty
                                                                @endforelse
                                                            </ul>
                                                        </li>
                                                        @empty 
                                                        No downlines
                                                        @endforelse
                                                        {{-- <li>
                                                            <a href="#">Shafayat Hossain</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#">B1</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">B11</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">B12</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="#">B2</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">B21</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">B22</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li> --}}
                                                    </ul>
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="card dashboard-table">
                                            <div class="card-body">
                                                
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Description</th>
                                                            <th scope="col">Balance</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">24-Dec-2020</th>
                                                            <td>neck velvet dress</td>
                                                            <td>1000</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">25-Dec-2021</th>
                                                            <td>belted trench coat</td>
                                                            <td>800</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">25-Dec-2022</th>
                                                            <td>man print tee</td>
                                                            <td>750</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
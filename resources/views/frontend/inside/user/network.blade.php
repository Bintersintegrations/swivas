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
                                <div class="tree">
                                    <ul>
                                        <li>
                                            <a href="#">Shafayat Sabbat</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Shafayat Hossain</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">A1</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#">A11</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">A12</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">A13</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#">A2</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#">A21</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">A22</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
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
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
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
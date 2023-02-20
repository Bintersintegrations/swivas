@extends('layouts.backend.app')
@push('styles')
    <!-- datepicker css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jsgrid.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Media
                        <small>Binters Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Media </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid bulk-cate">
    <div class="card ">
        <div class="card-header">
            <h5>Dropzone Media</h5>
        </div>
        <div class="card-body">
            <form class="dropzone digits" id="singleFileUpload" action="/upload.php">
                <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                    <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Media File List</h5>
        </div>
        <div class="card-body">
            {{-- <div id="batchDelete" class="category-table media-table"></div> --}}
            <div id="" class="category-table media-table jsgrid" style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tr class="jsgrid-header-row">
                            <th class="jsgrid-header-cell jsgrid-align-center" style="width: 50px;"><button type="button" class="btn btn-danger btn-sm btn-delete mb-0 b-r-4">Delete</button></th>
                            <th class="jsgrid-header-cell jsgrid-align-center" style="width: 50px;">Image</th>
                            <th class="jsgrid-header-cell jsgrid-align-center" style="width: 50px;">Owner</th>
                            <th class="jsgrid-header-cell jsgrid-align-right" style="width: 90px;">File Name</th>
                            <th class="jsgrid-header-cell" style="width: 100px;">Url</th>
                            
                        </tr>
                        <tr class="jsgrid-filter-row" style="display: none;">
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>                            
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>                            

                            <td class="jsgrid-cell jsgrid-align-right" style="width: 90px;"><input type="number" /></td>
                            <td class="jsgrid-cell" style="width: 100px;"></td>
                            
                        </tr>
                        <tr class="jsgrid-insert-row" style="display: none;">
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><input type="file" /></td>
                            <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"></td>   
                            <td class="jsgrid-cell jsgrid-align-right" style="width: 90px;"><input type="number" /></td>
                            <td class="jsgrid-cell" style="width: 100px;"></td>
                        </tr>
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                            @forelse ($media->where('format','image') as $item)
                                <tr class="jsgrid-row">
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><input type="checkbox" /></td>
                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img src="{{asset('storage/media/image/'.$item->name)}}" style="height: 50px; width: 50px;" /></td>
                                    <td class="jsgrid-cell" style="width: 50px;">{{$item->user->name}}</td>
                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 90px;">{{$item->name}}</td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{asset('storage/media/image/'.$item->name)}}</td>
                                    
                                </tr>
                            @empty
                                
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-pager-container" style="">
                    <div class="jsgrid-pager">
                        Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a></span>
                        <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a></span> <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span>
                        <span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span>
                        <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 2
                    </div>
                </div>
                <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
            </div>
            
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Dropzone js-->
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/jsgrid.min.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/griddata-media.js')}}"></script>
<script src="{{asset('assets/js/jsgrid/jsgrid-media.js')}}"></script>

@endpush

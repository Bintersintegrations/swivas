@extends('layouts.backend.app')
@push('styles')
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jsgrid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2-bootstrap.min.css')}}">
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Attributes
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Physical</li>
                    <li class="breadcrumb-item active">Attribute</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Products Attribute</h5>
                </div>
                <div class="card-body">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Attribute</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Attribute</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <form class="needs-validation" action="{{route('admin.atributes.save')}}" method="POST">@csrf
                                        <div class="modal-body">
                                            <div class="form">
                                                <div class="form-group mb-2">
                                                    <label for="atribute_name" class="mb-1">Attribute Name :</label>
                                                    <input class="form-control" id="atribute_name" type="text" name="atribute_name">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="label" class="mb-1">Attribute Label :</label>
                                                    <input class="form-control" id="label" type="text" name="label">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="description" class="mb-1">Attribute Description</label>
                                                    <textarea class="form-control" id="description" name="description"></textarea>
                                                </div>
                                                
                                                <div class="form-group mb-2">
                                                    <label for="options" class="mb-1">Attribute Options</label>
                                                    <textarea class="form-control" id="options" name="options" placeholder="separate options by comma.."></textarea>
                                                </div>
                                                
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        {{-- <div id="basicScenario" class="product-physical"></div> --}}
                        <div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-align-center" style="width:10px;"><input type="checkbox"></th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Name</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Label</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Description</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 100px;">Options</th>
                                        
                                        
                                        <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                            <input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" type="button" title="Switch to inserting">
                                        </th>
                                    </tr>
                                    <tbody>
                                    @foreach ($atributes as $atribute)
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell jsgrid-align-center" style="width:10px"><input type="checkbox"></td>
                                            <td class="jsgrid-cell text-left pl-3">{{$atribute->name}}</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{$atribute->label}}</td>
                                            <td class="jsgrid-cell" style="width: 50px;">
                                                {{$atribute->description}}
                                            </td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                @if($atribute->options) {{implode(',',$atribute->options)}} @endif
                                            </td>
                                            
                                            <td class="jsgrid-cell" style="width: 50px;">
                                                <button class="jsgrid-button jsgrid-edit-button categoryedit" type="button" title="Edit" id="{{$atribute->id}}" data-name="{{$atribute->name}}" data-parent-id="{{$atribute->parent_id}}"></button>
                                                <button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete" data-toggle="modal" data-target="#deleteAttribute{{$atribute->id}}"></button>
                                        
                                                <div class="modal fade" id="deleteAttribute{{$atribute->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteAttribute{{$atribute->id}}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete Attribute</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <form class="needs-validation" action="{{route('admin.atributes.delete')}}" method="POST" enctype="multipart/form-data">@csrf
                                                                <div class="modal-body">
                                                                    <h5>Are you sure you want to delete {{$atribute->name}} atribute</h5>
                                                                    <input type="hidden" name="atribute_id" value="{{$atribute->id}}">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="submit">Yes, Delete</button>
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="jsgrid-pager-container" style="">
                                <div class="jsgrid-pager">Pages: 
                                    <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                        <a href="javascript:void(0);">First</a>
                                    </span>
                                    <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button">
                                        <a href="javascript:void(0);">Prev</a>
                                    </span> 
                                    <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span>
                                    <span class="jsgrid-pager-page">
                                        <a href="javascript:void(0);">2</a>
                                    </span>
                                    <span class="jsgrid-pager-nav-button">
                                        <a href="javascript:void(0);">Next</a>
                                    </span> 
                                    <span class="jsgrid-pager-nav-button">
                                        <a href="javascript:void(0);">Last</a>
                                    </span> &nbsp;&nbsp; 1 of 2 
                                </div>
                            </div>
                            <div class="jsgrid-load-shader" style="display: none; position: absolute; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 1000;"></div>
                            <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Jsgrid js-->

{{--<script src="{{asset('assets/js/jsgrid/jsgrid-manage-product.js')}}"></script> --}}
@endpush

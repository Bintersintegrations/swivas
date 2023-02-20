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
                        <small>Binters Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
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
                    <div class="btn-popup">
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
                                                    <input class="form-control" id="atribute_name" type="text" name="atribute_name" required>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="label" class="mb-1">Element :</label>
                                                    <select class="form-control" id="element" name="element" required>
                                                        <option value="textbox"  >Textbox</option>
                                                        <option value="textarea"  >Textarea</option>
                                                        <option value="select"  >Select</option>
                                                        <option value="checkbox"  >Checkbox</option>
            
                                                    </select>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="description" class="mb-1">Attribute Description</label>
                                                    <textarea class="form-control" id="description" name="description" placeholder=""></textarea>
                                                </div>
                                                
                                                <div class="form-group mb-2">
                                                    <label for="options" class="mb-1">Attribute Options</label>
                                                    <textarea class="form-control" id="options" name="options" placeholder="LABEL:VALUE, LABEL:VALUE.. E.g M: Medium,S:Small,"></textarea>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="label" class="mb-1">Status :</label>
                                                    <select class="form-control" id="status" name="status" required>
                                                        <option value="1">ON</option>
                                                        <option value="0">OFF</option>
                                                       
                                                    </select>
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
                    <div class="card-body order-datatable">
                        <table class="display table" id="basic-1">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Element</th>
                                <th>Description</th>
                                <th>Options</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($atributes as $atribute)
                                <tr>
                                    <td>{{$atribute->name}}</td>
                                    <td>{{$atribute->element}}</td>
                                    <td>{{$atribute->description}}</td>
                                    <td>
                                        @forelse ($atribute->options as $option)
                                            <span class="badge badge-secondary">{{$option->name}}</span>
                                        @empty
                                            No options
                                        @endforelse
                                        
                                    </td>
                                    
                                    <td>
                                        @if($atribute->status)
                                        <span class="badge badge-success">ON</span>
                                            
                                        @else   
                                        <span class="badge badge-danger">OFF</span>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-xs btn-info" title="edit" data-toggle="modal" data-target="#atribute-edit{{$atribute->id}}"><i class="fa fa-pencil"></i></button>
                                        <form action="{{route('admin.atributes.delete')}}" method="post">@csrf
                                            <input type="hidden" name="atribute_id" value="{{$atribute->id}}">
                                            <button class="btn btn-xs btn-primary" title="delete"><i class="fa fa-trash"></i></button>
                                        </form>
                                        <div class="modal fade" id="atribute-edit{{$atribute->id}}" tabindex="-1" role="dialog" aria-labelledby="atribute-edit{{$atribute->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Attribute</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <form class="needs-validation" action="{{route('admin.atributes.save')}}" method="POST">@csrf
                                                        <div class="modal-body">
                                                            <div class="form">
                                                                <div class="form-group mb-2">
                                                                    <label for="atribute_name" class="mb-1">Attribute Name :</label>
                                                                    <input class="form-control" id="atribute_name" type="text" value="{{$atribute->name}}" name="atribute_name" required>
                                                                </div>
                                                                <div class="form-group mb-2">
                                                                    <label for="label" class="mb-1">Element :</label>
                                                                    <select class="form-control" id="element" name="element" required>
                                                                        <option value="textbox" @if($atribute->element == 'textbox') selected @endif >Textbox</option>
                                                                        <option value="textarea" @if($atribute->element == 'textarea') selected @endif >Textarea</option>
                                                                        <option value="select" @if($atribute->element == 'select') selected @endif >Select</option>
                                                                        <option value="checkbox" @if($atribute->element == 'checkbox') selected @endif >Checkbox</option>
                                            
                                                                    </select>
                                                                </div>
                                                                <div class="form-group mb-2">
                                                                    <label for="description" class="mb-1">Attribute Description</label>
                                                                    <textarea class="form-control" id="description" name="description" placeholder="">{{$atribute->description}}</textarea>
                                                                </div>
                                                                
                                                                <div class="form-group mb-2">
                                                                    <label for="options" class="mb-1">Attribute Options</label>
                                                                    <textarea class="form-control" id="options" name="options" placeholder="LABEL:VALUE, LABEL:VALUE.. E.g M: Medium,S:Small,">
                                                                        @forelse ($atribute->options as $option)
                                                                            {{$option->name}}:{{$option->description}},
                                                                        @empty
                                                                            
                                                                        @endforelse
                                                                    </textarea>
                                                                </div>
                                                                <div class="form-group mb-2">
                                                                    <label for="label" class="mb-1">Status :</label>
                                                                    <select class="form-control" id="status" name="status" required>
                                                                        <option value="1" @if($atribute->status) selected @endif>ON</option>
                                                                        <option value="0" @if(!$atribute->status) selected @endif>OFF</option>
                                                                       
                                                                    </select>
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
                                    </td>
                                    
                                </tr>
                                @endforeach
                                
                                
                              
                            </tbody>
                        </table>
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

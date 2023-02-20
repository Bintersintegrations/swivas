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
                    <h3>Category
                        <small>Binters Admin Panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Physical</li>
                    <li class="breadcrumb-item active">Category</li>
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
                    <h5>Products Category</h5>
                </div>
                <div class="card-body">
                    <div class="btn-popup pull-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Category</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Category</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <form class="needs-validation" action="{{route('admin.categories.save')}}" method="POST" enctype="multipart/form-data">@csrf
                                        <div class="modal-body">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="category_name" class="mb-1">Category Name :</label>
                                                    <input class="form-control" id="category_name" name="category_name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label for="parent" class="mb-1">Parent Name :</label>
                                                    <select class="form-control" id="parent" name="parent_id" required>
                                                        <option value="null">No Parent</option>
                                                            @foreach ($categories->where('grand_id',null)->where('parent_id',null) as $grandparent)
                                                                <option value="{{$grandparent->id}}">{{$grandparent->name}}</option>
                                                                @foreach ($grandparent->getChildren() as $parent)
                                                                    <option value="{{$parent->id}}">{{$grandparent->name}}->{{$parent->name}}</option>
                                                                @endforeach
                                                            @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="category_image" class="mb-1">Category Image :</label>
                                                    <input class="form-control" id="category_image" type="file" name="image">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="atributes" class="mb-1">Associate Attributes</label>
                                                    <select class="form-control select2" style="width:100%" id="atributes" name="atributes[]" multiple>
                                                        @foreach ($atributes as $atribute)
                                                        <option value="{{$atribute->id}}">{{$atribute->name}}</option>
                                                        @endforeach
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
                    {{-- <div>
                        <table>

                        </table>
                    </div> --}}
                    <div class="table-responsive">
                        {{-- <div id="basicScenario" class="product-physical"></div> --}}
                        <div id="basicScenario" class="product-physical jsgrid" style="position: relative; height: auto; width: 100%;">
                            <div class="">
                                <table class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-align-center" style="width:5px;"><input type="checkbox"></th>
                                        <th class="jsgrid-header-cell jsgrid-align-center text-center" style="width: 30px;">Image</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 50px;">Name</th>
                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 20px;">No of Items</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 30px;">Attributes</th>
                                        
                                        <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 20px;">
                                            <input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" type="button" title="Switch to inserting">
                                        </th>
                                    </tr>
                                    <tbody>
                                    @foreach ($categories->where('parent_id',null) as $grandparent)
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell jsgrid-align-center" style="width:5px"><input type="checkbox"></td>
                                            <td class="jsgrid-cell text-center" style="width: 50px;">
                                                <img @if($grandparent->image) src="{{asset('storage/categories/'.$grandparent->image)}}" @else src="{{asset('assets/images/dashboard/product/1.jpg')}}" @endif class="blur-up lazyloaded" style="height: 50px; width: 50px;">
                                            </td>
                                            <td class="jsgrid-cell text-left pl-3">{{$grandparent->name}}</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{$grandparent->items->count()}}</td>
                                            <td class="jsgrid-cell" style="width: 50px;">
                                                {{implode(',',$grandparent->atributes->pluck('name')->toArray())}}
                                            </td>
                                            <td class="jsgrid-cell" style="width: 50px;">
                                                <button class="jsgrid-button jsgrid-edit-button categoryedit" type="button" title="Edit" id="{{$grandparent->id}}" data-name="{{$grandparent->name}}" data-parent-id="{{$grandparent->parent_id}}"></button>
                                                <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
                                            </td>
                                        </tr>
                                        @foreach ($categories->where('parent_id',$grandparent->id) as $parent)
                                            <tr class="jsgrid-row">
                                                <td class="jsgrid-cell jsgrid-align-center" style="width:5px"><input type="checkbox"></td>
                                                <td class="jsgrid-cell text-center" style="width: 50px;">
                                                    <img src="../assets/images/dashboard/product/1.jpg" class="blur-up lazyloaded" style="height: 50px; width: 50px;">
                                                </td>
                                                <td class="jsgrid-cell text-left pl-4">&nbsp;&nbsp;&nbsp;&nbsp; -{{$parent->name}}</td>
                                                <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{$parent->items->count()}}</td>
                                                <td class="jsgrid-cell" style="width: 50px;">
                                                    {{implode(',',$parent->atributes->pluck('name')->toArray())}}
                                                </td>
                                                
                                                <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                    <button class="jsgrid-button jsgrid-edit-button categoryedit" type="button" title="Edit" id="{{$parent->id}}" data-name="{{$parent->name}}" data-parent-id="{{$parent->parent_id}}"></button>
                                                    <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
                                                </td>
                                            </tr>
                                            @foreach ($categories->where('parent_id',$parent->id) as $child)
                                                <tr class="jsgrid-row">
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width:5px"><input type="checkbox"></td>
                                                    <td class="jsgrid-cell text-center" style="width: 50px;">
                                                        <img src="../assets/images/dashboard/product/1.jpg" class="blur-up lazyloaded" style="height: 50px; width: 50px;">
                                                    </td>
                                                    <td class="jsgrid-cell text-left pl-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --{{$child->name}}</td>
                                                    <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">{{$child->items->count()}}</td>
                                                    <td class="jsgrid-cell" style="width: 50px;">
                                                        {{implode(',',$child->atributes->pluck('name')->toArray())}}
                                                    </td>
                                                    
                                                    <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                                        <button class="jsgrid-button jsgrid-edit-button categoryedit" type="button" title="Edit" id="{{$child->id}}" data-name="{{$child->name}}" data-parent-id="{{$child->parent_id}}"></button>
                                                        <input class="jsgrid-button jsgrid-delete-button" type="button" title="Delete">
                                                    </td>
                                                </tr>    
                                            @endforeach
                                        @endforeach
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
<div class="modal fade" id="categoryedit" tabindex="-1" role="dialog" aria-labelledby="categoryedit" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="{{route('admin.categories.update')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="modal-body">
                        <input type="hidden" name="category_id" id="editId">
                        <div class="form">
                            <div class="form-group">
                                <label for="category_name" class="mb-1">Category Name :</label>
                                <input class="form-control" name="category_name" id="editName" type="text">
                            </div>
                            <div class="form-group">
                                <label for="parent" class="mb-1">Parent Name :</label>
                                <select class="form-control" id="editParentId" name="parent_id" required>
                                    <option value="null">No Parent</option>
                                    @foreach ($categories->where('grand_id',null)->where('parent_id',null) as $grandparent)
                                        <option value="{{$grandparent->id}}">{{$grandparent->name}}</option>
                                        @foreach ($grandparent->getChildren() as $parent)
                                            <option value="{{$parent->id}}">{{$grandparent->name}}->{{$parent->name}}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <label for="category_image" class="mb-1">Category Image :</label>
                                <input class="form-control" id="category_image" name="image" type="file" name="category_image">
                            </div>
                            <div class="form-group mb-2">
                                <label for="atributes" class="mb-1">Associate Attributes</label>
                                <select class="form-control select2" style="width:100%" id="atributes" name="atributes[]" multiple>
                                    @foreach ($atributes as $atribute)
                                    <option value="{{$atribute->id}}">{{$atribute->name}}</option>
                                    @endforeach
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
@endsection
@push('scripts')
    <script>
        $('.categoryedit').click(function(){
            var editId = $(this).attr('id');
            var editName = $(this).attr('data-name');
            var editParentId = $(this).attr('data-parent-id');
            // alert(editId+' '+editName+' '+editParentId);
            $('#editId').val(editId);
            $('#editName').val(editName);
            $('#editParentId').val(editParentId);
            $('#categoryedit').modal();
        })
    </script>
    <script src="{{asset('assets/js/select2.full.js')}}"></script>
    <script>
        $('.select2').select2({
            'placeholder':'Select Attributes',
        });
    </script>
@endpush

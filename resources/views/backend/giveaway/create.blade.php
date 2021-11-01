@extends('layouts.backend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2-bootstrap.min.css')}}">
<style>
    .attrib-hide{
        display:none !important;
    }
    .attrib-show{
        display:block !important;
    }
    .add-product ul li {
        display: inline-block !important;
    }
</style>
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add Give Away
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Item</li>
                    <li class="breadcrumb-item active">Add Give away</li>
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
                    <h5>Add Product</h5>
                </div>
                <div class="card-body">
                    <div class="row product-adding">
                        <div class="col-12">
                            <form class="needs-validation add-product-form" method="POST" action="{{route('admin.items.product.save')}}">
                                @csrf
                                <div class="add-product">
                                    <div class="row">
                                        {{-- <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                            <img src="{{asset('assets/images/pro3/1.jpg')}}" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
                                        </div> --}}
                                        <label for="images" class="col-xl-3 col-sm-4 mb-0 font-weight-bold">Images :</label>
                                        <div class="col-xl-8 col-sm-7">
                                            <ul class="file-upload-product">
                                                <li><div class="box-input-file"><input class="upload" type="file" name="main_image[]"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file" name="main_image[]"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file" name="main_image[]"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file" name="main_image[]"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file" name="main_image[]"><i class="fa fa-plus"></i></div></li>
                                                <li><div class="box-input-file"><input class="upload" type="file" name="main_image[]"><i class="fa fa-plus"></i></div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="form">
                                    <div class="form-group mb-3 row">
                                        <label for="title" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="title" name="title" type="text" required>
                                    </div>
                                    {{-- <div class="form-group mb-3 row">
                                        <label for="validationCustomUsername" class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="validationCustomUsername" type="text" required="">
                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                    </div> --}}
                                    <div class="form-group mb-3 row">
                                        <label class="col-xl-3 col-sm-4">Add Description :</label>
                                        <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                            <textarea id="editor1" name="description" cols="10" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="value" class="col-xl-3 col-sm-4 mb-0">Value :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="value" name="value" type="number" required>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="giver" class="col-xl-3 col-sm-4 mb-0">Show Giver :</label>
                                        <select class="form-control col-xl-8 col-sm-7" id="giver" name="giver" required>
                                            <option selected>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="eligible" class="col-xl-3 col-sm-4 mb-0">Eligibility :</label>
                                        <select class="form-control col-xl-8 col-sm-7" id="eligible" name="eligible" required>
                                            <option selected>Anyone</option>
                                            <option>Orphanage Homes</option>
                                            <option>Charity Organizations</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label for="pickup" class="col-xl-3 col-sm-4 mb-0">Pick up Address :</label>
                                        <input class="form-control col-xl-8 col-sm-7" id="pickup" name="address" type="text" required>
                                    </div>
                                </div>

                                <div class="form">
                                    <div class="form-group row">
                                        <label for="categories" class="col-xl-3 col-sm-4 mb-0">Item Category :</label>
                                        
                                        <select class="form-control col-xl-8 col-sm-7" id="category" name="category_id" required>
                                            <option selected disabled>Select Category</option>
                                            @foreach ($categories->where('grand_id','!=',null)->where('parent_id','!=',null) as $child)
                                            <option value="{{$child->id}}" data-attr="{{implode(',.',$child->attributes->pluck('slug')->toArray())}}">{{$child->name}} -> {{$child->getParent()->name }} @if($child->getGrand()) -> {{$child->getGrand()->name}} @endif</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <h4 class="text-center">Item Variants</h4>
                                <div id="variants">
                                    <div class="variant_option border p-4">
                                        <div class="form-group row attrib-options labelled_size">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Size :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="labelled_size[]">
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                                <option>Extra Large</option>
                                            </select>
                                        </div>
                                        <div class="form-group row attrib-options clothing_material">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Select Material :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect2" name="clothing_material[]">
                                                <option>Cotton</option>
                                                <option>Nylon</option>
                                                <option>Linen</option>
                                                <option>Rubber</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group row color">
                                                    <label for="exampleFormControlSelect1" class="col-6 mb-0">Select Color :</label>
                                                    <input id="ColorPicker1" type="color" value="#ff4c3b" name="color[]">
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-6 mb-0">Quantity Available :</label>
                                                    <fieldset class="qty-box col-6 pl-0">
                                                        <div class="input-group">
                                                            <input class="touchspin" type="text" value="1" name="quantity[]">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-5">
                                                <input type="file" name="variant_image[]" class="variant_file" style="display: none;">
                                                <div class="variant_image d-flex justify-content-center flex-column"  style="background:#f1f4fb; width:100%; height:100%;cursor:pointer">
                                                    <p class="text-center font-weight-bold">Set Image</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="offset-xl-3 offset-sm-4 form-group">
                                            <button type="button" class="btn btn-primary removemore">Discard</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="offset-xl-3 offset-sm-4 mt-2">
                                    <button type="button" class="btn btn-dark" id="addmore">Add Variant</button>
                                    <button type="submit" class="btn btn-secondary ">Save All</button>
                                </div>
                            </form>
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
    <!-- touchspin js-->
<script src="{{asset('assets/js/touchspin/vendors.min.js')}}"></script>
<script src="{{asset('assets/js/touchspin/touchspin.js')}}"></script>
<script src="{{asset('assets/js/touchspin/input-groups.min.js')}}"></script>

<!-- form validation js-->
<script src="{{asset('assets/js/dashboard/form-validation-custom.js')}}"></script>

<!-- ckeditor js-->
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>

<!-- Zoom js-->
<script src="{{asset('assets/js/jquery.elevatezoom.js')}}"></script>
<script src="{{asset('assets/js/zoom-scripts.js')}}"></script>
<script src="{{asset('assets/js/select2.full.js')}}"></script>
<script>
    //main file upload
    
    $(".upload").change(function() {
        readURL(this,'box-input-file');
    });
    function readURL(input,output) {
        console.log(input.id);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(input).closest('.'+output).css('background-image', "url(" + e.target.result + ")");
                $(input).closest('.'+output).css('background-size', "cover");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on('click','.variant_image',function() {
        $(this).prev('.variant_file').trigger('click');
    });
    // $(document).on('click','#remove_image',function() {
    //     $('#cover_file').val('');
    //     $('#cover_image').attr('src', window.location.origin+'/assets/media/users/blank.png');
    // });
    $(document).on('change',".variant_file",function() {
        readVarURL(this,'variant_image');
    });
    function readVarURL(input,output) {
        console.log(input.id);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(input).next('.'+output).css('background-image', "url(" + e.target.result + ")");
                $(input).next('.'+output).css('background-size', "cover");
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    


</script>
<script>
    $('.select2').select2({
        'placeholder':'Select Categories',
    });
    
    $(function() {
        var variants;
        $(document).ready(function () {
            variants = $('#variants').html();
            $('.attrib-options').addClass('attrib-hide');
        });
        $(document).on('click','#addmore',function(){
            $(variants).insertAfter($('.variant_option').last());
        });

        $(document).on('click','.removemore',function(){
            if($('.variant_option').length > 1){
                $(this).closest('.variant_option').remove();
            }
        }); 
    });

    $(document).on('change','#category',function(){
        var attributes = $(this).find("option:selected").attr('data-attr');
        $(".attrib-options").addClass('attrib-hide');
        $("."+attributes).removeClass('attrib-hide');
        
    });

</script>
@endpush

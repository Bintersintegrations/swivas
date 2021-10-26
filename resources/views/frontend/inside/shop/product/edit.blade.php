@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2-bootstrap.min.css')}}">
<style>
    .library-image{
        background-position: center center;
        background-size: 100% 100%;
        min-height: 100px;
    }
    .add-product img {
        width: 500px;
    }
    .add-product ul li {
        display: inline-block !important;
        margin-bottom: 15px; 
        cursor:pointer;
    }
    .add-product ul li .box-input-file {
        width: 100px;
        height: 100px;
        background-color: #f1f4fb;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        vertical-align: middle; 

    }
    .add-product ul li .box-input-file i {
        color: #ff8084; 
    }
    .add-product ul li .box-input-file .upload {
        position: absolute;
        width: 70px;
        left: 0;
        right: 0;
        opacity: 0; 
    } 
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.shop.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <h3>Add Products</h3>
                                    <form action="{{route('shop.product.update',$item)}}" method="POST">@csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Product Title</label>
                                                            <input type="text" name="title" value="{{$item->name}}" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Description</label>
                                                            <textarea class="form-control" name="description" placeholder="Some details about the product">{{$item->description}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="categories" class="form-label">Select Category :</label>
                                                            <select class="form-control" id="category" name="category_id" required>
                                                                <option selected disabled>Select Category</option>
                                                                @foreach ($categories->where('grand_id','!=',null)->where('parent_id','!=',null) as $child)
                                                                <option value="{{$child->id}}" data-attrib="{{implode(',.',$child->attributes->pluck('slug')->toArray())}}" @if($child->id == $item->category_id) selected @endif>{{$child->name}} -> {{$child->getParent()->name }} @if($child->getGrand()) -> {{$child->getGrand()->name}} @endif</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                                <div class="add-product">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="mb-1">Add Image</p>
                                                            <ul class="file-upload-product">
                                                                <li>
                                                                    <div class="box-input-file" data-format="image" 
                                                                        @if($item->media->where('format','image')->has(0)) style="background-image:url({{asset('storage/media/image/'.$item->media->where('format','image')[0]->name)}});background-size:cover;" @endif>
                                                                        <input name="item_media[]" class="album" type="hidden" value="{{$item->media->where('format','image')[0]->id ?? ''}}">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="box-input-file" data-format="image" 
                                                                        @if($item->media->where('format','image')->has(1)) style="background-image:url({{asset('storage/media/image/'.$item->media->where('format','image')[1]->name)}});background-size:cover;" @endif>
                                                                        <input name="item_media[]" class="album" type="hidden" value="{{$item->media->where('format','image')[1]->id ?? ''}}">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="box-input-file" data-format="image"
                                                                        @if($item->media->where('format','image')->has(2)) style="background-image:url({{asset('storage/media/image/'.$item->media->where('format','image')[2]->name)}});background-size:cover;" @endif>
                                                                        <input name="item_media[]" class="album" type="hidden" value="{{$item->media->where('format','image')[2]->id ?? ''}}">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>   
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-8">
                                                            
                                                            <ul class="file-upload-product">
                                                                <li><p class="mb-1">Add Video</p>
                                                                    <div class="box-input-file" data-format="video"
                                                                        @if($item->media->where('format','video')->has(0)) style="background-image:url({{asset('asset/images/video.jpg')}});background-size:cover;" @endif>
                                                                        <input name="item_media[]" class="album" type="hidden" value="{{$item->media->where('format','video')[0]->id ?? ''}}">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li><p class="mb-1">Add Audio</p>
                                                                    <div class="box-input-file" data-format="audio" 
                                                                        @if($item->media->where('format','audio')->has(0)) style="background-image:url({{asset('asset/images/audio.jpg')}});background-size:cover;" @endif>
                                                                        <input name="item_media[]" class="album" type="hidden" value="{{$item->media->where('format','audio')[0]->id ?? ''}}">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="text-center">Product Variants</h4>
                                                <div class="row product-accordion">
                                                    <div class="col-sm-12">
                                                        <div class="accordion theme-accordion variants" id="accordionExample">
                                                            @foreach ($item->products as $product)
                                                                <div class="card variant_option">
                                                                    <div class="card-header" id="heading{{$loop->iteration}}">
                                                                        <h5 class="mb-0">
                                                                            <button class="btn btn-link header-button collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
                                                                                Option {{$loop->iteration}}
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                    <div id="collapse{{$loop->iteration}}" class="collapse" aria-labelledby="heading{{$loop->iteration}}" data-parent="#accordionExample" style="">
                                                                        <div class="card-body">
                                                                            {{-- <div id="variants"> --}}
                                                                                <div class=" border p-4">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group row color">
                                                                                                <div class="col-4 mr-1">
                                                                                                    <label for="color" class="mb-0 mr-1">Color :</label>
                                                                                                </div>
                                                                                                <div class="col-6 p-0">
                                                                                                    <div class="dropdown">
                                                                                                        <div class="color_selected" style="background-color:{{$product->attributes->where('slug','color')->first()->pivot->result ?? 'red'}};width:50px;height:50px;cursor:pointer;"></div>
                                                                                                        <input class="color_value" name="color[]" type="hidden" value="{{$product->attributes->where('slug','color')->first()->pivot->result ?? 'red'}}">
                                                                                                        <div class="dropdown-content">
                                                                                                            <div class="row">
                                                                                                                @foreach($attributes->where('slug','color')->first()->options as $color)
                                                                                                                <div class="col-3">
                                                                                                                    <div class="color-palette" style="background-color:{{$color}};width:50px;height:50px;cursor:pointer;" data-color="{{$color}}"></div>
                                                                                                                </div>
                                                                                                                @endforeach  
                                                                                                            </div>                                             
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label class="col-4 mb-0 mr-1">Quantity:</label>
                                                                                                <input class="form-control col-6" type="number" value="{{$product->quantity}}" name="quantity[]">
                                                                                            </div>
                                                                                            <div class=" mb-3 row">
                                                                                                <label for="price" class="col-4 mb-0 mr-1">Price :</label>
                                                                                                <div class="input-group mb-3 col-6 px-0">
                                                                                                    <input type="number" name="price[]" value="{{$product->amount}}" id="price" class="form-control ">
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text">{{Auth::user()->currency->symbol}}</span>
                                                                                                    </div>
                                                                                                </div>  
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group row attrib-options  numbered_size" style="display:@if($product->attributes->where('slug','numbered_size')->first()) block; @else none;@endif">
                                                                                                <label for="numbered_size" class="col-xl-5 col-sm-4 mb-0">Size :</label>
                                                                                                <input type="text" maxlength="2" placeholder="e.g 44" name="numbered_size[]" value="{{$product->attributes->where('slug','numbered_size')->first()->pivot->result ?? ''}}" class="form-control col-xl-7 col-sm-7">
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options labelled_size" style="display:@if($product->attributes->where('slug','labelled_size')->first()) block; @else none;@endif">
                                                                                                <label for="labelled_size" class="col-xl-5 col-sm-4 mb-0">Size :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="labelled_size" name="labelled_size[]">
                                                                                                    @foreach ($attributes->where('slug','labelled_size')->first()->options as $label=>$size)
                                                                                                        <option value="{{$label}}" @if($product->attributes->where('slug','labelled_size')->first() && $product->attributes->where('slug','labelled_size')->first()->pivot->result == $label) selected @endif>{{$size}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options  carat" style="display:@if($product->attributes->where('slug','carat')->first()) block; @else none;@endif">
                                                                                                <label for="carat" class="col-xl-5 col-sm-4 mb-0">Carat :</label>
                                                                                                <input type="text" maxlength="2" placeholder="e.g 44" name="carat[]" value="{{$product->attributes->where('slug','carat')->first()->pivot->result ?? ''}}" class="form-control col-xl-7 col-sm-7">
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options  storage" style="display:@if($product->attributes->where('slug','storage')->first()) block; @else none;@endif">
                                                                                                <label for="storage" class="col-xl-5 col-sm-4 mb-0">Storage :</label>
                                                                                                <input type="text" maxlength="2" placeholder="e.g 44" name="storage[]" value="{{$product->attributes->where('slug','storage')->first()->pivot->result ?? ''}}" class="form-control col-xl-7 col-sm-7">
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options  fashion_brand" style="display:@if($product->attributes->where('slug','fashion_brand')->first()) block; @else none;@endif">
                                                                                                <label for="fashion_brand" class="col-xl-5 col-sm-4 mb-0">Brand :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="fashion_brand" name="fashion_brand[]">
                                                                                                    @foreach ($attributes->where('slug','fashion_brand')->first()->options as $brand)
                                                                                                        <option value="{{$brand}}" @if($product->attributes->where('slug','fashion_brand')->first() && $product->attributes->where('slug','fashion_brand')->first()->pivot->result == $brand) selected @endif>{{$brand}}</option>
                                                                                                    @endforeach
                                                                                                    
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options  origin" style="display:@if($product->attributes->where('slug','origin')->first()) block; @else none;@endif">
                                                                                                <label for="origin" class="col-xl-5 col-sm-4 mb-0">Made in :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="origin" name="origin[]">
                                                                                                    @foreach ($attributes->where('slug','origin')->first()->options as $origin)
                                                                                                        <option value="{{$origin}}" @if($product->attributes->where('slug','origin')->first() && $product->attributes->where('slug','origin')->first()->pivot->result == $origin) selected @endif>{{$origin}}</option>
                                                                                                    @endforeach
                                                                                                    
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options material" style="display:@if($product->attributes->where('slug','material')->first()) block; @else none;@endif">
                                                                                                <label for="material" class="col-xl-5 col-sm-4 mb-0">Material :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="material" name="material[]">
                                                                                                    @foreach ($attributes->where('slug','material')->first()->options as $material)
                                                                                                        <option value="{{$material}}" @if($product->attributes->where('slug','material')->first() && $product->attributes->where('slug','material')->first()->pivot->result == $material) selected @endif>{{$material}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options clothing_material" style="display:@if($product->attributes->where('slug','clothing_material')->first()) block; @else none;@endif">
                                                                                                <label for="clothing_material" class="col-xl-5 col-sm-4 mb-0">Material :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="clothing_material" name="clothing_material[]">
                                                                                                    @foreach ($attributes->where('slug','clothing_material')->first()->options as $clothing_material)
                                                                                                        <option value="{{$clothing_material}}" @if($product->attributes->where('slug','clothing_material')->first() && $product->attributes->where('slug','clothing_material')->first()->pivot->result == $clothing_material) selected @endif>{{$clothing_material}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options  electronics_brand" style="display: @if($product->attributes->where('slug','electronics_brand')->first()) block; @else none;@endif">
                                                                                                <label for="electronics_brand" class="col-xl-5 col-sm-4 mb-0">Maker :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="electronics_brand" name="electronics_brand[]">
                                                                                                    @foreach ($attributes->where('slug','electronics_brand')->first()->options as $electronics_brand)
                                                                                                    <option value="{{$electronics_brand}}" @if($product->attributes->where('slug','electronics_brand')->first() && $product->attributes->where('slug','electronics_brand')->first()->pivot->result == $electronics_brand) selected @endif>{{$electronics_brand}}</option>
                                                                                                    @endforeach
                                                                                                    
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options  electronics_model" style="display: @if($product->attributes->where('slug','electronics_model')->first()) block; @else none;@endif">
                                                                                                <label for="electronics_model" class="col-xl-5 col-sm-4 mb-0">Model :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="electronics_model" name="electronics_model[]">
                                                                                                    @foreach ($attributes->where('slug','electronics_model')->first()->options as $electronics_model)
                                                                                                    <option value="{{$electronics_model}}" @if($product->attributes->where('slug','electronics_model')->first() && $product->attributes->where('slug','electronics_model')->first()->pivot->result == $electronics_model) selected @endif>{{$electronics_model}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options vehicle_maker" style="display: @if($product->attributes->where('slug','vehicle_maker')->first()) block; @else none;@endif">
                                                                                                <label for="vehicle_maker" class="col-xl-5 col-sm-4 mb-0">Maker :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="vehicle_maker" name="vehicle_maker[]">
                                                                                                    @foreach ($attributes->where('slug','vehicle_maker')->first()->options as $vehicle_maker)
                                                                                                        <option value="{{$vehicle_maker}}" @if($product->attributes->where('slug','vehicle_maker')->first() && $product->attributes->where('slug','vehicle_maker')->first()->pivot->result == $vehicle_maker) selected @endif>{{$vehicle_maker}}</option>
                                                                                                    @endforeach         
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options vehicle_model" style="display: @if($product->attributes->where('slug','vehicle_model')->first()) block; @else none;@endif">
                                                                                                <label for="vehicle_model" class="col-xl-5 col-sm-4 mb-0">Model :</label>
                                                                                                <select class="form-control digits col-xl-7 col-sm-7" id="vehicle_model" name="vehicle_model[]">
                                                                                                    @foreach ($attributes->where('slug','vehicle_model')->first()->options as $vehicle_model)
                                                                                                        <option value="{{$vehicle_model}}" @if($product->attributes->where('slug','vehicle_model')->first() && $product->attributes->where('slug','vehicle_model')->first()->pivot->result == $vehicle_model) selected @endif>{{$vehicle_model}}</option>
                                                                                                    @endforeach         
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group row attrib-options year" style="display:@if($product->attributes->where('slug','year')->first()) block; @else none;@endif">
                                                                                                <label for="year" class="col-xl-5 col-sm-4 mb-0">Year :</label>
                                                                                                <input type="text" minlength="4" maxlength="4" placeholder="e.g 1995" value="{{$product->attributes->where('slug','year')->first()->pivot->result ?? ''}}" name="year[]" class="form-control col-xl-7 col-sm-7">
                                                                                            </div>  
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <div class="add-product">
                                                                                                    <div class="row"> 
                                                                                                        <div class="col-12">
                                                                                                            <ul class="file-upload-product">
                                                                                                                <li><p class="mb-1">Add Image</p>
                                                                                                                    <div class="box-input-file" data-format="image"
                                                                                                                    @if($product->image) style="background-image:url({{asset('storage/media/image/'.$product->image->name)}});background-size:cover;" @endif>
                                                                                                                        <input name="product_image[]" value="{{$product->image->id}}" class="album" type="hidden">
                                                                                                                        <i class="fa fa-plus"></i>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>                    
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <button type="button" class="btn btn-danger removemore">Discard</button>
                                                                                    </div>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="d-flex justify-content-center my-2">
                                                    <button type="button" class="btn btn-dark" id="addmore">Add Variant</button>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-solid">Save product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->
@include('layouts.frontend.media')
@endsection

@push('scripts')
    <script src="{{asset('assets/js/select2.full.js')}}"></script>
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    {{-- <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script> --}}
    <script>
        $('.select2').select2();
    </script>
    <script>
        Dropzone.options.myAwesomeDropzone = {
        parallelUploads: 5,
        maxFilesize: 1,
        addRemoveLinks: false,
        acceptedFiles: 'image/*,video/*,audio/*',
            init: function() {
                
                this.on("success", function(file,response) { 
                    $('#library').html(response);
                    // alert($('#media_file').length);
                    if($('.media_file').length){
                        //alert('available');
                        $('.media_file').each(function(index){
                            var media_id = $(this).attr('id');
                            $('.library-checklist[media_id="'+media_id+'"]').prop("checked", true);
                        });
                    }
                });
                this.on("complete", function(file) { this.removeFile(file); });
            }
        };
        function deleteFile(dfile){
            $.ajax({
                type: "POST",
                url:'{{route("vendor.media.delete")}}',
                    data:{
                        '_token' : $('meta[name="csrf-token"]').attr('content'),
                        'file_name': dfile
                    },
                success:function(data) {
                    console.log(dfile+' removed');
                }
            });
        }
    </script>
    {{-- color picker --}}
    <script>
        $(document).on('click','.color-palette',function(){
            $(this).closest('.dropdown').find('.color_selected').css('background-color', $(this).css('background-color'));;
            $(this).closest('.dropdown').find('.color_value').val($(this).attr('data-color'));
        });
    </script>

    {{-- Product Add --}}
    <script>
        $(function() {
            var variant_option;
            $(document).ready(function () {
                variant_option = $('.variants').html();
                $('.collapse').addClass('show');
                // $('.attrib-options').addClass('attrib-hide');
            });
            $(document).on('click','#addmore',function(){
                $(variant_option).insertAfter($('.variant_option').last());
                changeAttributes($("#category option:selected").attr("data-attrib"));
                $('.variant_option').each(function(index){
                    $(this).find('.card-header').attr('id','heading'+parseInt(index+1));
                    $(this).find('.header-button').html('Option '+parseInt(index+1));
                    $(this).find('.header-button').attr('data-target','#collapse'+parseInt(index+1));
                    $(this).find('.collapse').attr('id','collapse'+parseInt(index+1));
                });
            });

            $(document).on('click','.removemore',function(){
                if($('.variant_option').length > 1){
                    $(this).closest('.variant_option').remove();
                    $('.variant_option').each(function(index){
                        $(this).find('.card-header').attr('id','heading'+parseInt(index+1));
                        $(this).find('.header-button').html('Option '+parseInt(index+1));
                        $(this).find('.header-button').attr('data-target','#collapse'+parseInt(index+1));
                        $(this).find('.collapse').attr('id','collapse'+parseInt(index+1));
                    });
                }
            }); 
        });
    </script>
    {{-- media add --}}
    <script>
        var initiator;
        $(document).on('click','.box-input-file',function(){
            initiator = $(this);
            var format = initiator.attr('data-format');
            $('.media-image,.media-audio,.media-video').hide();
            $('.media-'+format).show();
            var input = initiator.find('input').val();
            $('.select-media[media_id="'+ input+'"]').find('a').html('Select');
            $('#addMedia').modal();
        });
        $(document).on('click','.select-media',function(){
            $(this).find('a').html('Selected');
            initiator.find('input').val($(this).attr('media_id'))
            switch($(this).attr('media_type')){
                case 'image':   initiator.css('background-image', "url(" + $(this).attr('media_src') + ")");
                                initiator.css('background-size', "cover");
                break;
                case 'video':   initiator.css('background-image', "url('/assets/images/video.jpg')");
                                initiator.css('background-size', "cover");
                break;
                case 'audio':   initiator.css('background-image', "url('/assets/images/audio.jpg')");
                                initiator.css('background-size', "cover");
                break;
            }
            $('#addMedia').modal('hide');
        });
    </script>
    {{-- attribute change by category --}}
    <script>
        $(document).on('change','#category',function(){
            changeAttributes($('option:selected', this).attr('data-attrib'));
        });
        function changeAttributes(attributes){
            $('.attrib-options').hide();
            $('.'+attributes).show();
        }
    </script>
@endpush
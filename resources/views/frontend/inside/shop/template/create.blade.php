@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
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
                                    <form action="{{route('shop.product.save',$shop)}}" method="POST">@csrf
                                        
                                        <div class="row mt-3">
                                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text" name="title"  class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control" rows="3" name="description" placeholder="Some details about the product"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="categories" class="form-label">Select Category :</label>
                                                    <select class="form-control select2" id="category" name="category_id" multiple required>
                                                        
                                                        @foreach ($categories->where('parent_id','!=',null) as $child)
                                                        <option value="{{$child->id}}" data-attrib="">{{$child->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label class="mb-0 mr-1">Available Quantity:</label>
                                                        <input class="form-control" type="number" value="1" name="quantity">
                                                        
                                                    </div>
                                                    <div class=" mb-3 col-6">
                                                        <label for="price" class="mb-0 mr-1">Price :</label>
                                                        <div class="input-group mb-3px-0">
                                                            <input type="number" name="price[]" value="0" id="price" class="form-control ">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">{{$shop->country->currency_symbol}}</span>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label class="mb-0 mr-1">Min Purchase Quantity:</label>
                                                        <input class="form-control" type="number" value="1" name="min_qty">
                                                        <small>Leave empty if no maximum</small>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-0 mr-1">Max Purchase Quantity:</label>
                                                        <input class="form-control" type="number" value="" name="max_qty">
                                                        <small>Leave empty if no maximum</small>
                                                    </div> 
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div class="form-check pl-0">
                                                            <input class="radio_animated form-check-input mt-1 " type="checkbox" name="sales" id="sales" value="1">
                                                            <label class="form-check-label" for="sales">
                                                                Add Offers / Promo Price
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class=" mb-3 col-4">
                                                        <label for="price" class="mb-0 mr-1">Price :</label>
                                                        <div class="input-group mb-3px-0">
                                                            <input type="number" name="price[]" value="0" id="price" class="form-control ">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">{{$shop->country->currency_symbol}}</span>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="form-group col-4 px-1">
                                                        <label class="mb-0 mr-1">Start Date:</label>
                                                        <input class="form-control" type="number" value="3/11/2019" name="sales_start">
                                                    </div>
                                                    <div class="form-group col-4 px-1">
                                                        <label class="mb-0 mr-1">End Date:</label>
                                                        <input class="form-control" type="number" value="3/11/2019" name="sales_end">
                                                    </div>
                                                     
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-check pl-0">
                                                            <input class="radio_animated form-check-input mt-1 " type="checkbox" name="buyalone" id="buyalone" value="1">
                                                            <label class="form-check-label" for="buyalone">
                                                                Allow Customers to buy this product alone
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label" for="group">Select Grouped Items</label>
                                                        <select class="form-control select2" name="group" id="group" multiple>
                                                            <option>Bag</option>
                                                            <option>Sugar</option>
                                                            <option>Tea</option>
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label" for="related">Related Products</label>
                                                        <select class="form-control select2" name="related[]" id="related" multiple>
                                                            <option>Bag</option>
                                                            <option>Sugar</option>
                                                            <option>Tea</option>
                                                        </select>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label" for="boughtTogether">Frequently Bought Together</label>
                                                        <select class="form-control select2" name="boughtTogether[]" id="boughtTogether" multiple>
                                                            <option>Bag</option>
                                                            <option>Sugar</option>
                                                            <option>Tea</option>
                                                        </select>
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
                                                                    <div class="box-input-file" data-format="image">
                                                                        <input name="item_media[]" class="album" type="hidden">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="box-input-file" data-format="image">
                                                                        <input name="item_media[]" class="album" type="hidden">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="box-input-file" data-format="image">
                                                                        <input name="item_media[]" class="album" type="hidden">
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
                                                                    <div class="box-input-file" data-format="video">
                                                                        <input name="item_media[]" class="album" type="hidden">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                                <li><p class="mb-1">Add Audio</p>
                                                                    <div class="box-input-file" data-format="audio">
                                                                        <input name="item_media[]" class="album" type="hidden">
                                                                        <i class="fa fa-plus"></i>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-12">
                                                        <h4 class="my-5">Attributes</h4>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-sm btn-solid btn-dark">Save product</button>
                                                <button type="submit" class="btn btn-sm btn-solid">Publish product</button>
                                            </div>
                                        </div>
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
    
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    {{-- <script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script> --}}
    
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
                url:'{{route("shop.media.delete")}}',
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
        $('.select2').select2();
        
    </script>
@endpush
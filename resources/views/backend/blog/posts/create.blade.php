@extends('layouts.backend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/summernote/summernote.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
<style>
    
</style>
@endpush
@section('main')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Add Products
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Physical</li>
                    <li class="breadcrumb-item active">Add Product</li>
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
                        
                            <div class="col-md-8">
                                <form class="needs-validation add-product-form" novalidate="" method="POST" action="{{route('admin.posts.save')}}">@csrf
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="title" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                            <input class="form-control col-xl-8 col-sm-7" name="title" id="title" type="text" required="">
                                            @error('title')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="excerpts" class="col-xl-3 col-sm-4 mb-0">Excerpts :</label>
                                            <textarea class="form-control col-xl-8 col-sm-7" id="excerpts" name="excerpts" type="text" required=""></textarea>
                                            @error('excerpts')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="categories" class="col-xl-3 col-sm-4 mb-0">Categories :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7 select2" multiple name="categories[]" id="categories">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4 mb-0">Publish Date</label>
                                            <input id="dateandtime" class="datepicker_here form-control digits col-xl-8 col-sm-7" name="publish_date" type="text" data-language="en">
                                        </div>
                                    
                                        <div class="form-group row">
                                            <label for="visibility" class="col-xl-3 col-sm-4 mb-0">Visibility :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="visibility" name="status">
                                                <option value="1">Show</option>
                                                <option value="0">Hide</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            {{-- <label class="col-xl-3 col-sm-4">Add Description :</label> --}}
                                            <div class="col-12 pl-0 description-sm">
                                                <textarea id="summernote" name="body" cols="10" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        {{-- <button type="button" class="btn btn-light">Discard</button> --}}
                                    </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="add-product">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Featured Image</h4>
                                            <img src="{{asset('assets/images/pro3/1.jpg')}}" alt="" style="height:200px" class="img-fluid image_zoom_1 blur-up lazyloaded box-input-file" data-format="image">
                                            <input name="featured_image" id="featured_image" type="hidden">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
<!--  dashboard section end -->
@include('layouts.backend.media')
@endsection
@push('scripts')
    <!-- touchspin js-->
<script src="{{asset('assets/js/summernote/summernote.min.js')}}"></script>
<script>
    $('#summernote').summernote({
        dialogsInBody: true,
        minHeight:300,
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }
        }
    });
    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        data.append("_token", $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            data: data,
            type: "POST",
            url: "{{route('admin.media.summernote')}}",
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                $('#summernote').summernote('insertImage', url);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>

<script>
    //file upload
    function readURL(input,output) {
        console.log(input.id);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#'+output).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".select-from-library-button").click(function() {
        $('#cover_file').trigger('click');
    });
    $("#cover_file").change(function() {
        readURL(this,'cover_image');
        $('.media-thumb-container').html('Change Image');

    });

</script>
<script src="{{asset('assets/js/datepicker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/datepicker.custom.js')}}"></script>
<script>
    $('.select2').select2();
    $('#dateandtime').datepicker({
        language: 'en',
        minDate: new Date(),
        timepicker: true // Now can select only dates, which goes after today
    })
</script>

    <script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
    {{-- < src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></> --}}
    
    {{-- Dropzone --}}
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
    {{-- media add --}}
    <script>
        var initiator;
        $(document).on('click','.box-input-file',function(){
            initiator = $(this);
            var format = initiator.attr('data-format');
            $('.media-image,.media-audio,.media-video').hide();
            $('.media-'+format).show();
            $('#addMedia').modal();
        });
        $(document).on('click','.select-media',function(){
            $(this).find('a').html('Selected');
            $('#featured_image').val($(this).attr('media_id'))
            initiator.attr('src', $(this).attr('media_src') );
            $('#addMedia').modal('hide');
        });
    </script>
@endpush

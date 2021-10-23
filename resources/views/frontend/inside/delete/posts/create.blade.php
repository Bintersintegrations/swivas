@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/summernote/summernote.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
<style>
    .datepickers-container {
        top: -10px !important;
    }
</style>
@endpush
@section('main')
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-0">
                            <div class="card-body">
                                <div class="dashboard-box">
                                    <h3>Add Post</h3>
                                    <form action="{{route('vendor.posts.save')}}" method="POST">@csrf
                                        <div class="row">
                                            <div class="col-lg-7 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-3">
                                                            <label for="title" class="form-label">Title :</label>
                                                            <input class="form-control" name="title" id="title" type="text" required="">
                                                            @error('title')
                                                                <span class="invalid-feedback d-block" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="excerpts" class="form-label">Excerpts :</label>
                                                            <textarea class="form-control" id="excerpts" name="excerpts" placeholder="Say the summary" required></textarea>
                                                        </div>
                                                        @error('excerpts')
                                                        <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>                                              
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="categories" class="form-label">Categories :</label>
                                                            <select class="form-control select2" multiple name="categories[]" id="categories">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Publish Date</label>
                                                            <input id="dateandtime" class=" form-control" name="publish_date" type="text" data-language="en">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="visibility" class="form-label">Visibility :</label>
                                                            <select class="form-control" id="visibility" name="status">
                                                                <option value="1">Show</option>
                                                                <option value="0">Hide</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>                    
                                            <div class="col-lg-5 col-sm-12 col-xs-12">
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
                                            <div class="col-12">
                                                <div class="add-product">
                                                    <div class="form-group row">
                                                        {{-- <label class="col-xl-3 col-sm-4">Add Description :</label> --}}
                                                        <div class="col-12 pl-0 description-sm">
                                                            <textarea id="summernote" name="body" cols="10" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                
                                                <div class="row product-accordion">
                                                    
                                                </div>
                                                
                                            
                                                
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-sm btn-solid">Save Item</button>
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


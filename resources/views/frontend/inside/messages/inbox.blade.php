@extends('layouts.frontend.app')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/js/summernote/summernote.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-12">
                        <div class="card dashboard-table mt-0" id="message-list">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>all messages</h3>
                                    {{-- <a href="javascript:void(0);" class="btn btn-sm btn-solid" id="add-message">add messages</a> --}}
                                </div>
                                <table class="table-responsive-md table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col w-20">From</th>
                                            <th scope="col w-40">Message</th>
                                            <th scope="col"></th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr class="message-row">
                                                <td><input type="checkbox"></td>
                                                <td>
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex">
                                                            <img src="{{asset('storage/user/photo/'.$message->sender->photo)}}" alt="" class="img-fluid blur-up rounded-circle lazyloaded pr-1" style="width:30px !important;">
                                                            <span class="d-flex flex-column justify-content-center">{{$message->sender->name}}</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-left ">
                                                    <a href="#" class="text-dark d-flex">
                                                    <span class="font-weight-bold">{{$message->ticket ? $message->ticket->subject:$message->subject}}</span>
                                                    <span class="text-muted">- {{'This is a test message to jowiewieow wio oeio'}}</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="message-buttons" style="display:none">
                                                        {{-- <a href="#" class="" title="pen"><i class="fa fa-pencil"></i></a> --}}
                                                        <a href="javascript:void(0);"  title="Delete" data-toggle="modal" data-target="#deletemessage{{$message->id}}"><i class="fa fa-trash text-white"></i></a>
                                                        
                                                    </div>
                                                    <div class="modal fade" id="deletemessage{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="deletemessage{{$message->id}}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete message</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <form class="needs-validation" action="#" method="POST">@csrf
                                                                    <div class="modal-body">
                                                                        <h5>Are you sure you want to delete this message</h5>
                                                                        <input type="hidden" name="message_id" value="{{$message->id}}">
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
                                                <td>Jan 22</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mt-0 message-content"  style="display:none;">
                            <div class="card-body">
                                <div class="top-sec border-bottom pb-3">
                                    <a href="javascript:void(0) h5" class="text-dark lead" id="back-to-list"><i class="fa fa-arrow-left"></i></a>
                                    <a href="javascript:void(0)" class="text-danger lead px-5"><i class="fa fa-trash"></i></a>
                                    {{-- <a href="#" class="btn btn-sm btn-solid">add messages</a> --}}
                                </div>
                                <h3>This is the subject <span class="badge badge-primary">Ticket</span></h3>
                            </div>
                            <div class="accordion theme-accordion" id="accordionExample">
                                <div class="card border-0">
                                    <div class="card-header rounded-0 bg-white" id="headingOne">
                                        
                                        <span class=" collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex">
                                                    <img src="http://market.test/storage/user/photo/user.jpg" alt="" class="img-fluid blur-up rounded lazyloaded pr-1" style="width:50px !important;">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="">James Henry</span>
                                                        <span class="text-muted">This is a test message from the ministry of works</span>
                                                    </div>
                                                </div>
                                                <div class="text-muted mr-2">Jul 15, 2019, 11:19AM</div>
                                            </div>
                                        </span>
                                        
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <p>it look like readable English. Many desktop publishing packages
                                                and web page editors now use Lorem Ipsum as their default model
                                                text, and a search for 'lorem ipsum' will uncover many web sites
                                                still in their infancy. Various versions have evolved over the
                                                years,All the Lorem Ipsum generators on the Internet tend to
                                                repeat predefined chunks as necessary, making this the first
                                                true generator on the Internet. It uses a dictionary of over 200
                                                Latin words, combined with a handful of model sentence
                                                structures</p>
                                            <div class="single-product-tables detail-section">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>Febric:</td>
                                                            <td>Chiffon</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Color:</td>
                                                            <td>Red</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Material:</td>
                                                            <td>Crepe printed</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-header rounded-0 bg-white" id="headingTwo">
                                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex">
                                                    <img src="http://market.test/storage/user/photo/user.jpg" alt="" class="img-fluid blur-up rounded lazyloaded pr-1" style="width:50px !important;">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="">James Henry</span>
                                                        <span class="text-muted">This is a test message from the ministry of works</span>
                                                    </div>
                                                </div>
                                                <div class="text-muted mr-2">Jul 15, 2019, 11:19AM</div>
                                            </div>
                                        </span> 
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="text-muted mt-4">
                                                <p>Hi Bob,</p>
                                                <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                                                <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                                                <p>Best regards,</p>
                                                <p>Jason Muller</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-header rounded-0 bg-white" id="headingThree">
                                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex">
                                                    <img src="http://market.test/storage/user/photo/user.jpg" alt="" class="img-fluid blur-up rounded lazyloaded pr-1" style="width:50px !important;">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <span class="">James Henry</span>
                                                        <span class="text-muted">This is a test message from the ministry of works</span>
                                                    </div>
                                                </div>
                                                <div class="text-muted mr-2">Jul 15, 2019, 11:19AM</div>
                                            </div>
                                        </span>
                                        
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="text-muted mt-4">
                                                <p>Hi Bob,</p>
                                                <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                                                <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                                                <p>Best regards,</p>
                                                <p>Jason Muller</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card message-content" style="display:none;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <img src="{{asset('storage/user/photo/'.$message->sender->photo)}}" alt="" class="img-fluid blur-up rounded lazyloaded pr-1" style="width:50px !important;">
                                        <div class="d-flex flex-column justify-content-center">
                                            <span class="">{{$message->sender->name}}</span>
                                            <div class="d-flex flex-column">
                                                <div class="toggle-off-item">
                                                    <span class="text-muted cursor-pointer dropdown-toggle" data-toggle="dropdown" aria-expanded="true">to me 
                                                    {{-- <i class="fa fa-angle-down"></i></span> --}}
                                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left p-2" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(92px, 36px, 0px);width:300px;">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-muted w-50 py-2">From</td>
                                                                    <td>Mark Andre</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted py-2">Date:</td>
                                                                    <td>Jul 30, 2019, 11:27 PM</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted py-2">Subject:</td>
                                                                    <td>Trip Reminder. Thank you for flying with us!</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-muted py-2">Reply to:</td>
                                                                    <td>mark.andre@gmail.com</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        {{-- toolbar --}}
                                        <div class="d-flex align-items-center">
                                            <div class="font-weight-bold text-muted mr-2">Jul 15, 2019, 11:19AM</div>
                                            <div class="d-flex align-items-center" data-inbox="toolbar">
                                                <span class="btn btn-clean btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Star">
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                <span class="btn btn-clean btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as important">
                                                    <i class="fa fa-tag"></i>
                                                </span>
                                                <span class="btn btn-clean btn-sm btn-icon mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reply">
                                                    <i class="fa fa-reply"></i>
                                                </span>
                                                <span class="btn btn-clean btn-sm btn-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- mail text --}}
                                <div class="text-muted mt-4">
                                    <p>Hi Bob,</p>
                                    <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                                    <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                                    <p>Best regards,</p>
                                    <p>Jason Muller</p> 
                                </div>
                            </div>                          
                            <div class="card-body">
                                <div class="form-group"> 
                                    <textarea name="body" cols="10" rows="10" class="form-control summernote"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Reply</button>
                                </div>
                            </div>               
                        </div>
                        {{-- <div class="card" id="message-create" style="display:none">
                            <div class="card-body">
                                <div class="form-row">
                                    <label>To:</label>
                                    <input>
                                </div>
                                <div class="form-group"> 
                                    <textarea name="body" cols="10" rows="10" class="form-control summernote"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary">Send</button>
                                    <button class="btn btn-secondary">Save as Draft</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->

@endsection

@push('scripts')
    <!-- dare picker js -->
    <script src="{{asset('assets/js/date-picker.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker1').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('.message-row').on('mouseover',function(){
            $(this).css('background-color',"grey");
            $(this).find('.message-buttons').show();
        });
        $('.message-row').on('mouseout',function(){
            $(this).css('background-color',"white");
            $(this).find('.message-buttons').hide();
        });
        $('.message-row').on('click',function(){
            $('#message-list').fadeOut();
            //get that message
            
            $('.message-content').fadeIn();
        });
        $('#back-to-list').on('click',function(){
            $('.message-content,#message-create').fadeOut();
            $('#message-list').fadeIn();
        });
        // $('#add-message').on('click',function(){
        //     $('.message-content,#message-list').fadeOut();
        //     $('#message-create').fadeIn();
        // })


    </script>
    <script src="{{asset('assets/js/summernote/summernote.min.js')}}"></script>
    <script>
        $('.summernote').summernote({
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
@endpush
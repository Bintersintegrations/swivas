@extends('layouts.frontend.app')
@push('styles')
    
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
                        <div class="card dashboard-table mt-0">
                            <div class="card-body">
                                <div class="top-sec">
                                    <h3>all messages</h3>
                                    <a href="#" class="btn btn-sm btn-solid">add messages</a>
                                </div>
                                <table class="table-responsive-md table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">receiver</th>
                                            <th scope="col">subject</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)
                                            <tr class="message-row">
                                                <td><input type="checkbox"></td>
                                                
                                                <td><a href="#">To: {{$message->sender->name}}</a></td>
                                                <td>{{$message->subject}}</td>
                                                <td>
                                                    
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-success" title="pen"><i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-sm btn-primary"  title="Delete" data-toggle="modal" data-target="#deletemessage{{$message->id}}"><i class="fa fa-trash"></i></button>
                                                    <div class="modal fade" id="deletemessage{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="deletemessage{{$message->id}}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Delete message</h5>
                                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <form class="needs-validation" action="#" method="POST">@csrf
                                                                    <div class="modal-body">
                                                                        <h5>Are you sure you want to delete message titled: {{$message->title}} </h5>
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
    </script>
@endpush
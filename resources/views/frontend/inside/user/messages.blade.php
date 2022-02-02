@extends('layouts.frontend.app')
@push('styles')
    <style>
       
      body {
        min-height: 100vh;
      }

      ::-webkit-scrollbar {
        width: 5px;
      }

      ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
      }

      ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
      }

      .text-small {
        font-size: 0.9rem;
      }

      .messages-box,
      .chat-box {
        height: 510px;
        overflow-y: scroll;
      }

      .rounded-lg {
        border-radius: 0.5rem;
      }

      input::placeholder {
        font-size: 0.9rem;
        color: #999;
      }
      @media only screen and (max-width: 600px) {
        .hidelist{
          display: none;
        }
      }

    </style>
@endpush
@section('main')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.inside.user.sidebar')
            </div>
            <div class="col-lg-9">  
              <div class="container py-0 px-1">
                <!-- For demo purpose-->
                <div class="row rounded-lg overflow-hidden shadow">
                  <!-- Users box-->
                  <div class="col-lg-5 px-0" id="message-list">
                    <div class="bg-white">
            
                      <div class="bg-gray px-4 py-2 bg-light">
                        <p class="h5 mb-0 py-1">Messages</p>
                      </div>
            
                      <div class="messages-box">
                        <div class="list-group rounded-0">
                        <a href="#messages1" class="list-group-item list-group-item-action active  rounded-0" data-toggle="tab">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">25 Dec</small>
                            </div>
                            <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#messages2" class="list-group-item list-group-item-action list-group-item-light rounded-0" data-toggle="tab">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Emma Doe</h6><small class="small font-weight-bold">14 Dec</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#messages1" class="list-group-item list-group-item-action list-group-item-light rounded-0" data-toggle="tab">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Michael Doe</h6><small class="small font-weight-bold">9 Nov</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">18 Oct</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">17 Oct</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">2 Sep</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">30 Aug</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
                          <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                            <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">21 Aug</small>
                            </div>
                            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                          </div>
                          </div>
                        </a>
            
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Chat Box-->
                  <div class="col-lg-7 px-0 hidelist" id="conversation">
                  
                    <div class="tab-content px-4 py-5 chat-box bg-white">
                      <!-- Sender Message Jason-->
                      <div class="tab-pane active" id="messages1">
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-3">
                          <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Jason which is a new approach all solutions</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                          <div class="media-body">
                          <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-3">
                          <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                          <div class="media-body">
                          <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-3">
                          <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                          <div class="media-body">
                          <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                      </div>
                    
                      <!-- Sender Message-->
                      <div id="messages2" class="tab-pane">
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-3">
                          <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Emma which is a new approach all solutions</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                          <div class="media-body">
                          <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-3">
                          <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                          <div class="media-body">
                          <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
                          <div class="media-body ml-3">
                          <div class="bg-light rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                          <div class="media-body">
                          <div class="bg-primary rounded py-2 px-3 mb-2">
                            <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                          </div>
                          <p class="small text-muted">12:00 PM | Aug 13</p>
                          </div>
                        </div>
            
                      </div>
                    
                    </div>
            
                    <!-- Typing area -->
                    <form action="#" class="bg-light">
                      <div class="input-group">
                        <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                        <div class="input-group-append">
                        <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
                        </div>
                      </div>
                    </form>
            
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
    <script>
        $('.list-group-item').on('click',function(){
          $('#message-list').addClass('hidelist')
          $('#conversation').removeClass('hidelist')
          //change the content of form_input_message_id
        })
    </script>
@endpush
{{-- <div class="modal fade" tabindex="-1" id="addMedia">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header pb-0">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="media-home-tab" data-toggle="tab" href="#media-home" role="tab" aria-selected="true">Upload</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="second-media-tab" data-toggle="tab" href="#media-second" role="tab" aria-selected="false">Use Link</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" id="third-media-tab" data-toggle="tab" href="#media-third" role="tab" aria-selected="false">Instagram</a>
                        <div class="material-border"></div>
                    </li>   
                </ul>
                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-xs btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                      <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"></path>
                      </svg>
                    </button>
                  </div>
            </div>
            <div class="modal-body ">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="tab-content nav-material" id="top-tabContent">
                            <div class="tab-pane fade show active" id="media-home" role="tabpanel" aria-labelledby="media-home-tab">
                                <form class="dropzone digits" id="myAwesomeDropzone" action="{{route('shop.media.dropzone',$shop)}}" enctype="multipart/form-data">@csrf
                                    <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                        <h4 class="mb-0 f-w-600">Drop files here or click to upload.</h4>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="media-second" role="tabpanel" aria-labelledby="second-media-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <p> Enter URL to fetch image from.</p>
                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="append"><button class="btn btn-primary py-2">Get Image</button></span>
                                        </div>
                                        <div class="mt-3 result " style="height:100px;">
                                            <p>Image Result:</p> 
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="tab-pane fade" id="media-third" role="tabpanel" aria-labelledby="third-media-tab">
                                <div class="d-flex justify-content-center my-5">
                                    <div class="text-center ">
                                        <button class="btn btn-danger"><i class="fa fa-instagram"></i><span class="ml-2">Connect Your Instagram</span></button>
                                    </div>
                                </div>
                                
                            </div>   
                        </div>
                    </div>
                </div> 
                <div class="row mt-5 pt-3 border-top" id="library">
                    @include('frontend.inside.media.library')
                </div>      
            </div><!-- .modal-body -->
        </div>
    </div>
</div> --}}
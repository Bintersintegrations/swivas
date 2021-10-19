@forelse (Auth::user()->media->sortByDesc('created_at') as $media)
    <div class="col-xs-6 col-sm-3 col-md-2 library_file">
        <label class="custom-control custom-checkbox mb-0 pl-0">
            <div class="card d-flex flex-row  media-thumb-container library-thumbnail" 
            style="background:@if(in_array($media->format,['mp4','webm'])) url({{asset('storage/media/video/'.$media->name.'.jpg')}}) 
            @else url({{asset('storage/media/image/'.$media->name)}}) @endif ;background-position:center center;background-size:100% 100%">
                <!--<a class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                    <i class="iconsminds-folder-open"></i></a> -->
                <div class="d-flex flex-grow-1 min-width-zero">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center"></div>
                    <div class="pl-1 pb-3 align-self-center">
                        <input type="checkbox" class="custom-control-input library-checklist" media_id="media{{$media->id}}" @if(in_array($media->format,['mp4','webm'])) media_link="{{asset('storage/media/video/'.$media->name.'.jpg')}}" @else media_link="{{asset('storage/media/image/'.$media->name)}}" @endif> 
                        <span class="custom-control-label"></span>
                    </div>
                </div>
            </div>
        </label>
        <div class="d-flex justify-content-center"><a href="#">Remove</a></div>
    </div>
@empty
<div class="col-xs-6 col-sm-4 col-md-3 library_file d-flex justify-content-content">
    <p class="text-center">No Media in Library</p>
</div>
@endforelse
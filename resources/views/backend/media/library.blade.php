@forelse (Auth::user()->media->sortByDesc('created_at') as $media)
    @if($media->format == 'video')
        <div class="col-xs-12 col-sm-4 col-md-3 media-video library_file">
            <div class="card d-flex flex-row library-thumbnail">
                <video src="{{asset('storage/media/video/'.$media->name)}}" controls style="width:100%">Your browser does not support the video tag.</video>                
            </div>
            <div class="d-flex justify-content-center select-media" media_id="{{$media->id}}" media_type="{{$media->format}}" media_src="{{asset('storage/media/video/'.$media->name)}}"><a href="#">Select</a></div>
        </div>
    @elseif($media->format == 'audio')
        <div class="col-xs-12 col-sm-4 col-md-3 media-audio library_file">
            <div class="card d-flex flex-row library-thumbnail"> 
                <audio src="{{asset('storage/media/audio/'.$media->name)}}" controls></audio>                
            </div>
            <div class="d-flex justify-content-center select-media" media_id="{{$media->id}}" media_type="{{$media->format}}" media_src="{{asset('storage/media/audio/'.$media->name)}}"><a href="#">Select</a></div>
        </div>
    @else
        <div class="col-xs-6 col-sm-3 col-md-2 media-image library_file">
            <div class="card d-flex flex-row library-image" 
                style="background: url({{asset('storage/media/image/'.$media->name)}});background-position:center center;background-size:100% 100%">                
            </div>
            <div class="d-flex justify-content-center select-media" media_id="{{$media->id}}" media_type="{{$media->format}}" media_src="{{asset('storage/media/image/'.$media->name)}}"><a href="#">Select</a></div>
        </div>
    @endif  
@empty
<div class="col-xs-6 col-sm-4 col-md-3 library_file d-flex justify-content-content">
    <p class="text-center">No Media in Library</p>
</div>
@endforelse
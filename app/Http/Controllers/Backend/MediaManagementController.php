<?php

namespace App\Http\Controllers\Backend;

use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\MediaManagementTrait;

class MediaManagementController extends Controller
{
    use MediaManagementTrait;

    public function listmedia(){
        $media = Media::all();
        return view('backend.media.list',compact('media'));
    }
    //summer note add image
    public function summernote_media(Request $request){
        return $this->summernote($request);
    }

    public function dropzone_media(Request $request){
        $this->dropzone($request);
        return view('backend.media.library');
    }
}

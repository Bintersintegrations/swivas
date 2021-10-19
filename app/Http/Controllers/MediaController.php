<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\MediaManagementTrait;


class MediaController extends Controller
{
    use MediaManagementTrait;

    public function __construct(){
        $this->middleware('auth');
    }

    public function summernote_media(Request $request){
        return $this->summernote($request);
    }

    public function dropzone_media(Request $request){
        $this->dropzone($request);
        return view('frontend.inside.media.library');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;
class VideoController extends Controller
{
   function onSelectVideo(){
   return HomeEtcModel::select('video_description','video_url')->get();
   }
}

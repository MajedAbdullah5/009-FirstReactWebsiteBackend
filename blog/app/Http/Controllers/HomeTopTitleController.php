<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;
class HomeTopTitleController extends Controller
{
    function homeTopTitle(){
            return HomeEtcModel::select('home_title','home_subtitle')->get();
            }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;

class HomeEtcController extends Controller
{
    function onHomeEtcSelect(){
        return HomeEtcModel::all();
    }
}

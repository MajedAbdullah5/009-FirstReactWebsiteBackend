<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;
class TotalProjectClient extends Controller
{
     function onSelectClient(){
       return HomeEtcModel::select('total_project','total_client')->get();
       }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeEtcModel;
class TechDescController extends Controller
{
 function techDesc(){
        return HomeEtcModel::select('tech_description')->get();
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientReviewModel;

class ClientReviewController extends Controller
{
    function onSelectClient(){
    return ClientReviewModel::all();
    }
}

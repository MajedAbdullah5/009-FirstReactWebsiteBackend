<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChartDataModel;
class ChartDataController extends Controller
{
  function onAllSelect(){
  return ChartDataModel::all();
  }
}

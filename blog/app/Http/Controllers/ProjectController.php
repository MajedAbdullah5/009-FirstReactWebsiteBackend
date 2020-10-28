<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectModel;

class ProjectController extends Controller
{
    function onProjectSelect(){
        return ProjectModel::all();
    }
    function onSeletctThree(){
      return ProjectModel::limit(3)->get();
    }
     function onSeletctDetails(Request $request){
      return ProjectModel::where('id','=',$request->id)->get();
    }

}

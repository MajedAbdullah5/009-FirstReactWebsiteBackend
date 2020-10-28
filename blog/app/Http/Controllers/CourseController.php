<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseTableModel;
class CourseController extends Controller
{
function onSelectFour(){
 return CourseTableModel::limit(4)->get();
}
function onSelectDetails(Request $request){
 return CourseTableModel::where('id','=',$request->id)->get();
}
    function onSelectCourse(){
        return CourseTableModel::all();
    }
}

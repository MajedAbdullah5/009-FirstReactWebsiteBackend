<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactTableModel;
class ContactController extends Controller
{
    function onSelectContact(Request $request){
    $name    = $request->input('name');
    $email   = $request->input('email');
    $message = $request->input('msg');
      return $result = ContactTableModel::insert (['name'=>$name,'email'=>$email,'message'=>$message]);

    }
}

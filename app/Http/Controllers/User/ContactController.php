<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
  public function index()
  {
    return view('WU.contact.contact');
  }



 public function confirm(Request $request)
 {

   $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'body'  => 'required',
        ]);

   $inputs = $request->all();
  return view('WU.contact.confirm',[
    'inputs'=>$inputs,
  ]);
 }
 public function send(){
    return view('WU.contact.thanks');
 }
}

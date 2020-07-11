<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{
  public function index()
  {
    $items = About::all();
    return view('WU.about.about',['items' => $items]);
  }
}

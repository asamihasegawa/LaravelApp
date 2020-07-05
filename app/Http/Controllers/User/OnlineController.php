<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnlineController extends Controller
{
  public function index()
  {
    return view('WU.online.online');
  }
}

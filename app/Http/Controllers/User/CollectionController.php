<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
  public function index()
  {
    return view('WU.collection.collection');
  }
}

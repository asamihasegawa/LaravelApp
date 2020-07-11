<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class StockistController extends Controller
{
  public function index()
  {
    $items = post::all();
    return view('WU.stockist.stockist',['items' => $items]);
  }

}

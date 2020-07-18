<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stockist;

class StockistController extends Controller
{
  public function index()
  {
    $items = Stockist::all();
    return view('WU.stockist.stockist',['items' => $items]);
  }

}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
  public function index()
  {
    $items = News::all();
    return view('WU.news.news',['items' => $items]);
  }
}

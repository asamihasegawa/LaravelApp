<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
  public function index()
  {
    return view('WU.sitemap.sitemap');
  }
}

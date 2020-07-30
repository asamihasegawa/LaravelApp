<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use Storage;

class AboutController extends Controller
{
  public function index()
  {
    $img = About::all();
    $is_image = false;
    if (Storage::disk('local')->exists('public/about_images/' )) {
        $is_image = true;
    return view('WU.about.about',['is_image' => $is_image, 'img' => $img]);
   }
  }
}

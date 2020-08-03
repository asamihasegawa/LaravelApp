<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Image;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\TopRequest;

class TopController extends Controller
{
  /*public function index()
  {

    $img = Image::where('type', '1')->get();
    //$img = Image::first()->get();

     $is_image = false;
     if (Storage::disk('local')->exists('public/top_images/' )) {
         $is_image = true;

    return view('WU.top.top',['is_image' => $is_image, 'img' => $img]);

  }
 }
 */

 public function index()
 {
   $img = Image::where('type','1')->orderBy('created_at','desc')->first();
   //$img = Image::where('type','1')->get();

   $is_image = false;
   if (Storage::disk('local')->exists('public/top_images/' )) {
       $is_image = true;

  return view('WU.top.top',['is_image' => $is_image, 'img' => $img]);
  }
 }
}

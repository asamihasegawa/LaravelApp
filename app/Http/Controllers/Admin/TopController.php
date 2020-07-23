<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests\TopRequest;


class TopController extends Controller
{
  public function index()
  {
       $is_image = false;
       if (Storage::disk('local')->exists('public/top_images/' )) {
           $is_image = true;
       }

       return view('admin.top.top', ['is_image' => $is_image]);
   }


  public function store(Request $request)
  {
      $filename = date('Y-m-d');
      $request->photo->storeAs('public/top_images', $filename.'.jpg');

      return redirect('/admin/top')->with('success', '画像を登録しました');
  }
}

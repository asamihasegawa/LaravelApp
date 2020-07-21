<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
  public function index()
  {
       $is_image = false;
       if (Storage::disk('local')->exists('public/post_images/' )) {
           $is_image = true;
       }

       return view('admin.post.index', ['is_image' => $is_image]);
   }


  public function store(PostRequest $request)
  {
      $filename = '123';
      $request->photo->storeAs('public/post_images', $filename. '.jpg');

      return redirect('/admin/post')->with('success', '画像を登録しました');
  }
}

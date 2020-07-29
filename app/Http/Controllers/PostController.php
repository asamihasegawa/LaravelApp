<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests\PostRequest;
use App\Post;


class PostController extends Controller
{
  public function index()
  {

      $img = Post::all();

       $is_image = false;
       if (Storage::disk('local')->exists('public/post_images/' )) {
           $is_image = true;
       }

       return view('admin.post.post', ['is_image' => $is_image, 'img' => $img]);
   }


  public function store(Request $request)
  {
      // ファイル名の生成
      $dtStr = date("YmdHis") . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
      $file_name = $dtStr. '.jpg';

      $img = new Post;
      $img->title = $request->title;
      $img->content = $request->content;
      $img->filename = $file_name;
      $img->save();

      $request->photo->storeAs('public/post_images', $file_name);

      return redirect('/admin/post')->with('success', '登録しました');
  }
}

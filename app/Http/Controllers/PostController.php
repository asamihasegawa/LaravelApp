<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
  public function showCreateForm()
  {
      return view('posts/create');
  }

  public function create(Request $request)
   {
       $post = new Post();
       $post->title = $request->title;
       $post->content = $request->content;
       $post->save();
       return redirect()->route('posts.detail', [
           'id' => $post->id,
       ]);
   }

   public function detail(Post $post)
   {
       return view('posts/detail', [
           'title' => $post->title,
           'content' => $post->content,
           'user_id' => $post->user_id,
       ]);
   }
}

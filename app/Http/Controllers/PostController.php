<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
   public function showCreateForm()
   {
       return view('admin/post/create');
   }
   public function create(Request $request)
   {
       // Postモデルのインスタンスを作成する
       $post = new Post();
       // タイトル
       $post->title = $request->title;
       //コンテンツ
       $post->content = $request->content;
       // インスタンスの状態をデータベースに書き込む
       $post->save();
       //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト
       return redirect()->route('admin.post.detail'
       );
   }
   /**
    * 詳細ページ
    */
   public function detail(Post $post)
   {
       return view('admin/post/create', [
           'title' => $post->title,
           'content' => $post->content,
       ]);
   }
}

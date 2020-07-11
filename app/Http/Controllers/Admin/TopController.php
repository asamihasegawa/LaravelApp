<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Top;
use Storage;
use Illuminate\Foundation\Auth\Admin;
use Illuminate\Support\Facades\Validator;


class TopController extends Controller
{
  public function upload(Request $request){

//Validatorファサードのmakeメソッドの第１引数は、バリデーションを行うデータ。
//第２引数はそのデータに適用するバリデーションルール
      $validator = Validator::make($request->all(), [
          'file' => 'required|max:10240|mimes:jpeg,gif,png'
      ]);

//上記のバリデーションがエラーの場合、ビューにバリデーション情報を渡す
      if ($validator->fails()){
          return back()->withInput()->withErrors($validator);
      }
      $file = $request->file('file');
      $path = Storage::disk('local')->putFile('/', $file, 'public');
//カラムに画像のパスとタイトルを保存
        Top::create([
            'image_file_name' => $path
        ]);

        return redirect('admin/top');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = \App\Top::all();

         $data = [
             'posts' => $posts,
         ];

         return view('admin.top',$data);
    }
}

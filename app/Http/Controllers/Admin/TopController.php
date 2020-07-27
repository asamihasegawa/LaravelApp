<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests\TopRequest;
use App\Image;


class TopController extends Controller
{
  public function index()
  {

      $img = Image::where('type', '1')->get();

       $is_image = false;
       if (Storage::disk('local')->exists('public/top_images/' )) {
           $is_image = true;
       }

       return view('admin.top.top', ['is_image' => $is_image, 'img' => $img]);
   }


  public function store(Request $request)
  {
      // ファイル名の生成
      $dtStr = date("YmdHis") . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
      $file_name = $dtStr. '.jpg';

      $img = new Image;
      $img->type = 1;
      $img->filename = $file_name;
      $img->save();

      $request->photo->storeAs('public/top_images', $file_name);

      return redirect('/admin/top')->with('success', '画像を登録しました');
  }

  /*public function destroy($id)
  {
    $img = Image::find($id)->delete();
    return redirect('/admin/top');
  }*/
}

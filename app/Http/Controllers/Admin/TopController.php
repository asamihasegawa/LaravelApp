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

      $validator = Validator::make($request->all(), [
          'file' => 'required|max:10240|mimes:jpeg,gif,png'
      ]);

      if ($validator->fails()){
          return back()->withInput()->withErrors($validator);
      }
      $file = $request->file('file');
      $path = Storage::disk('local')->putFile('/top_images', $file, 'public');

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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\About;
use Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $img = About::all();

       $is_image = false;
       if (Storage::disk('local')->exists('public/about_images/' )) {
           $is_image = true;
       }

       return view('admin.about.about', ['is_image' => $is_image, 'img' => $img]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $dtStr = date("YmdHis") . substr(explode(".", (microtime(true) . ""))[1], 0, 3);
      $file_name = $dtStr. '.jpg';

      $img = new About;
      $img->body = $request->body;
      $img->filename = $file_name;
      $img->save();

      $request->photo->storeAs('public/about_images', $file_name);

      return redirect('/admin/about')->with('success', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {
      $post = About::find($id);
      $form = $request->all();

      unset($form['_token']);
      $post->body = $request->body;
      $post->save();
      return redirect('/admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $img = About::find($id)->delete();
      return redirect('/admin/about');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OnlineRequest;
use App\Online;
use Storage;

class OnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $img = Online::all();

       $is_image = false;
       if (Storage::disk('local')->exists('public/online_images/' )) {
           $is_image = true;
       }

        return view('admin.online.online', ['is_image' => $is_image, 'img' => $img]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

      $img = new Online;
      $img->goods_id = $request->goods_id;
      $img->name = $request->name;
      $img->price = $request->price;
      $img->filename = $file_name;
      $img->save();

      $request->photo->storeAs('public/online_images', $file_name);

      return redirect('/admin/online')->with('success', '登録しました');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CollectionRequest;
use App\Collection;
use Storage;


class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $img = Collection::all();

       $is_image = false;
       if (Storage::disk('local')->exists('public/collection_images/' )) {
           $is_image = true;
       }

       return view('admin.collection.collection', ['is_image' => $is_image, 'img' => $img]);
    }

    /*public function showCreateForm()
   {
       /*return view('admin/collection/collection');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create(Request $request)
    {
        /*$post = new Collection();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->id = $request->id;
        $post->save();
        return redirect()->route('collection.detail', [
           'id' => $post->id,
       ]);
    }

    public function detail(Post $post)
   {
       return view('admin/collection/detail', [
           'title' => $post->title,
           'body' => $post->body,
       ]);
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

      $img = new Collection;
      $img->title = $request->title;
      $img->body = $request->body;
      $img->filename = $file_name;
      $img->save();

      $request->photo->storeAs('public/collection_images', $file_name);

      return redirect('/admin/collection')->with('success', '登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $img = Collection::find($id);
      return view('admin.collection.detail', ['img' => $img]);
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
      $post = Collection::find($id);
      $form = $request->all();


      unset($form['_token']);
      $post->title = $request->title;
      $post->body = $request->body;
      $post->filename = $request->filename;
      $post->save();
      return redirect('/admin/collection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $img = Collection::find($id)->delete();
      return redirect('/admin/collection');
    }
}

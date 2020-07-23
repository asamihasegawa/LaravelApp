<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Collection;
use Validator;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    public function showCreateForm()
   {
       return view('admin/collection/collection');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = new Collection();
        $post->title = $request->title;
        $post->body = $request->body;
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
        //
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
      $post = Collection::find($id);
      $form = $request->all();


      unset($form['_token']);
      $post->title = $request->title;
      $post->body = $request->body;
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
      $items = Collection::find($id)->delete();
      return redirect('/admin/collection');
    }
}

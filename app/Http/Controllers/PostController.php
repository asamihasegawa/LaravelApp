<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = post::all();
     return view('post.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    //{
        //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = new Post;
     $form = $request->all();

     $rules = [
         'user_id' => 'integer|required',
         'title' => 'required',
         'message' => 'required',
     ];
     $message = [
         'user_id.integer' => 'System Error',
         'user_id.required' => 'System Error',
         'name.required'=> 'nameが入力されていません',
         'tel.required'=> 'telが入力されていません',
         'address.required'=> 'addressが入力されていません'
     ];
     $validator = Validator::make($form, $rules, $message);

     if($validator->fails()){
         return redirect('/admin/stockist')
             ->withErrors($validator)
             ->withInput();
     }else{
         unset($form['_token']);
         $post->user_id = $request->user_id;
         $post->name = $request->name;
         $post->tel = $request->tel;
         $post->address = $request->address;
         $post->save();
         return redirect('/admin/stockist');
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Post::find($id);
      return view('post.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
        //
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $items = Post::find($id)->delete();
      return redirect('/admin/stockist');
    }
}

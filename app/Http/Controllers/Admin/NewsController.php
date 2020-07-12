<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = News::all();
        return view('admin.news.news',['items' => $items]);
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
        $post = new News;
        $form = $request->all();

        $rules = [
          'news_id' => 'required',
          'title' => 'required',
          'body' => 'required',
        ];
        $message = [
          'news_id.required'=>'news_idが入力されていません',
          'title.required'=>'タイトルが入力されていません',
          'body.required'=>'本文が入力されていません'
        ];
        $validator = Validator::make($form,$rules,$message);

        if($validator->fails()){
          return redirect('admin/news')
          ->WithErrors($validator)
          ->WithInput();
        }else{
          unset($form['_token']);
          $post->news_id = $request->news_id;
          $post->title = $request->title;
          $post->body = $request->body;
          $post->save();
          return redirect('admin/news');
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
        $item = News::find($id);
        return view('admin.news.news_show',['item' =>  $item]);
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
        $post = News::find($id);
        $form =$request->all();

        unset($form['_token']);
        $post->title = $request->title;
        $post->body = $request->body;
        $post-save();
        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = News::find($id)->delete();
        return redirect('/admin/news');
    }
}

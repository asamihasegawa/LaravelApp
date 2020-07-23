<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = About::all();
        return view('admin..about.about', ['items' => $items]);
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
     $post = new About;
     $form = $request->all();

     $rules = [
         'body' => 'required',
     ];
     $message = [
         'body.required'=> 'bodyが入力されていません'
     ];
     $validator = Validator::make($form, $rules, $message);

     if($validator->fails()){
         return redirect('/admin/about')
             ->withErrors($validator)
             ->withInput();
     }else{
         unset($form['_token']);
         $post->body = $request->body;
         $post->save();
         return redirect('/admin/about');
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
      $item = About::find($id);
      return view('admin.about.about_show', ['item' => $item]);
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
      $items = About::find($id)->delete();
      return redirect('/admin/about');
    }
}

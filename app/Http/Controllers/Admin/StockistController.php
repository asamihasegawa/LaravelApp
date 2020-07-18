<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stockist;
use Validator;

class StockistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = Stockist::all();
     return view('admin.stockist.index', ['items' => $items]);
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
      $post = new Stockist;
     $form = $request->all();

     $rules = [
         'stockist_posts_id' => 'integer|required',
         'shop_name' => 'required',
         'tel' => 'required',
         'address' => 'required',
     ];
     $message = [
         'stockist_posts_id.integer' => 'System Error',
         'stockist_posts_id.' => 'System Error',
         'shop_name.required'=> 'shop_nameが入力されていません',
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
         $post->stockist_posts_id = $request->stockist_posts_id;
         $post->shop_name = $request->shop_name;
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
      $item = Stockist::find($id);
      return view('admin.stockist.show', ['item' => $item]);
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
    public function update(Request $request, $id)
    {
      $post = Stockist::find($id);
      $form = $request->all();


      unset($form['_token']);
      $post->stockist_posts_id = $request->stockist_posts_id;
      $post->shop_name = $request->shop_name;
      $post->tel = $request->tel;
      $post->address = $request->address;
      $post->save();
      return redirect('/admin/stockist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $items = Stockist::find($id)->delete();
      return redirect('/admin/stockist');
    }
}

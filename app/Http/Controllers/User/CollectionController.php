<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collection;
use Storage;

class CollectionController extends Controller
{
  public function index()
  {
    $img = Collection::all();
    $is_image = false;
    if (Storage::disk('local')->exists('public/collection_images/' )) {
        $is_image = true;
    return view('WU.collection.collection',['is_image' => $is_image, 'img' => $img]);
  }
 }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Top;

class TopController extends Controller
{
  public function input()
    {
        return view('admin.top');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');

            $file_name = basename($path);
            $id = Auth::id();
            $new_image_data = new Top();
            $new_image_data->id = $id;
            $new_image_data->file_name = $file_name;

            $new_image_data->save();

            return redirect('/admin/top');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }

    public function output() {
        $user_id = Auth::id();
        $user_images = Top::whereUser_id($user_id)->get();
        return view('admin.top', ['user_images' => $user_images]);
    }
}

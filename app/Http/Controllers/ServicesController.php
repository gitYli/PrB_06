<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ServicesController extends Controller
{
    public function storeData(Request $request)
    {
        $data= new Services();

        $request->validate([
            'Services_name' => 'required | string',
            'Services_description' => 'required | string',
            'Services_img' => 'required | image | mimes:jpeg,png,jpg,gif,svg | ',
        ]);

        if($request->file('Services_img')){
            $file= $request->file('Services_img');
            $filename= str('Date(').date('YmdHi').str(')-Service(').$request->input('Services_name').str(').').$file->extension();
            $file-> move(public_path('Images'), $filename);
            $data['Services_img']= $filename;
            $data['Services_name']= $request->input('Services_name');
            $data['Services_description']= $request->input('Services_description');
        }
        $data->save();;

        return redirect('/admin/services')->with(['message-success' => 'استلمنا رسالتك']);
    }

    public function update(Request $request, $id)
    {
        $data = Services::findOrFail($id);

        $file = $data->Services_img;
        unlink(public_path('Images/'.$file));

        $request->validate([
            'Services_name' => 'required | string',
            'Services_description' => 'required | string',
            'Services_img' => 'required | image | mimes:jpeg,png,jpg,gif,svg | ',
        ]);

        if($request->file('Services_img')){
            $file= $request->file('Services_img');
            $filename= str('Date(').date('YmdHi').str(')-Service(').$request->input('Services_name').str(').').$file->extension();
            $file-> move(public_path('Images'), $filename);
            $data['Services_img']= $filename;
            $data['Services_name']= $request->input('Services_name');
            $data['Services_description']= $request->input('Services_description');
        }
        $data->save();;

        return redirect('/admin/services')->with(['message-success' => 'استلمنا رسالتك']);
    }

    public function destroy($id) {
        $data = Services::findOrFail($id);

        if ($data) {
            $file = $data->Services_img;
            unlink(public_path('Images/'.$file));
            $data->delete();
            return redirect('/admin/services')->with(['message-danger' => 'استلمنا رسالتك']);
        }else
            return redirect('/admin/services')->with(['message-success' => 'رسالتك']);
    }
}

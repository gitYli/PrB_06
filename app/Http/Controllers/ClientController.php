<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function storeData(Request $request)
    {
        $data= new Clients();

        $request->validate([
            'Client_name' => 'required | string',
            'Client_description' => 'required | string',
            'Client_img' => 'required | image | mimes:jpeg,png,jpg,gif,svg | ',
        ]);

        if($request->file('Client_img')){
            $file= $request->file('Client_img');
            $filename= str('Date(').date('YmdHi').str(')-Client(').$request->input('Client_name').str(').').$file->extension();
            $file-> move(public_path('Images'), $filename);
            $data['Client_img']= $filename;
            $data['Client_name']= $request->input('Client_name');
            $data['Client_description']= $request->input('Client_description');
        }
        $data->save();;

        return redirect('/admin/clients')->with(['message-success' => 'استلمنا رسالتك']);
    }

    public function update(Request $request, $id)
    {
        $data = Clients::findOrFail($id);

        $file = $data->Client_img;
        unlink(public_path('Images/'.$file));

        $request->validate([
            'Client_name' => 'required | string',
            'Client_description' => 'required | string',
            'Client_img' => 'required | image | mimes:jpeg,png,jpg,gif,svg | ',
        ]);

        if($request->file('Client_img')){
            $file= $request->file('Client_img');
            $filename= str('Date(').date('YmdHi').str(')-Client(').$request->input('Client_name').str(').').$file->extension();
            $file-> move(public_path('Images'), $filename);
            $data['Client_img']= $filename;
            $data['Client_name']= $request->input('Client_name');
            $data['Client_description']= $request->input('Client_description');
        }
        $data->save();;

        return redirect('/admin/clients')->with(['message-success' => 'استلمنا رسالتك']);
    }

    public function destroy($id) {
        $data = Clients::findOrFail($id);

        if ($data) {
            $file = $data->Client_img;
            unlink(public_path('Images/'.$file));
            $data->delete();
            return redirect('/admin/clients')->with(['message-danger' => 'استلمنا رسالتك']);
        }else
            return redirect('/admin/clients')->with(['message-success' => 'رسالتك']);
    }
}


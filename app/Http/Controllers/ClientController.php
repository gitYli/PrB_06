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
            $file-> move(public_path('images'), $filename);
            $data['Client_img']= $filename;
            $data['Client_name']= $request->input('Client_name');
            $data['Client_description']= $request->input('Client_description');
        }
        $data->save();;

        return redirect('/admin/clients')->with(['message-success' => 'تم اضافة العميل بنجاح']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Client_name' => 'required | string',
            'Client_description' => 'required | string',
            'Client_img' => 'required | image | mimes:jpeg,png,jpg,gif,svg | ',
        ]);

        $data = Clients::findOrFail($id);

        $file = $data->Client_img;
        unlink(public_path('images/'.$file));

        if($request->file('Client_img')){
            $file= $request->file('Client_img');
            $filename= str('Date(').date('YmdHi').str(')-Client(').$request->input('Client_name').str(').').$file->extension();
            $file-> move(public_path('images'), $filename);
            $data['Client_img']= $filename;
            $data['Client_name']= $request->input('Client_name');
            $data['Client_description']= $request->input('Client_description');
        }
        $data->save();;

        return redirect('/admin/clients')->with(['message-success' => 'تم تعديل بيانات العميل بنجاح']);
    }

    public function destroy($id) {
        $data = Clients::findOrFail($id);

        if ($data) {
            $file = $data->Client_img;
            unlink(public_path('images/'.$file));
            $data->delete();
            return redirect('/admin/clients')->with(['message-danger' => 'تم حذف العميل']);
        }else
            return redirect('/admin/clients')->with(['message-warning' => 'لا يوجد عميل مطابق للبيانات المدخلة']);
    }
}


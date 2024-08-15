<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\User;
use DB;

class ContactController extends Controller
{
    public function storeData(Request $request)
    {
        contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'comment' => $request->input('message'),
        ]);

        return redirect('/#contact')->with(['message-success' => 'استلمنا رسالتك']);
    }

    public function show()
    {
        $data = contact::all();
        return view('admin/contact', compact('data'));
    }

}


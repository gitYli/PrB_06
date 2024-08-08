<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeData(Request $request)
    {
        contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'comment' => $request->input('message'),
        ]);

        return redirect('/q#contact')->with(['message' => 'استلمنا رسالتك']);
    }

}

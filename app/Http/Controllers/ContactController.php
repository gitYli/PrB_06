<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ContactController;
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

        return redirect('/q#contact')->with(['message' => 'استلمنا رسالتك']);
    }
	
	public function show()
    {
        $d = contact::all();  // Fetch all records from the 'contact' table and store them in $d
        return view('Information', compact('d'));  // Pass $d to the view
    }

}


<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function storeData(Request $request)
    {
        Services::create([
            'Services_name' => $request->input('Services_name'),
            'Services_img' => $request->input('Services_img'),
            'Services_description' => $request->input('Services_description'),
        ]);

        return redirect('/admin/dashboard')->with(['message' => 'استلمنا رسالتك']);
    }
}

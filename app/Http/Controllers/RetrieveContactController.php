<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RetrieveContactController extends Controller
{
    public function retrieve()
    {
        $services = DB::table('services')->select('id', 'Services_name', 'Services_img', 'Services_description')->get();
        $clients = DB::table('clients')->select('id', 'Client_name', 'Client_img', 'Client_description')->get();
        return view('Panorama-Q', compact('services', 'clients'));
    }
}

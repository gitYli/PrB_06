<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RetrieveContactController extends Controller
{
    public function index()
    {
        $users = DB::table('contact')->select('name', 'comment')->get();
        return view('contact')->with('users', $users);
    }
}

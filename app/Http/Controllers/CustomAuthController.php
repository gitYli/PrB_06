<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $validator =  $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/services')
                ->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'إسم المستخدم أو كلمة المرور غير صحيحة.';
        return redirect("admin/login")->withErrors($validator);
    }



    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/services')
                ->withSuccess('Signed in');
        }
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function services()
    {
        if(Auth::check()){
            $users = DB::table('services')->select('id', 'Services_name', 'Services_img', 'Services_description')->get();
            return view('admin.services')->with('users', $users);
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }
    public function clients()
    {
        if(Auth::check()){
            $users = DB::table('clients')->select('id', 'Client_name', 'Client_img', 'Client_description')->get();
            return view('admin.clients')->with('users', $users);
        }

        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('admin/login');
    }
}

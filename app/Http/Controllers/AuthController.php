<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
        $data = $request->only('email', 'password');


        if (Auth::attempt($data)) {
            toastr()->success('Login Success !');
            return redirect()->route('posts.index');
        } else {
            return view('backend.auth.fail');
        }
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function showFormRegister()
    {
        return view('backend.auth.register');

    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ]);
        $data = $request->only('name', 'email', 'password', 'avatar');
        $data['password'] = Hash::make($request->password);
        $user = User::query()->create($data);
        toastr()->success('Register Success !');
        return redirect()->route('admin.login');
    }

}

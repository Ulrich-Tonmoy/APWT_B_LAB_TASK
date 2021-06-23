<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(LoginRequest $req)
    {
        $user = User::where('email', $req->email)
            ->where('password', $req->password)
            ->first();

        if ($user) {
            $req->session()->put('type', $user->user_type);
            $req->session()->put('name', $user->full_name);
            return redirect('/home');
        } else {
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
    }
}

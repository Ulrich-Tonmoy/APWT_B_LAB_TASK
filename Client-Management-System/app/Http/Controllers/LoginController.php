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
            ->get();

        if (count($user) > 0) {
            $req->session()->put('type', $user[0]->type, 'name', $user[0]->name);
            return redirect('/home');
        } else {
            $req->session()->flash('msg', 'invaild username or password');
            return redirect('/login');
        }
    }
}

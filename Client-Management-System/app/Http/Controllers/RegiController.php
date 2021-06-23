<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegiRequest;
use App\Models\User;

class RegiController extends Controller
{
    public function index()
    {
        return view('regi.index');
    }

    public function verify(RegiRequest $req)
    {
        $user = User::where('email', $req->email)
            ->first();

        if ($user) {
            $req->session()->flash('msg', 'email already exists');
            return redirect('/registration');
        } else {
            $user = new User;
            $user->full_name = $req->name;
            $user->password = $req->password;
            $user->email = $req->email;
            $user->country = $req->country;
            $user->city = $req->city;
            $user->phone = $req->phone;
            $user->company_name = $req->company_name;
            $user->user_type = $req->user_type;
            $user->save();
            $req->session()->flash('msg', 'user registered successfully');
            return redirect()->route('login.index');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class SecurityController extends Controller
{
    public function formLogin()
    {
        return view("form-login");
    }

    public function prosesLogin(Request $request)
    {
        $name = $request->get("name");
        $password = $request->get("password");

        $user = User::where('name', $name)->where("password", $password)->first();
        if ($user != null) { // Jika Ada atau jika tidak kosong
            Auth::login($user); // login user
            return redirect("tampil-semua-user");
        } else { // jika tidak ada.
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    }



}
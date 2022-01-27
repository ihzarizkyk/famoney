<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["guest"])->except("logout");
    }

    public function login()
    {
        return view("auth.login");
    }

    public function postlogin(Request $req)
    {
        $req->validate([
            "name" => "required",
            "password" => "required"]);

        if(Auth::attempt(["name" => $req->name,"password" => $req->password]))
        {
            $req->session()->regenerate();
            return redirect("/dashboard");
        }else{
            return redirect()->back();
        }

    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect("/auth/login");
    }
}

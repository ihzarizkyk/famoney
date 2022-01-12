<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function postregister(Request $req)
    {
        $req->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required"]);

        if(Auth::check())
        {
            return redirect()->back();
        }else{
            $usr = User::create([
                "name" => $req->name,
                "emai" => $req->email,
                "password" => Hash::make($req->password)]);
            $req->session()->regenerate();

            Auth::login($usr);
            
            return redirect("dashboard.index");
        }
    }
}

<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function __construct()
    {
        return $this->middleware(['guest']);
    }

    public function register()
    {
        return view("auth.register");
    }

    public function postregister(Request $req)
    {
        $req->validate([
            "name" => "required|unique:users,name",
            "email" => "required|unique:users,email",
            "password" => "required"]);

            $usr = User::create([
                "name" => $req->name,
                "email" => $req->email,
                "password" => Hash::make($req->password)]);
            $req->session()->regenerate();

            Auth::login($usr);
            
            return redirect("/dashboard");
    }
}

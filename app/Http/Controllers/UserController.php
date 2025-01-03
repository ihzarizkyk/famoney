<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        if(Auth::user()->role == "admin")
        {
            $user = User::all();
            return view("dashboard.user.index",compact('user'));
        }else{
            return abort(403);
        }
    }

    public function admin(Request $req)
    {
        if(Auth::user()->role == "admin")
        {

        $user = User::findOrFail($req->id);
        $user->role = "admin";
        $user->save();
        return back();

        }else{
            return abort(403);
        }
    }

    public function user(Request $req)
    {
        if(Auth::user()->role == "admin")
        {
          
        $user = User::findOrFail($req->id);
        $user->role = "user";
        $user->save();
        return back();

        }else{
            return abort(403);
        }
    }

    public function destroy($id)
    {
        if(Auth::user()->role == "admin")
        {
          
        $user = User::findOrFail($id);
        $user->delete();
        return back();

        }else{
            return abort(403);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecaptController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function report(Request $req, $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageMoneyController extends Controller
{
    public function index()
    {
        return view("dashboard.user.index");
    }

    public function create()
    {
        return view("dashboard.user.create");
    }

    public function store(Request $req)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $req)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}


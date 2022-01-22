<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageMoneyController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        return view("dashboard.money.index");
    }

    public function create()
    {
        return view("dashboard.money.create");
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


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\User;
use PDF;

class RecaptController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $money = Money::with('category')->get();
        return view("dashboard.report.index",compact('money'));
    }

    public function report(Request $req)
    {
        $money = Money::findOrFail($req->id);
        $pdf = PDF::loadview('dashboard.report.pdf',['money' => $money]);
        return $pdf->stream();
    }

    public function reportAll(Request $req)
    {
        $money = Money::with('category')->get();
        $pdf = PDF::loadview('dashboard.report.pdf',['money' => $money]);
        return $pdf->stream();
    }
}

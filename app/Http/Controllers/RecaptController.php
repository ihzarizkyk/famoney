<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDF;

class RecaptController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $money = Auth::user()->money()->with('category')->get();
        return view("dashboard.report.index",compact('money'));
    }

    public function reportAll(Request $req)
    {
        $money = Auth::user()->money()->with('category')->get();
        $pemasukan = Auth::user()->money()->where("category_id","=",1)->sum('nominal');
        $pengeluaran = Auth::user()->money()->where("category_id","=",2)->sum('nominal');
        $total = $pemasukan - $pengeluaran;
        $date = now();
        $pdf = PDF::loadview('dashboard.report.pdf',compact('money','date','pemasukan','pengeluaran','total'));
        return $pdf->stream();
    }
}

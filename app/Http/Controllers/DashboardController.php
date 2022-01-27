<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;

class DashboardController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $pemasukan = Money::where("category_id","=",1)->sum("nominal");
        $pengeluaran = Money::where("category_id","=",2)->sum("nominal");
        $count = $pemasukan - $pengeluaran;
        return view("dashboard.index",compact('pemasukan','pengeluaran','count'));
    }
}

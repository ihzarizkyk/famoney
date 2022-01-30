<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $pemasukan = Auth::user()->money()->where("category_id","=",1)->sum("nominal");
        $pengeluaran = Auth::user()->money()->where("category_id","=",2)->sum("nominal");
        $count = $pemasukan - $pengeluaran;
        $start = Auth::user()->money()->orderBy("created_at","ASC")->limit(1)->get();
        return view("dashboard.index",compact('pemasukan','pengeluaran','count','start'));
    }
}

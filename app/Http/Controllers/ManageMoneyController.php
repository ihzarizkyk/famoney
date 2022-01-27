<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Money;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ManageMoneyController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {
        $money = Auth::user()->money()->with('category')->get();
        $pemasukan = Auth::user()->money()->where('category_id',"=",1)->sum('nominal');
        $pengeluaran = Auth::user()->money()->where('category_id',"=",2)->sum('nominal');
        $total = $pemasukan - $pengeluaran;
        $limit = $pemasukan * 80/100;
        return view("dashboard.money.index",compact('money','pemasukan','pengeluaran','limit','total'));
    }

    public function create()
    {
        $category = Category::all();
        return view("dashboard.money.create",compact('category'));
    }

    public function store(Request $req)
    {
        $req->validate([
            "nominal" => "required|numeric"]);

        $money = new Money;
        $money->user_id = Auth::id();
        $money->description = $req->description;
        $money->nominal = $req->nominal;
        $money->category_id = $req->category;
        $money->save();

        return redirect("/dashboard/mymoney")->with("success","Uang Berhasil Disimpan!");
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
        $money = Money::findOrFail($id);
        $money->delete();
        return redirect()->back()->with(["delete" => "berhasil dihapus!"]);
    }

}


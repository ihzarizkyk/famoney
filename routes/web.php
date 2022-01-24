<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageMoneyController;
use App\Http\Controllers\RecaptController;

Route::get("/",[HomeController::class,'index']);

Route::prefix("auth")->group(function(){

    // Login
    Route::get("/login",[LoginController::class,'login']);
    Route::post("/postlogin",[LoginController::class,'postlogin'])->name("post.login");
    Route::get("/logout",[LoginController::class,'logout'])->name("logout");

    // Register
    Route::get("/register",[RegisterController::class,'register']);
    Route::post("/postregister",[RegisterController::class,'postregister'])->name("post.register");
});

Route::prefix("dashboard")->group(function(){

    // Dashboard
    Route::get("/",[DashboardController::class,"index"])->name("dashboard");

    // Manage Money
    Route::get("/mymoney",[ManageMoneyController::class,"index"]);
    Route::get("/mymoney/new",[ManageMoneyController::class,"create"]);
    Route::post("/mymoney/create",[ManageMoneyController::class,"store"]);
    Route::get("/mymoney/{id}/edit",[ManageMoneyController::class,"edit"]);
    Route::get("/mymoney/{id}/delete",[ManageMoneyController::class,"destroy"]);

    // Recapt Report
    Route::get("/mymoney/report",[RecaptController::class,"report"]);
});
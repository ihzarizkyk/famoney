<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageMoneyController;
use App\Http\Controllers\RecaptController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get("/",[HomeController::class,'index']);

Route::prefix("auth")->group(function(){

    // Login
    Route::get("/login",[LoginController::class,'login'])->name('login');
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
    Route::get("/mymoney/new",[ManageMoneyController::class,"create"])->name('money.new');
    Route::post("/mymoney/create",[ManageMoneyController::class,"store"])->name('money.store');
    Route::get("/mymoney/{id}/edit",[ManageMoneyController::class,"edit"]);
    Route::get("/mymoney/{id}/delete",[ManageMoneyController::class,"destroy"]);

    // Recapt Report
    // Route::get("/report/{id}",[RecaptController::class,"report"]);
    Route::get("/report/all",[RecaptController::class,"reportAll"]);
    Route::get("/report",[RecaptController::class,"index"]);

    // Profile
    Route::get('/myprofile',[ProfileController::class,'index']);

    // User
    Route::get("/user",[UserController::class,'index']);
    Route::get("/user/{id}/delete",[UserController::class,'destroy']);
    Route::get("/user/{id}/admin",[UserController::class,'admin']);
    Route::get("/user/{id}/user",[UserController::class,'user']);
});
<?php

use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get("/user/login",function(){
    return view("pages.login");
})->name("login")->middleware("guest");

Route::post("/user/sign-in",[UserController::class, "login"]);
Route::get("/user/logout",[UserController::class,"logout"]);
// Route::resource("/user",UserController::class);
Route::post("/email/verification",[UserController::class,"verifyOtpCreate"]);
Route::post("/verify/otp",[UserController::class,"verifyOtpVerify"]);
Route::get("/user/create",[UserController::class,"create"]);
Route::get("/user/store",[UserController::class,"store"]);
Route::get("/blogs",function (){
    return view("pages.blogs");
});

Route::get("/blogs/{id}",function (int $id){
    return view("pages.blog")->with("id",$id);
});

Route::get("/contact-me",function(){
    return view("pages.contact_me");
});
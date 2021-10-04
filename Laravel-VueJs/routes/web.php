<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/register',function(){
    return view('layouts.auth.register');
});
Route::get('/login',function(){
    return view('layouts.auth.login');
});

Route::post('register_test', [UserController::class,'store'])->name('register.store');
Route::post('/login',[UserController::class,'login']);
Route::get('/home',[UserController::class,'index']);

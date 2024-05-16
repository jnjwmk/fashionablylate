<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ThanksController;
use Illuminate\Support\Facades\Route;

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


// register画面を表示
Route::get('/register',[RegisterController::class, 'register']);
//データ受け取り、表示
Route::post('/register',[RegisterController::class,'create']);
// dbに作成
Route::post('/register',[RegisterController::class, 'store']);

// login画面を表示
Route::get('/login',[LoginController::class,'index']);
//
Route::post('/login',[LoginController::class,'store']);

// 管理画面を表示
Route::get('/admin', [AdminController::class, 'admin']);

//コンタクト画面を表示
Route::get('/contact',[ContactController::class,'contact']);

// データ挿入
Route::post('/contact',[ContactController::class,'create']);
//contactバリデーション
Route::post('/contact',[ContactController::class,'store']);

// 確認画面を押した時
Route::post('/confirm', [ConfirmController::class, 'confirm']);


// thanks画面表示
Route::get('/thanks',[ThanksController::class,'thanks']);


// Route::post('/confirm',[ContactController::class,'confirm']);

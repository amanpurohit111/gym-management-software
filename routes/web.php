<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TrainerController;
use Faker\Provider\ar_EG\Payment;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('members', MemberController::class)->middleware('auth');
Route::resource('plans', PlanController::class)->middleware('auth');
Route::get('/payment/{member_id}',[PaymentController::class,'create'])->middleware('auth');
Route::get('/getplandetail/{plan_id}',[PaymentController::class,'getplandetail'])->middleware('auth');
Route::get('/getslip/{id}',[PaymentController::class,'getslip'])->middleware('auth');
Route::post('/payment',[PaymentController::class,'store'])->middleware('auth');
Route::resource('trainers', TrainerController::class)->middleware('auth');

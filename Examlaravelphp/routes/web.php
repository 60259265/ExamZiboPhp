<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TemoignageController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/{name}',[HomeController::class,'index']);
Route::get('/login',[AuthController::class,'getLoginForm'])->name('login');
Route::get('/register',[AuthController::class,'getRegisterForm']);
Route::post('/login',[AuthController::class,'login'])->name('authentification.login');
Route::post('/register',[AuthController::class,'register'])->name('authentification.register');


Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
Route::get('/add-contact',[ContactController::class,'create'])->name('contact.create');
Route::get('edit-contact/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::put('update-contact/{id}',[ContactController::class,'update'])->name('contact.update');
Route::get('delete-contact/{id}',[ContactController::class,'destroy'])->name('contact.delete');

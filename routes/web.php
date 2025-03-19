<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class, 'index'])->name('home_page');
Route::get('/contact-us',[PageController::class,'contact'])->name('contact_page');
Route::post('/contact-action',[PageController::class,'contactAction'])->name('contact.action');
Route::get('/history',[PageController::class,'history'])->name('history_page');
Route::get('/majors',[PageController::class,'majors'])->name('majors_page');
Route::get('/login',[PageController::class,'login'])->name('login_page');
Route::get('/register',[PageController::class,'register'])->name('register_page');

<?php

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

// Route::get('/', function () {return view('frontPage.index');});
// Route::get('/frontPage.index', function () {return view('about');});

Route::get('/',[App\Http\Controllers\FrontPageController::class,'index'])->name('paak.index');
Route::get('/about',[App\Http\Controllers\FrontPageController::class,'about'])->name('paak.about');
Route::get('/contacts',[App\Http\Controllers\FrontPageController::class,'contacts'])->name('paak.contacts');
Route::get('/news',[App\Http\Controllers\FrontPageController::class,'news'])->name('paak.news');
Route::get('/home',[App\Http\Controllers\FrontPageController::class,'home'])->name('paak.home');
Route::get('/services',[App\Http\Controllers\FrontPageController::class,'services'])->name('paak.services');

Route::post('/paas/employee/store',[App\Http\Controllers\EmployeeController::class,'store'])->name('paak.employee.store');


    
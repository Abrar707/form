<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbrarController;
use App\Http\Controllers\AliController;
use App\Http\Controllers\AdmissionController;
use  App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsamaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

/*Route::get('/',[EmployeController::class,'index']);
Route::get('/view',[EmployeController::class,'view']);
Route::get('/delete/{id}',[EmployeController::class,'delete'])->name('data.delete');
Route::get('/edit/{id}',[EmployeController::class,'eidt'])->name('data.edit');
Route::get('/create/{id}',[EmployeController::class,'create'])->name('data.create');
Route::post('/store',[EmployeController::class,'store']);*/

Route::get('/welcome', function () {
   return view('welcome');
});

Route::group([],function(){
    Route::get('/',[AbrarController::class,'index']);
    Route::get('/trash',[AbrarController::class,'trash']);
    Route::get('/view',[AbrarController::class,'view']);
    Route::get('/delete/{id}',[AbrarController::class,'delete'])->name('data.delete');
    Route::get('/force_delete/{id}',[AbrarController::class,'force_delete'])->name('data.force_delete');
    Route::get('/restore/{id}',[AbrarController::class,'restore'])->name('data.restore');
    Route::get('/create',[AbrarController::class,'create'])->name('create');
    Route::get('/edit/{id}',[AbrarController::class,'edit'])->name('data.edit');
    Route::post('/update/{id}',[AbrarController::class,'update'])->name('data.update');
    Route::post('/store',[AbrarController::class,'store']);
});
// Route::get('get-all-session',function(){
//     $session=session()-all();
//     p($session);
// });
// Route::get('/ali',[AliController::class,'index']);
// Route::get('/student',[StudentController::class,'index']);
// Route::post('/student/store',[StudentController::class,'store']);
// Route::get('/student/view',[StudentController::class,'view']);
// Route::get('/student/delete/{id}',[StudentController::class,'delete'])->name('data.delete');
// Route::get('/student/create',[StudentController::class,'create'])->name('data.create');
// Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('data.edit');
// Route::get('/student/update/{id}',[StudentController::class,'update'])->name('data.update');

//Route::get('/ali/delete/{id}',[AliController::class,'delete'])->name('data.delete');
//Route::get('/ali/view',[AliController::class,'view']);
//Route::post('/store',[AliController::class,'store']);
//Route::get('/',[AdmissionController::class,'index']);
//Route::get('/view',[AdmissionController::class,'view']);
//Route::get('/delete/{id}',[AdmissionController::class,'delete'])->name('data.delete');
//Route::post('/store',[AdmissionController::class,'store']);
/*Route::get('/',[RegisterController::class,'index']);
Route::get('/view',[RegisterController::class,'view']);
Route::get('/delete/{id}',[RegisterController::class,'delete'])->name('data.delete');
Route::get('/edit/{id}',[RegisterController::class,'edit'])->name('data.edit');
Route::get('/update/{id}',[RegisterController::class,'update'])->name('data.update');
Route::get('/create/{id}',[RegisterController::class,'create'])->name('data.create');
//Route::post('/store',[RegisterController::class,'store']);*/
// Route::get('/',[UsamaController::class,'index']);
// Route::post('/store',[UsamaController::class,'store']);
// Route::get('/view',[UsamaController::class,'view']);
// Route::get('/delete/{id}',[UsamaController::class,'delete'])->name('data.delete');
// Route::get('/create',[UsamaController::class,'create'])->name('data.create');
// Route::get('/edit/{id}',[UsamaController::class,'edit'])->name('data.edit');
// Route::post('/update/{id}',[UsamaController::class,'update'])->name('data.update');


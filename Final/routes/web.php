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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [StudentController::class, 'index'])->name('Student.index');
Route::get('/createnewstudent', [StudentController::class, 'addStudent'])->name('Student.createnewstudent');
Route::post('/save', [StudentController::class, 'save'])->name('Student.save');

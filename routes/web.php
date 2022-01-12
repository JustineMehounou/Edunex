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

Route::get('index', function () {
    return view('fontend/index');
});
Route::get('freecourse', function () {
    return view('fontend/freeCourse');
});
Route::get('paidcourse', function () {
    return view('fontend/paidCourse');
});
Route::get('aboutus', function () {
    return view('fontend/aboutUs');
});
Route::get('login', function () {
    return view('fontend/logIn');
});
Route::get('signup', function () {
    return view('fontend/signUp');
});
Route::get('accueilcours', function () {
    return view('fontend/accueilCours');
});




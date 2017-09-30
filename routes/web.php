<?php

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


Route::get('/about', function () {
    return view('about');
});

Route::resource('/thesis', 'ThesisController');
// Route::get('/borrower/register', 'BorrowerController@register');
Route::get('/borrower/history', 'BorrowerController@history');
Route::resource('/supervisor', 'SupervisorController');
Route::resource('/borrower', 'BorrowerController');

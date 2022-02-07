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
    return view('main.main');
});

Route::get('/branch-one', function () {
    return view('branchOne.branch_one');

});

Route::get('/branch-two', function () {
    return view('branchTwo.branch_two');
});

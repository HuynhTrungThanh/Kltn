<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/welcome', function () {
    return view('welcome');
});
//Flower store
Route::get('/', function () {
    return view('store/home_page');
});

//Login-register
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
//---------------------------------ADMIN----------------------------------------------//

Route::get('/admin', function () {
    return view('admin/dashboard');
});

//DANH MUC
Route::get('admin/danhmuc', 'DanhmucController@index');


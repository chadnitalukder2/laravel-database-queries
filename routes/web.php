<?php

use Illuminate\Support\Facades\DB;
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
    
    $user = DB::select('select * from users where id = ?', [1]);
   // $users = DB::connection('sqlite')->select('select * from users');

     dump("mysql", $user);
    // dump( "sqlite" , $users);

    return view('welcome');
});

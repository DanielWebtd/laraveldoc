<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

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

Route::get('query-builder', function() {
    
    $id = DB::table('users')->insertGetId([
        'name' => 'WEBTD',
        'email' => 'tinajero2@webtd.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'remember_token' => null,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return 'ok';
});

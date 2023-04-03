<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('email-test', function(){

    $details['email'] = 'jaymin@gmail.com';

    dispatch(new App\Jobs\SendEmailJob($details));

    dd('done');
});

Route::get('/', function () {
    return view('welcome');
});

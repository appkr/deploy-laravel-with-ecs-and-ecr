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
    return response()->json([
        'HOST' => gethostname(),
        'APP_ENV' => env('APP_ENV', 'local'),
        'APP_DEBUG' => env('APP_DEBUG', 'true'),
        'APP_VERSION' => trim(exec('git log --pretty="%h" -n1 HEAD')),
        'APP_URL' => Request::getHttpHost(),
        'DB_CONNECTION' => env('DB_CONNECTION', 'mysql'),
    ]);

    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Blade;


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

Route::view('/', 'welcome')->name('home');

Route::get('/debug-manifest', function () {
    return response()->json(Vite::manifest());
});

Route::get('/debug-vite', function () {
    $html = Blade::render('@vite(["resources/sass/app.scss","resources/js/app.js"])');
    return response($html);
});
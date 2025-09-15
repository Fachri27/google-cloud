<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;



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
    try {
        $path = public_path('build/manifest.json');

        if (!File::exists($path)) {
            return response()->json([
                'error' => 'manifest.json tidak ditemukan',
                'path' => $path
            ], 500);
        }

        $manifest = json_decode(File::get($path), true);

        return response()->json([
            'success' => true,
            'path' => $path,
            'manifest' => $manifest,
            'vite' => Vite::asset('resources/js/app.js')
        ]);
    } catch (\Throwable $e) {
        return response()->json([
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
});

Route::get('/debug-vite', function () {
    $html = Blade::render('@vite(["resources/sass/app.scss","resources/js/app.js"])');
    return response($html);
});
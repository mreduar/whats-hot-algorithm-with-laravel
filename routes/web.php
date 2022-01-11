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
    return \App\Models\Video::orderByRaw('
        LOG10(ABS(thumbs_up - thumbs_down) + 1) *
        SIGN(thumbs_up - thumbs_down) +
        (UNIX_TIMESTAMP(created_at) / 300000) DESC
    ')->limit(100)->get();
});

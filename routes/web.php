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
    return view('menu');
});

Route::get('/kaiin', function () {
    return view('kaiin');
});

Route::get('/touroku/con', function () {
    return view('touroku_con');
});

Route::get('/touroku/edit', function () {
    return view('touroku_edit');
});

Route::get('/nyuukosaki', function () {
    return view('nyuukosaki');
});

Route::get('/shouhin', function () {
    return view('shouhin');
});

Route::get('/zaiko', function () {
    return view('zaiko');
});

Route::get('/nyuuko', function () {
    return view('nyuuko');
});

Route::get('/shukko', function () {
    return view('shukko');
});

Route::get('/chuumon', function () {
    return view('chuumon');
});

Route::get('/uriage/1', function () {
    return view('uriage_1');
});

Route::get('/uriage/2', function () {
    return view('uriage_2');
});

Route::get('/uriage/3', function () {
    return view('uriage_3');
});

Route::get('/uriage/4', function () {
    return view('uriage_4');
});

Route::get('/uriage/5', function () {
    return view('uriage_5');
});

Route::get('/uriage', function () {
    return view('uriage_main');
});

Route::get('/hacchuu', function () {
    return view('hacchuu');
});

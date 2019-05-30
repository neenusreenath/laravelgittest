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
    return view('layouts.base');
});


Route::get('/phone', function () {
    return view('phoneconsult');
});
Route::get('/year', function () {
    return view('yearly');
});
Route::get('/luck', function () {
    return view('lucky');
});
Route::get('/marriage', function () {
    return view('marriage');
});
Route::get('/health', function () {
    return view('health');
});
Route::get('/child', function () {
    return view('child');
});
Route::get('/vasthu', function () {
    return view('vasthu');
});
Route::get('/numerology', function () {
    return view('numerology');
});
Route::get('/person', function () {
    return view('personalised');
});
Route::get('/match', function () {
    return view('match');
});
Route::get('/relationship', function () {
    return view('relationship');
});
Route::get('/wealth', function () {
    return view('wealth');
});
Route::get('/germ', function () {
    return view('germ');
});
Route::get('/death', function () {
    return view('death');
});
Route::get('/muhoorthams', function () {
    return view('muhoorthams');
});
Route::get('/business', function () {
    return view('business');
});
Route::get('/gemremedy', function () {
    return view('gemremedy');
});
Route::get('/rudraksharemedy', function () {
    return view('rudraksharemedy');
});
Route::get('/yanthraremedy', function () {
    return view('yanthraremedy');
});
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
$data=array(
    'navItems'=> ['breakfast', 'lunch', 'dinner', 'snack']
);


Route::get('/', function () {
    return view('pages.home')->with('activeRoute', 'breakfast');;
});

Route::get('/breakfast', function () {
    return view('pages.home')->with('activeRoute', 'breakfast');
});

Route::get('/lunch', function () {
    return view('pages.home')->with('activeRoute', 'lunch');
});

Route::get('/dinner', function () {
    return view('pages.home')->with('activeRoute', 'dinner');
});

Route::get('/snack', function () {
    return view('pages.home')->with('activeRoute', 'snack');
});
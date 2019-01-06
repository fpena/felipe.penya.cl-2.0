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
    return view('welcome');
})->middleware('locale');

Route::get('locale/{locale}', function ($locale) {
    $validLocale = in_array($locale, ['en', 'es']);

    if ($validLocale) {
        Session::put('locale', $locale);
    }

    return back();

})->middleware('locale')->name('locale');

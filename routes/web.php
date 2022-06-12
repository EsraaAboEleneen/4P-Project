<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect'
        , 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/test',function (){
        return view('home');
    });
});
Route::get('/', function () {
    return view('welcome');

});
Auth::routes();

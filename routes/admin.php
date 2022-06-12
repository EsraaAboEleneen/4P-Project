<?php
namespace App\Http\Middleware;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect' , 'localizationRedirect', 'localeViewPath']
],
    function () {
    Route::get('/admin',function (){
        return view('layouts.app');
    });
    Route::get('/try',function (){
        return dd(view('home'));
    });
    Route::resource('/admin/blogs','BlogController');
    Route::resource('/admin/benefits','BenefitController');
    Route::resource('/admin/feedbacks','FeedbackController');
    Route::resource('/admin/contact','ContactController');
    Route::resource('/admin/about','AboutController');
    Route::resource('/admin/latest','LatestController');
    Route::resource('/admin/service','ServiceController');
    Route::resource('/admin/package','PackageController');
});






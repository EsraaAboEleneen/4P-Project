<?php
use Illuminate\Support\Facades\Route;
Route::get('/admin',function (){
    return view('layouts.app');
});
Route::resource('/admin/blogs','BlogController');
Route::resource('/admin/benefits','BenefitController');
Route::resource('/admin/feedbacks','FeedbackController');
Route::resource('/admin/contact','ContactController');
Route::resource('/admin/about','AboutController');
Route::resource('/admin/latest','LatestController');
Route::resource('/admin/service','ServiceController');
Route::resource('/admin/package','PackageController');


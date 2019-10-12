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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'LandingController@index');
Route::get('/contact', 'LandingController@contact');

Route::get('/robots.txt', 'RobotsController@index');
Route::get('/sitemap.xml', 'SitemapController@index');
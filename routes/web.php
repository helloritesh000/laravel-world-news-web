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
    return view('welcome');
});

Route::get('/home', 'HomeController@Index')->name('home');
Route::get('/home/search/{keyword}', 'HomeController@GetTopKeyWordAllNewsByKeyword')->name('search');
Route::get('/home/list', 'HomeController@List')->name('list');
Route::post('/home/keyword-search', 'HomeController@universalsearch')->name('universalsearch');
Route::post('/home/updateDynamicView', 'HomeController@updateDynamicView')->name('updateDynamicView');
Route::post('/home/dynamicviewnewsdetail', 'HomeController@dynamicviewnewsdetail')->name('dynamicviewnewsdetail');
Route::post('/home/dynamicHeaderDropdownNews', 'HomeController@dynamicHeaderDropdownNews')->name('dynamicHeaderDropdownNews');
Route::get('/home/states', 'HomeController@states')->name('states');
Route::get('/home/contact', 'HomeController@contact')->name('contact');
Route::post('/home/contact', 'HomeController@contact')->name('contact');

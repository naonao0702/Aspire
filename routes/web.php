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
    return view('standard.my-page');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'standard\MypageController@index');
    Route::get('/lesson-list', 'standard\LessonListController@index');
    Route::get('/lesson-detail/{language_data}', 'standard\LessonDetailController@index');
    Route::get('/lesson-most-detail/{language_id?}', 'standard\LessonMostDetailController@index');
    Route::get('/lesson-item/{language_id?}/{chapter_num?}', 'standard\ChapterItemsController@index')->name('lesson-item');
    Route::get('/lesson-item-complete/{item_id?}', 'standard\CompleteController@complete');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

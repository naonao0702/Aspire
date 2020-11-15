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

// Route::get('/', function () {
//     return view('standard.my-page');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'DynamicController@mypage');
    Route::get('/lesson-list', 'DynamicController@index');
    Route::get('/lesson-detail/{language_data}', 'DynamicController@lessonDetail');
    Route::get('/lesson-most-detail/{language_id?}', 'Standard\LessonMostDetailController@index');
    Route::get('/lesson-item/{language_id?}/{chapter_num?}', 'DynamicController@lessonItem')->name('lesson-item');
    Route::get('/lesson-item-complete/{item_id?}', 'Standard\CompleteController@complete');
    Route::get('/lesson-item-not-complete/{language_id?}/{chapter_num?}/{chapter_item_num?}', 'Standard\CompleteController@notcomplete');
    Route::get('lesson-item-all/{language_id?}/{chapter_num?}', 'Standard\CompleteController@all');
    Route::get('lesson-item-not-all/{language_id?}/{chapter_num?}', 'Standard\CompleteController@notall');
    Route::post('/clear', 'Standard\LessonListController@clear');
});

// test

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    Route::get('/', 'Standard\MypageController@index');
    Route::get('/lesson-list', 'Standard\LessonListController@index');
    Route::get('/lesson-detail/{language_data}', 'Standard\LessonDetailController@index');
    Route::get('/lesson-most-detail/{language_id?}', 'Standard\LessonMostDetailController@index');
    Route::get('/lesson-item/{language_id?}/{chapter_num?}', 'Standard\ChapterItemsController@index')->name('lesson-item');
    Route::get('/lesson-item-complete/{item_id?}', 'standard\CompleteController@complete');
    Route::get('/lesson-item-not-complete/{language_id?}/{chapter_num?}/{chapter_item_num?}', 'Standard\CompleteController@notcomplete');
    Route::get('/lesson-item-all-complete/{language_id?}/{chapter_num?}', 'Standard\AllItemController@all_clear');
    Route::get('//lesson-item-all-not-complete/{language_id?}/{chapter_num?}', 'Standard\AllItemController@all_not_clear');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('mentors', '\App\Http\Controllers\MentorController@index');
Route::get('mentors/{id}', '\App\Http\Controllers\MentorController@show');
Route::post('mentors', '\App\Http\Controllers\MentorController@create');
Route::put('mentors/{id}', '\App\Http\Controllers\MentorController@update');
Route::delete('mentors/{id}', '\App\Http\Controllers\MentorController@destroy');

Route::get('courses', '\App\Http\Controllers\CourseController@index');
Route::get('courses/{id}', '\App\Http\Controllers\CourseController@show');
Route::post('courses', '\App\Http\Controllers\CourseController@create');
Route::put('courses/{id}', '\App\Http\Controllers\CourseController@update');
Route::delete('courses/{id}', '\App\Http\Controllers\CourseController@destroy');

Route::get('chapters', '\App\Http\Controllers\ChapterController@index');
Route::get('chapters/{id}', '\App\Http\Controllers\ChapterController@show');
Route::post('chapters', '\App\Http\Controllers\ChapterController@create');
Route::put('chapters/{id}', '\App\Http\Controllers\ChapterController@update');
Route::delete('chapters/{id}', '\App\Http\Controllers\ChapterController@destroy');

Route::get('lessons', '\App\Http\Controllers\LessonController@index');
Route::get('lessons/{id}', '\App\Http\Controllers\LessonController@show');
Route::post('lessons', '\App\Http\Controllers\LessonController@create');
Route::put('lessons/{id}', '\App\Http\Controllers\LessonController@update');
Route::delete('lessons/{id}', '\App\Http\Controllers\LessonController@destroy');

Route::post('image-courses', '\App\Http\Controllers\ImageCourseController@create');
Route::delete('image-courses/{id}', '\App\Http\Controllers\ImageCourseController@destroy');

Route::get('my-courses', '\App\Http\Controllers\MyCourseController@index');
Route::post('my-courses', '\App\Http\Controllers\MyCourseController@create');
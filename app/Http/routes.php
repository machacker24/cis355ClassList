<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::model('assignments', 'Assignment');
Route::model('lessons', 'Lesson');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lessons', 'LessonController');
Route::resource('lessons.assignments', 'AssignmentController');
//Route::resource('Assignments', 'AssignmentController');

Route::bind('assignments', function($value, $route) {
	return App\Assignment::whereSlug($value)->first();
});
Route::bind('lessons', function($value, $route) {
	return App\Lesson::whereSlug($value)->first();
});
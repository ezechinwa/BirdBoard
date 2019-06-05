<?php



Route::get('/', function () {
    return view('welcome');
});


Route::post('/projects', 'ProjectsController@store')->middleware('auth');

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{project}', 'ProjectsController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

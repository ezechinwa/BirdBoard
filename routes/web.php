<?php



Route::get('/', function () {
    return view('welcome');
});


Route::post('/projects', 'ProjectsController@store');

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{project}', 'ProjectsController@show');

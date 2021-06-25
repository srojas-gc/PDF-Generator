<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/presupuesto-pdf/{id}', 'TaskController@exportPDF')->name('exportPDF');

//Edicion de contenido
Route::get('/content-edit/{id}', 'TaskController@contentEdit')->name('content.edit');
Route::put('/content-update/{task}', 'TaskController@contentUpdate')->name('content.update');

Route::resource('tasks', 'TaskController');

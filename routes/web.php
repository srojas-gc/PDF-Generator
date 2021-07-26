<?php

// Route::get('/', function () {
//     return view('auth.login');
// });


// Auth::routes();

// Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/presupuesto-pdf/{id}', 'TaskController@exportPDF')->name('exportPDF');

    Route::get('/content-create', function () {
        return view('content-create');
    });

    //Edicion de contenido
    Route::post('/content-create}', 'TaskController@contentCreate')->name('content.create');

    Route::get('/content-edit/{id}', 'TaskController@contentEdit')->name('content.edit');
    Route::get('/content-editContent/{task}', 'TaskController@contentEditContent')->name('content.editContent');

    Route::put('/content-update/{task}', 'TaskController@contentUpdate')->name('content.update');
    Route::put('/content-updateCant/{task}', 'TaskController@contentUpdateCant')->name('content.updateCant');

    Route::resource('tasks', 'TaskController');
// });

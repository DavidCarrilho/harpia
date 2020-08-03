<?php

Route::group(['prefix' => 'rh', 'middleware' => ['auth']], function () {
    Route::get('/', '\Modulos\RH\Http\Controllers\IndexController@getIndex')->name('rh.index.index');

    Route::group(['prefix' => 'areasconhecimentos'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\AreasConhecimentosController@getIndex')->name('rh.areasconhecimentos.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\AreasConhecimentosController@getCreate')->name('rh.areasconhecimentos.create');
        Route::post('/create', '\Modulos\RH\Http\Controllers\AreasConhecimentosController@postCreate')->name('rh.areasconhecimentos.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\AreasConhecimentosController@getEdit')->name('rh.areasconhecimentos.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\AreasConhecimentosController@putEdit')->name('rh.areasconhecimentos.edit');
        Route::post('/delete', '\Modulos\RH\Http\Controllers\AreasConhecimentosController@postDelete')->name('rh.areasconhecimentos.delete');
    });

    Route::group(['prefix' => 'bancos'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\BancosController@getIndex')->name('rh.bancos.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\BancosController@getCreate')->name('rh.bancos.create');
        Route::post('/create', '\Modulos\RH\Http\Controllers\BancosController@postCreate')->name('rh.bancos.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\BancosController@getEdit')->name('rh.bancos.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\BancosController@putEdit')->name('rh.bancos.edit');
        Route::post('/delete', '\Modulos\RH\Http\Controllers\BancosController@postDelete')->name('rh.bancos.delete');
    });

    Route::group(['prefix' => 'vinculos'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\VinculosController@getIndex')->name('rh.vinculos.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\VinculosController@getCreate')->name('rh.vinculos.create');
        Route::post('/create', '\Modulos\RH\Http\Controllers\VinculosController@postCreate')->name('rh.vinculos.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\VinculosController@getEdit')->name('rh.vinculos.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\VinculosController@putEdit')->name('rh.vinculos.edit');
        Route::post('/delete', '\Modulos\RH\Http\Controllers\VinculosController@postDelete')->name('rh.vinculos.delete');
    });


    Route::group(['prefix' => 'periodoslaborais'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\PeriodosLaboraisController@getIndex')->name('rh.periodoslaborais.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\PeriodosLaboraisController@getCreate')->name('rh.periodoslaborais.create');
        Route::post('/create', '\Modulos\RH\Http\Controllers\PeriodosLaboraisController@postCreate')->name('rh.periodoslaborais.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\PeriodosLaboraisController@getEdit')->name('rh.periodoslaborais.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\PeriodosLaboraisController@putEdit')->name('rh.periodoslaborais.edit');
        Route::post('/delete', '\Modulos\RH\Http\Controllers\PeriodosLaboraisController@postDelete')->name('rh.periodoslaborais.delete');
    });

    Route::group(['prefix' => 'colaboradores'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\ColaboradoresController@getIndex')->name('rh.colaboradores.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\ColaboradoresController@getCreate')->name('rh.colaboradores.create')->middleware('verificapessoa');
        Route::post('/create', '\Modulos\RH\Http\Controllers\ColaboradoresController@postCreate')->name('rh.colaboradores.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\ColaboradoresController@getEdit')->name('rh.colaboradores.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\ColaboradoresController@putEdit')->name('rh.colaboradores.edit');
        Route::get('/show/{id}', '\Modulos\RH\Http\Controllers\ColaboradoresController@getShow')->name('rh.colaboradores.show');
    });

    Route::group(['prefix' => 'funcoes'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\FuncoesController@getIndex')->name('rh.funcoes.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\FuncoesController@getCreate')->name('rh.funcoes.create');
        Route::post('/create', '\Modulos\RH\Http\Controllers\FuncoesController@postCreate')->name('rh.funcoes.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\FuncoesController@getEdit')->name('rh.funcoes.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\FuncoesController@putEdit')->name('rh.funcoes.edit');
        Route::post('/delete', '\Modulos\RH\Http\Controllers\FuncoesController@postDelete')->name('rh.funcoes.delete');
    });

    Route::group(['prefix' => 'setores'], function () {
        Route::get('/', '\Modulos\RH\Http\Controllers\SetoresController@getIndex')->name('rh.setores.index');
        Route::get('/create', '\Modulos\RH\Http\Controllers\SetoresController@getCreate')->name('rh.setores.create');
        Route::post('/create', '\Modulos\RH\Http\Controllers\SetoresController@postCreate')->name('rh.setores.create');
        Route::get('/edit/{id}', '\Modulos\RH\Http\Controllers\SetoresController@getEdit')->name('rh.setores.edit');
        Route::put('/edit/{id}', '\Modulos\RH\Http\Controllers\SetoresController@putEdit')->name('rh.setores.edit');
        Route::post('/delete', '\Modulos\RH\Http\Controllers\SetoresController@postDelete')->name('rh.setores.delete');

    });

});
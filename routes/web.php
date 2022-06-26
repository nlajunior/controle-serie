<?php

Route::get('/', 'SeriesController@index')->name('series.index');
Route::get('/series/create', 'SeriesController@create')->name('form_criar_serie');
Route::post('/series/salvar', 'SeriesController@store')->name('series.store');

Route::delete('/series/remover/{id}', 'SeriesController@destroy');
Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');
Route::post('/series/{id}/editaNome', 'SeriesController@editaNome');
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');


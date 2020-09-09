<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PageController@detalle')->name('notas.detalle');

Route::post('/', 'PageController@nuevoDato')->name('notas.crear');

Route::get('/editar/{id}', 'PageController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PageController@guardarEdicion')->name('notas.guardarEdicion');

Route::delete('/eliminar/{id}', 'PageController@eliminar')->name('notas.eliminar');

Route::get('/mapa', 'PageController@fotos')->name('foto');

Route::get('/traductor', 'PageController@blog')->name('noticias');

Route::get('/traducir', 'PageController@traducirTexto')->name('traducir');

Route::get('/nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');
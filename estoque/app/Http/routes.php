<?php

Route::get('/', function() {
	return '<h1>Primeira lógica com Laravel!</h1>';
});

Route::get('/outra-rota', function() {
	return '<h1>Outra rota do Laravel!</h1>';
});

Route::get('/produtos', 'ProdutoController@listar');
Route::get('/produtos/json', 'ProdutoController@listarJson');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adicionar', 'ProdutoController@adicionar');

//Se quiser parametro opcional é só escrever {id?}
Route::get(
	'/produtos/visualizar/{id}',
	'ProdutoController@visualizar')
	->where('id', '[0-9]+');

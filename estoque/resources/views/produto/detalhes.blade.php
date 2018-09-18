@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto {{$produto->nome}} </h1>
<ul>
  <li>Descrição: {{$produto->descricao or 'Produto sem descrição'}}</li>
  <li>Valor: R$ {{$produto->valor}}</li>
  <li>Quantidade: {{$produto->quantidade}}</li>
</ul>
@stop

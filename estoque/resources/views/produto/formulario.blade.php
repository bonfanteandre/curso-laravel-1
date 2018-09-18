@extends('layout.principal')

@section('conteudo')

<h1>Novo produto</h1>

<form action="/produtos/adicionar" method="POST">

  <input type="hidden" value="{{csrf_token()}}" name="_token">

  <div class="form-group">
    <label>Nome</label>
    <input class="form-control" type="text" name="nome">
  </div>

  <div class="form-group">
    <label>Valor</label>
    <input class="form-control" type="text" name="valor">
  </div>

  <div class="form-group">
    <label>Quantidade</label>
    <input class="form-control" type="text" name="quantidade">
  </div>

  <div class="form-group">
    <label>Descrição</label>
    <textarea class="form-control" name="descricao"></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-block">Adicionar</button>

</form>
@stop

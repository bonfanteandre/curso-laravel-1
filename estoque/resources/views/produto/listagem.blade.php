@extends('layout.principal')

@section('conteudo')
<h1>Listagem de produtos</h1>
  @if(empty($produtos))
    <div class="alert alert-danger">
      Nenhum produto cadastrado.
    </div>
  @else

    @if(old('nome'))
      <div class="alert alert-success">
        O produto {{old('nome')}} foi adicionado com sucesso!
      </div>
    @endif

    <table class="table table-bordered table-hover">
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th></th>
      </tr>
      @foreach($produtos as $produto)
      <tr class="{{$produto->quantidade <= 1 ? 'danger' : ''}}">
        <td> {{$produto->nome}} </td>
        <td> {{$produto->valor}} </td>
        <td> {{$produto->descricao or 'Sem descrição'}} </td>
        <td> {{$produto->quantidade}} </td>
        <td>
          <a href="/produtos/visualizar/{{$produto->id}}">
            Visualizar
          </a>
        </td>
      </tr>
      @endforeach
    </table>
  @endif
  <h4>
    <span class="label label-danger pull-right">
      Um ou menos itens no estoque
    </span>
  </h4>
@stop

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Controle de estoque</title>

    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
        </div>

          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a style="color: white" href="/produtos">Listagem</a></li>
            <li><a style="color: white" href="/produtos/novo">Novo produto</a></li> -->
            <li><a style="color: white" href="{{action('ProdutoController@listar')}}">Listagem</a></li>
            <li><a style="color: white" href="{{action('ProdutoController@novo')}}">Novo produto</a></li>
          </ul>

        </div>
      </nav>

      @yield('conteudo')

      <footer class="footer">
          <p>© Livro de Laravel do Alura.</p>
      </footer>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">PetShop</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Produtos</a></li>

        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <li class="active" ><a href="#">Carrinho</a></li>
        <li class="active"><a href="#">Minhas Compras</a></li>
      </ul>



      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-home"></span> Administrativo</a></li>
      </ul>

    </div>

  </nav>



  <section class="content">
    @yield('conteudo')
  </section>

  <section class="author">
    @yield('autor')
  </section>
  <script src="jquery-3.0.0.min.js"></script>
  <script src="site.js"></script>
</body>
</html>


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
        <li class="active"><a href="/">Produtos</a></li>

        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <li class="active" ><a href="carrinho">Carrinho</a></li>
        <li class="active"><a href="compras">Minhas Compras</a></li>
      </ul>



      <ul class="nav navbar-nav navbar-right">
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login"><span class="glyphicon glyphicon-home"></span> Administrativo</a></li>
      </ul>

    </div>

  </nav>


  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      You are logged in!
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection


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

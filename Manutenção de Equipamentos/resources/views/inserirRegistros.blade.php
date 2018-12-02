<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Inserir Registros</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  <!-- Styles -->
  <style>
  html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    height: 100vh;
    margin: 0;
  }





  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .top-right {
    position: absolute;
    right: 10px;
    top: 18px;
  }

  .content {
    text-align: center;
  }

  .title {
    font-size: 84px;
  }

  .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }

  .m-b-md {
    margin-bottom: 30px;
  }

  </style>



</head>
<body>
  <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
        Cadastrar Manutenção
      </div>

      <div class="links">
        <a href="/">Home</a>
        <a href="geral">Área do Adiministrador</a>
        <p></p><p></p><p></p> <p></p><p></p><p></p>
      </div>


      <form class="form-horizontal"  action = "inserirRegistrosBd" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">


        <div class="form-group">
          <!-- <label class="control-label col-sm-2" for="text" >Nome</label> -->
          <div class="col-sm-10">
            <input type="number" class="form-control" name = "equipamento_id"  placeholder="Id do Equipamento">
          </div>
        </div>
        <div class="form-group">
          <!-- <label class="control-label col-sm-2" for="text" >Nome</label> -->
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "descricao" placeholder="Descrição do Equipamento">
          </div>
        </div>
        <div class="form-group">
          <!-- <label class="control-label col-sm-2" for="text" >Nome</label> -->
          <div class="col-sm-10">
            <input type="date" class="form-control" name = "datalimite" placeholder="Data Limite">
          </div>
        </div>
        <div class="form-group">
          <!-- <label class="control-label col-sm-2" for="text" >Nome</label> -->
          <div class="col-sm-10">
            <input type="text" class="form-control" name = "tipo" placeholder="Tipo de Equipamento (1-Preventiva; 2-Corretiva; 3-Urgente)">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type = "submit" class="btn btn-default" value = "Cadastrar" />
          </div>
        </div>

      </div>
    </div>




  </div>
</body>
</html>

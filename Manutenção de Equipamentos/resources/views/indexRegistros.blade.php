
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Exibir Manutenção</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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

  table, td, th {
      border: 1px solid #ddd;
      text-align: left;
  }

  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      padding: 1px;
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
        Relatorio de Manutenção
      </div>

      <div class="links">
        <a href="/">Home</a>
        <a href="geral">Área do Adiministrador</a>
        <p></p><p></p><p></p> <p></p><p></p><p></p>
      </div>




      <table>
        <tr>
          <th>Id</th>
          <th>Equipamento id</th>
          <th>Descrição</th>
          <th>Tipo</th>
          <th>Data limite</th>

        </tr>
        @foreach ($registros as $r)
        <tr>
          <td>{{$r->id}}</td>
          <td>{{$r->equipamento_id}}</td>
          <td>{{$r->descricao}}</td>
          <td>@if ($r->tipo === 1)
              1-Preventiva
              @elseif ($r->tipo === 2)
              2-Corretiva
              @else
              3-Urgente
              @endif
            <td>{{$r->datalimite}}</td>
          </tr>

          @endforeach
        </table>


    </div>
  </div>
</body>
</html>

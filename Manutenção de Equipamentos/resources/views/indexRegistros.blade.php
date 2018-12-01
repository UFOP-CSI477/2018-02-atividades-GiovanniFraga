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

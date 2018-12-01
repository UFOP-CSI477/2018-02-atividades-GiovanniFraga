
<table>

  <tr>
      <th>Id</th>
      <th>Nome</th>
  </tr>

@foreach ($equipamentos as $e)
<tr>
  <td>{{$e->id}}</td>
  <td>{{$e->nome}}</td>
</tr>
@endforeach

</table>

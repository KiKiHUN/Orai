@extends("layout")
@section('content')


<a href="/varos/create"> Város hozzáadás</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Neve</th>
      <th scope="col">Törlés</th>
      <th scope="col">Módosítás</th>
    </tr>
  </thead>
  <tbody>
  @foreach($adat as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>Törlés</td>
      <td>Módosítás</td>
    </tr>
    @endforeach
  </tbody>
</table>
  @endsection
@extends("layout")
@section('content')


<a href="/legitarsasag/create"> Légitársaság hozzáadás</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Neve</th>
      <th scope="col">Telephelye</th>
      <th scope="col">Törlés</th>
      <th scope="col">Módosítás</th>
    </tr>
  </thead>
  <tbody>
  @foreach($adat as $item)
    <tr>
      <td> <a href="/legitarsasag/listazas/{{$item->id}}">{{$item->name}}</a> </td>
      <td>{{$item->origin}}</td>
      <td>Törlés</td>
      <td>Módosítás</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
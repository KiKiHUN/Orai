@extends("layout")
@section('content')




<table class="table">
  <thead>
    <tr>
      <th scope="col">Száma</th>
      <th scope="col">Neve</th>
      <th scope="col">Ára</th>
      <th scope="col">Hova repül</th>
      <th scope="col">Repül-e</th>
      <th scope="col">Törlés</th>
      <th scope="col">Módosítás</th>
    </tr>
  </thead>
  <tbody>
  @foreach($adat as $item)
    <tr>
      <td> <a href="/utasok/{{$item->id}}">{{$item->number}}</a> </td>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->destination}}</td>
      @if ($item->active == "1")
      <td>igen</td>
      @endif
      @if ($item->active == "0")
      <td>nem</td>
      @endif
      <td>Törlés</td>
      <td>Módosítás</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
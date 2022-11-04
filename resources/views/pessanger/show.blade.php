@extends("layout")
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">Név</th>
      <th scope="col">Szülidő</th>
      <th scope="col">Személyi szám</th>
    </tr>
  </thead>
  <tbody>
  @foreach($adat as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>{{$item->bday}}</td>
      <td>{{$item->pid}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  @endsection
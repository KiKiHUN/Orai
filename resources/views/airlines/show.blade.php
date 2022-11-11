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
      <td>
        <form action="/legitarsasag/listazas/{{ $item->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger btn-block" type="submit" value="Törlés">
        </form>
      </td>
      <td>
        <form action="/legitarsasag/edit/{{ $item->id }}" method="POST">
            @csrf
            <input class="btn btn-primary btn-block" type="submit" value="Szerkesztés">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

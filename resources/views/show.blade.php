@extends ('layout')
@section('content')
    @if($flight->name)
    <h1> Repülő neve: {{$flight->name}}</h1>
    @endif
    <h1> száma: {{$flight->number}}</h1>
    <h1> ára: {{$flight->price}}</h1>
@endsection

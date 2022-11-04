
@extends("layout")
@section('content')
<form action="/utasok/store" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Utas neve:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Név">
        <label for="origin">Személyi szám:</label>
        <input type="text" class="form-control" id="szemszam" name="szemszam" placeholder="Szmélyi szám">
        <label for="szuldat">Szuldat:</label>
        <input type="date" data-provide="datepicker"  class="form-control" id="szuldat" name="szuldat" placeholder="Születési dátum">
        <label for="flightid">Repülő járat:</label>
        <select id='flightid' name='flightid' class="form-control">
        @foreach($adat as $item)
            <option value='{{$item->id}}'>neve: {{$item->name}} száma: {{$item->number}}</option>
        @endforeach
        </select>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Küldés</button>
</form>

@endsection
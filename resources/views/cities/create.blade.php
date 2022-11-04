
@extends("layout")
@section('content')
<form action="/varos/store" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Város neve:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Város név">
    </div>
    <button type="submit" class="btn btn-primary">Küldés</button>
</form>

@endsection
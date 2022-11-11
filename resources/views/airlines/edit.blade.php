@extends("layout")
@section('content')
<form action="/legitarsasag/update/{{ $adat->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Repülő társaság neve:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Repülőgép társaság név" value="{{ $adat->name }}">
    </div>
    <div class="form-group">
        <label for="origin">Repülő társaság Központ:</label>
        <input type="text" class="form-control" id="origin" name="origin" placeholder="Repülőgép társaság központ" value="{{ $adat->origin }}">
    </div>

    <button type="submit" class="btn btn-primary">Küldés</button>
</form>

@endsection

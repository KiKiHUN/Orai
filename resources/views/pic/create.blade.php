@extends("layout")
@section('content')
<form action="{{ route('kepmentes') }}" method="POST" enctype="multipart/form-data">
    <div class="input-group">
        @csrf
        <div class="input-group-prepend">
        <input type="submit" class="input-group-text" value="Upload">
        </div>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="file"
            aria-describedby="inputGroupFileAddon01" name="file">
        <label class="custom-file-label" for="inputGroupFile01"></label>
        </div>
    </div>
</form>
@endsection

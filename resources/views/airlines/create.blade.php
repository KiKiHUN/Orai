
@extends("layout")
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div id="hiba"></div>
<form action="" method="POST" id="legitarsasagfelvetele">
    @csrf
    <div class="form-group">
        <label for="name">Repülő társaság neve:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Repülőgép társaság név">
    </div>
    <div class="form-group">
        <label for="origin">Repülő társaság Központ:</label>
        <input type="text" class="form-control" id="origin" name="origin" placeholder="Repülőgép társaság név">
    </div>
    <button type="submit" class="btn btn-primary">Küldés</button>
</form>
<script>
    $(document).ready(function(){
        $("#legitarsasagfelvetele").on('submit',function(){
            var name=$("#name").val();
            var origin=$("#origin").val();
            var _token=$("input[name='_token']").val();
            $.ajax({
                url:"{{ route('legitarsasagmentese') }}",
                type:"post",
                data:{
                    name:name,
                    origin:origin,
                    _token:_token
                },
                success:function(re){
                    $("#hiba").html(re);
                }
            });
        event.preventDefault();
    });
});
</script>
@endsection

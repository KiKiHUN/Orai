
@extends("layout")
@section('content')
<?php try {  
    echo('<h1>Post Oldal</h1>');
    echo('<h1>');
    echo($post->slug);
    echo('</h1>');
}catch   (Exception $e) {
    echo('ez nem slug');
} ?>


<h1>Hello</h1>


<?php try {  
    //<h1>nev: {{$adat->nev}}</h1>
    echo('<h1>név: ');echo($nev);
     echo('</h1> <h1>Jelen év: ');echo($adat->jelen_ev);
    echo('</h1><h1>Születési dátum: ');echo($adat->szul_dat);
    echo('</h1> <h1>Cím: ');echo($adat->lakcim);
    echo('</h1>');
}catch   (Exception $e) {
    echo('ez nem diak');
} ?>

@endsection
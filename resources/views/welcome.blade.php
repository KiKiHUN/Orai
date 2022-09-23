<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
       <H1 style='color:red ' id="ik" >Incidens Kar</H1>
       <hr>
       <input type="button" onclick="location.href='/alma';" value="Alma" />
       <a href="/alma">Alma, csak szöveggel</a>
      {{$name}}
    </body>
</html>

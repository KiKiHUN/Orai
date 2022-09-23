<?php
    foreach($tomb as $item)
{
echo($item);
echo "<br>";
};

?>

<ul> 
    @foreach($tomb as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>
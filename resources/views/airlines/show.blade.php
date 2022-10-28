@extends("layout")
@section('content')
<ul>
  <?php foreach($adat as $item) : ?>
    <li><?= $item->name; ?></li>
  <?php endforeach; ?>
</ul>


@endsection
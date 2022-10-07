<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pastel by MLPdesign</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" lang="en" content="open source html and css template">
<meta name="author" content="mlp design">
<meta name="robots" content="index, follow">
<link rel="stylesheet" href="{{asset('css/pastel.css')}}">
</head>
<body>
<!-- Menu Items -->
<nav>
 <input type="checkbox" id="show-menu" role="button">
 <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
 <label for="show-menu" class="close"><span class="fa fa-times"></label>
 <ul id="menu">
  <li><a class="{{Request::path()==='/' ? 'active' : '' }}" href="/">Kezdőoldal</a></li>
  <li><a class="{{Request::path()==='/krisztian' ? 'active' : '' }}" href="/krisztian">Órai feladat</a></li>
 </ul>
</nav>
<!-- // -->
<!-- Banner -->
<div id="banner">
 <div id="header">
  <h1>OldSchool Pastel</h1>
  <p class="sub">Fluid, responsive website template by MLPdesign.</p>
 </div>
</div>
<!-- // -->
<div id="content">
 @yield("content")
</div>
<!-- Footer Items -->
<div id="footer">
 <p>&copy; Copyright Your Name</p>
 <!--Credits below must be kept under CC-NC 3.0 License-->
 <p><a href="http://www.mlpdesign.net">HTML and CSS</a> by MLPdesign.net</p>
</div>
<!-- // -->
</body>
</html>

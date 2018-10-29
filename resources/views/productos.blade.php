@include('header')
	  <link rel="stylesheet" href="{{url  ('/css/pro.css)}}">
<div class="muestraimagenes">
	<h1>productos</h1>

	<ul class="galeria">
		<li><a href=""><img src="{{url  ('/images/imagen1.png')}}"> </a></li>
		<li><a href=""><img src="{{url  ('/images/imagen2.png')}}"> </a></li>
		<li><a href=""><img src="{{url  ('/images/imagen3.png')}}"> </a></li>
		<li><a href=""><img src="{{url  ('/images/imagen4.png')}}"> </a></li>
	</ul>

	<div class="modal">
		<h3>Paisaje 1</h3>
		<div class="imagen">
			<a href="">&#60;</a>
			<a href=""><img src="{{ url('images/imagen3.png')}}"></a>
			<a href="">></a>
		</div>
		<a href="">X</a>
	</div>
	</div>
@include('footer')
@include('header')
<link rel="stylesheet" href="{{url  ('/css/formatos.css')}}">
	<div class="zoom">
	<table class="txtgaleria" align="center">
		<tr>
			<td><img class="imggaleria" src="{{url  ('/images/bote.png')}}" alt="">
				<h6>Producto1 <br>Hogar</h6>
				<h5>Producto2 <br>$150</h5>
			</td>
			<td><img class="imggaleria" src="{{url  ('/images/bote2.png')}}" alt="">
				<h6>Producto1 <br>Hogar</h6>
				<h5>Producto2 <br>$150</h5>
			</td>
			<td><img class="imggaleria" src="{{url  ('/images/bote3.png')}}" alt="">
				<h6>Producto1 <br>Hogar</h6>
				<h5>Producto2 <br>$150</h5>
			</td>
		</tr>
	</table>
	</div>
@include('footer')
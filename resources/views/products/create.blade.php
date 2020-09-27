<form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<label for="nombre">{{'nombre'}}</label>
<input class="form-control" type="text" name="nombre" value="">
<br/>
<label for="detalle">{{'detalle'}}</label>
<input class="form-control" type="text" name="detalle" value="">
<br/>
<label for="precio">{{'precio'}}</label>

<input class="form-control" type="text" name="precio" value="">
<br/>
<input type="submit" value="agregar">
<br/>
<a href="{{url('products')}}">Regresar</a>
</form>
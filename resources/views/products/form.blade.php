

<label for="nombre">{{'nombre'}}</label>
<input class="form-control" type="text" name="nombre" value="{{isset($product->nombre)?$product->nombre:''}}">
<br/>
<label for="detalle">{{'detalle'}}</label>
<input class="form-control" type="text" name="detalle" value="{{isset($product->detalle)?$product->detalle:''}}">
<br/>
<label for="precio">{{'precio'}}</label>

<input class="form-control" type="text" name="precio" value="{{isset($product->precio)?$product->precio:''}}">
<br/>
<input type="submit" value="{{$Modo=='crear' ? 'Registrar': 'Modificar'}}">
<br/>
<a href="{{url('products')}}">Regresar</a>
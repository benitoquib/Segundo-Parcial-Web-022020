
<div class="form-group">
<label for="nombre" class="control-label">{{'nombre'}} </label>
<input class="form-control" type="text" name="nombre" value="{{isset($product->nombre)?$product->nombre:''}}">
</div>
<div class="form-group">
<label for="detalle" class="control-label">{{'detalle'}}</label>
<input class="form-control" type="text" name="detalle" value="{{isset($product->detalle)?$product->detalle:''}}">
</div>
<div class="form-group">
<label for="precio" class="control-label">{{'precio'}}</label>
<input class="form-control" type="text" name="precio" value="{{isset($product->precio)?$product->precio:''}}">
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Registrar': 'Modificar'}}">
<br/>
<a class="btn button-primary" href="{{url('products')}}">Regresar</a>
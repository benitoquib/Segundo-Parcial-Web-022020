
@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{Session::get('Mensaje')}}
</div>

@endif
<a href="{{url('products/create')}}" class="btn btn-success">Agregar producto</a>
<br/>
<br/>
<table class="table table-light table-hover" >
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->detalle}}</td>
            <td>{{$producto->precio}}</td>
            <td>
            <a class="btn btn-dark" href="{{url('/products/'.$producto->id.'/edit')}}">
            Editar
            </a>
            <form method="post" action="{{url('/products/'.$producto->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('Desea borrar la informacion');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$products->links()}}
</div>
@endsection
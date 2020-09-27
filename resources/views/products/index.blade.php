
@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<a href="{{url('products/create')}}">Agregar producto</a>

<table class="table table-light">
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
            <a href="{{url('/products/'.$producto->id.'/edit')}}">
            Editar
            </a>
            <form method="post" action="{{url('/products/'.$producto->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Desea borrar la informacion');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
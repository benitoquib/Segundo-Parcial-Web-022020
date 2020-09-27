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
        </tr>
    @endforeach
    </tbody>
</table>
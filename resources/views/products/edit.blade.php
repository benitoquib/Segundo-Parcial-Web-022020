@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/products/'.$product->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    @include('products.form',['Modo'=>'modificar'])

</form>
</div>
@endsection
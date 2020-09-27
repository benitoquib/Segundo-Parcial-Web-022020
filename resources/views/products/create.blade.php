@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/products')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
@include('products.form',['Modo'=>'crear'])


</form>
</div>
@endsection
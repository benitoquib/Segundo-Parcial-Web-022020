@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/products')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
@include('products.form',['Modo'=>'crear'])


</form>
</div>
@endsection
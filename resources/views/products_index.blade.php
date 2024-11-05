@extends('layout.main_template')

@section('content')
    <h2>Index Productos</h2>
    <br>
    <button><a href="{{route('products.create')}}">Crear Producto</a></button>
    <br>
@endsection

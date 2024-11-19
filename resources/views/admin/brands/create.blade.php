@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1> Regitrar Marcas </h1>

<form action="{{route('brands.store')}}" method="POST">
    @csrf
    <label for=""> Nombre de la Marca </label>
    <input type="text" name= "brand">

    <label for=""> Descripción </label>
    <input type="text" name= "description">

    <button type="submit"> Registrar </button>
</form>

@endsection
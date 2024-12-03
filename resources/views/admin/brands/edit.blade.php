@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<h1>Editar marca</h1>
<button class="btn btn-secondary">
    <a href="{{ route('brands.index') }}" class="text-white text-decoration-none">
        <i class="fa-solid fa-candy"></i> Marcas
    </a>
</button>

<form action="{{ route('brands.update', $brand->id) }}" method="POST">
@csrf
@method('PUT')
<label for="">Nombre de la marca</label>
<input type="text" name="brand" value="{{$brand->brand}}">


<label for="">Descripcion</label>
<input type="text" name="description" value="{{$brand->description}}">

<br>
<button type="submit"> Registrar </button>
</form>


@endsection
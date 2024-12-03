<!-- resources/views/sales/create.blade.php -->

@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<h2>Crear Venta</h2>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@if ($errors->any())
    @foreach ($errors->all() as $e)
    <div class="error">
        {{$e}}
    </div>
    @endforeach
@endif

<button class="btn btn-secondary">
    <a href="{{ route('sales.index') }}" class="text-white text-decoration-none">
        <i class="fa-solid fa-candy"></i> Ventas
    </a>
</button>

<form action="{{ route('sales.store') }}" method="POST">
    @csrf
    <div>
        <label for="client_id">Cliente:</label>
        <select name="client_id" id="client_id" required>
            @foreach ($clients as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="product_id">Producto:</label>
        <select name="product_id" id="product_id" required>
            @foreach ($products as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="sale_date">Fecha de la venta:</label>
        <input type="date" name="sale_date" id="sale_date" required>
    </div>

    <div>
        <button type="submit">Guardar Venta</button>
    </div>
</form>
@endsection

@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

@include('fragments.formstyle')
<h2>Editar Venta</h2>

<form action="{{ route('sales.update', $sale) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="client_id">Cliente:</label>
        <select name="client_id" id="client_id" required>
            @foreach ($clients as $id => $name)
                <option value="{{ $id }}" {{ $sale->client_id == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="product_id">Producto:</label>
        <select name="product_id" id="product_id" required>
            @foreach ($products as $id => $name)
                <option value="{{ $id }}" {{ $sale->product_id == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="sale_date">Fecha de Venta:</label>
        <input type="date" name="sale_date" id="sale_date" value="{{ \Carbon\Carbon::parse($sale->sale_date)->format('Y-m-d') }}" required>
    </div>

    <div>
        <button type="submit">Actualizar Venta</button>
    </div>
</form>

@endsection

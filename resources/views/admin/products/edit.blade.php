<!-- resources/views/admin/products/edit.blade.php -->

@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<h2>Editar Producto</h2>

<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div>
        <label for="nameProducts">Nombre del producto:</label>
        <input type="text" name="nameProduct" id="nameProduct" value="{{ $product->nameProducts }}" required>
    </div>

    <div>
        <label for="brand_id">Marca:</label>
        <select name="brand_id" id="brand_id" required>
            @foreach ($brands as $id => $name)
                <option value="{{ $id }}" {{ $product->brand_id == $id ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="stock">Cantidad:</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>
    </div>

    <div>
        <label for="unit_price">Precio:</label>
        <input type="number" name="unit_price" id="unit_price" value="{{ $product->unit_price }}" step="0.01" required>
    </div>

    <div>
        <label for="imagen">Imagen (opcional):</label>
        <input type="file" name="imagen" id="imagen" accept="image/*">
    </div>

    <div>
        <button type="submit">Actualizar Producto</button>
    </div>
</form>
@endsection

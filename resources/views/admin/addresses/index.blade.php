@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<h2>Direcciones</h2>
<br>


<div class="mb-3">
    <a href="{{ route('addresses.create') }}" class="btn btn-primary text-white">
        <i class="fa-solid fa-plus-circle"></i> Crear dirección
    </a>
    <a href="{{ route('addresses.index') }}" class="btn btn-secondary text-white">
        <i class="fa-solid fa-home"></i> Direcciones
    </a>
</div>


<table class="table table-success table-striped">
    <thead class="table-dark">
        <tr>
            <th>Cliente ID</th>
            <th>Calle</th>
            <th>Número Interior</th>
            <th>Número Exterior</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>País</th>
            <th>Código Postal</th>
            <th>Referencias</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($addresses as $address)
            <tr>
                <td>{{ $address->client->name }}</td>
                <td>{{ $address->street }}</td>
                <td>{{ $address->internal_num }}</td>
                <td>{{ $address->external_num }}</td>
                <td>{{ $address->neighborhood }}</td>
                <td>{{ $address->town }}</td>
                <td>{{ $address->state }}</td>
                <td>{{ $address->country }}</td>
                <td>{{ $address->postal_code }}</td>
                <td>{{ $address->references }}</td>
                <td>
                   
                    <a href="{{ route('addresses.show', $address) }}" class="btn btn-info text-white">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="{{ route('addresses.edit', $address) }}" class="btn btn-warning text-white">
                        <i class="fa-solid fa-pen"></i>
                    </a>
                    <button class="btn btn-danger">
                        <a href="{{ route('address.destroyConfirm', $address->id) }}" class="text-white text-decoration-none">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $addresses->links() }}
</div>

@endsection

<style>
    .btn {
        margin: 5px;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .pagination .page-item .page-link {
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 5px;
    }
</style>

@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<div class="mb-3">
    <button class="btn btn-primary">
        <a href="{{ route('clients.index') }}" class="text-white text-decoration-none">
            <i class="fa-solid fa-arrow-left"></i> Regresar a la lista de clientes
        </a>
    </button>
</div>

<h1 class="text-center mb-4">Detalles del Cliente</h1>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Nombre: {{$client->name}} {{$client->last_name}} {{$client->second_last_name}}</h3>
                    <p><strong>Correo Electrónico:</strong> {{$client->email}}</p>
                    <p><strong>Teléfono:</strong> {{$client->phone ?? 'No disponible'}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layout.main_template')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

<style>
    button {
        width: 100%;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: block;
        color: white;
        background-color: #000;
    }

    h3 {
        width: 100%;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }
</style>

<div class="container mt-5">
    <h1 class="text-center">Eliminar Dirección</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-center">¿Estás seguro que quieres eliminar esta dirección?</h3>
                    
                    <div class="d-flex justify-content-between mt-4">
                     
                        <form action="{{ route('addresses.index') }}" method="GET">
                            <button type="submit" class="btn btn-secondary btn-lg">
                                <i class="fa-solid fa-arrow-left"></i> No
                            </button>
                        </form>

                       
                        <form action="{{ route('address.destroy', $address->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-lg">
                                <i class="fa-solid fa-trash"></i> Sí
                            </button>
                        </form>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</div>

@endsection

@extends('layout.main_template')

@section('content')

@include('fragments.formstyle')

<style>
button {
    width: 100%;
    padding: 8px 16px;
    margin-block-start:32px;
    border: 1px solid #000;
    border-radius:5px;
    display:block;
    color:white;
    background-color: #000;
}

h3 {
    width: 100%;
    height: 10px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    display: inline-block;
}
</style>

<div class="container mt-5">
    <h1 class="text-center">Eliminar Venta</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="text-center">¿Estás seguro que quieres eliminar la venta de {{$sale->product->name}} a {{$sale->client->name}}?</h3>

                    <div class="d-flex justify-content-between mt-4">
                       
                        <form action="{{ route('sales.index') }}" method="GET">
                            <button type="submit" class="btn btn-secondary btn-lg">
                                <i class="fa-solid fa-arrow-left"></i> No
                            </button>
                        </form>

                       
                        <form action="{{ route('sales.destroy', $sale->sale_id) }}" method="POST">
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

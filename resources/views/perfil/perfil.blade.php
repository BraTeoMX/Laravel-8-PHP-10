@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    <button class="btn btn-secondary">Pagina de prueba</button>
                    <hr>
                    <p>Elemento de prueba</p>
                    <p>En este campo se introducira para iniciar cambios en la nueva rama y para actualizarlo tambien en GitHub</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

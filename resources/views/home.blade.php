@extends('layouts.app')

@section('content')
<div class="container-fluid"> <!-- Utilizamos container-fluid para que ocupe todo el ancho del navegador -->
    <div class="row justify-content-center">
        <div class="col-md-12"> <!-- Utilizamos col-md-12 para que ocupe las 12 columnas en todos los tamaños de pantalla -->
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <button class="btn btn-primary">Test Bootstrap</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Dashboard 2') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-dark">Test Bootstrap 2</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

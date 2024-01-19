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
                    <form action="{{ url('/formulario-datos') }}" method="POST">
                        @csrf {{-- Token CSRF para seguridad --}}
                    
                        {{-- Campo Select para Puestos --}}
                        <div class="mb-3">
                            <label for="puesto_id" class="form-label">Puesto</label>
                            <select name="puesto_id" id="puesto_id" class="form-select">
                                @foreach($puestos as $puesto)
                                    <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        {{-- Campo Select para Departamentos --}}
                        <div class="mb-3">
                            <label for="departamento_id" class="form-label">Departamento</label>
                            <select name="departamento_id" id="departamento_id" class="form-select">
                                @foreach($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        {{-- Campo Select para Plantas --}}
                        <div class="mb-3">
                            <label for="planta_id" class="form-label">Planta</label>
                            <select name="planta_id" id="planta_id" class="form-select">
                                @foreach($plantas as $planta)
                                    <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        {{-- Botón de envío --}}
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

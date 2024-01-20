@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    <hr>
                    <p>Datos de la tabla</p>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Puesto</th>
                                <th>Departamento</th>
                                <th>Planta</th>
                                <!-- Añade aquí más columnas según sea necesario -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reportes as $reporte)
                                <tr>
                                    <td>{{ $reporte->id }}</td>
                                    <td>{{ $reporte->catPuesto->nombre }}</td>
                                    <td>{{ $reporte->catDepartamento->nombre }}</td>
                                    <td>{{ $reporte->catPlanta->nombre }}</td>
                                    <!-- Añade aquí más celdas según sea necesario -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

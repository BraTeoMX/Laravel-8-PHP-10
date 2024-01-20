{{-- resources/views/reportes_pdf.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Datos</title>
    <style>
        /* Aquí puedes añadir estilos específicos para el PDF */
        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Reporte de Datos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Puesto</th>
                <th>Departamento</th>
                <th>Planta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reportes as $reporte)
                <tr>
                    <td>{{ $reporte->id }}</td>
                    <td>{{ optional($reporte->catPuesto)->nombre }}</td>
                    <td>{{ optional($reporte->catDepartamento)->nombre }}</td>
                    <td>{{ optional($reporte->catPlanta)->nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

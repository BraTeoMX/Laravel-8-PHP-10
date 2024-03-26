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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Abrir Modal
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal de Ejemplo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ¡Hola! Soy un modal de ejemplo.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="md-6">
                            <button onclick="mostrarSweetAlert()" class="btn btn-primary">Abrir SweetAlert2</button>
                        </div>
                        <div class="md-6">
                            <button onclick="confirmDelete()" class="btn btn-danger">Eliminar</button>
                        </div>
                        

                        
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Antes de cerrar el body -->
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script>
        function mostrarSweetAlert() {
            Swal.fire('¡Hola!', 'Este es un mensaje de SweetAlert2', 'success');
        }
    </script>

    <script>
        function confirmDelete() {
        Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminarlo"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "¡Eliminado!",
                    "Tu archivo ha sido eliminado.",
                    "success"
                );
                // Aquí puedes agregar la lógica para eliminar el archivo
            }
        });
    }

    </script>
@endsection

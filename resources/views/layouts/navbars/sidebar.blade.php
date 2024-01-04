<!-- Sidebar.blade.php -->
<style>
    .nav-link:hover {
        background-color: #765341;
        color: white; /* Cambia el color del texto para que sea legible */
    }
</style>

<div class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
     <!-- Encabezado con la imagen -->
     <div class="mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Encabezado-logo" class="img-fluid">
    </div>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-home"></i> Inicio
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-user"></i> Perfil
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#multimediaCollapse">
                <i class="fas fa-film"></i> Multimedia
            </a>
            <div class="collapse" id="multimediaCollapse">
                <ul class="nav flex-column ml-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Subir Videos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Altas y Bajas</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-cog"></i> Configuración
            </a>
        </li>
    </ul>
</div>

 
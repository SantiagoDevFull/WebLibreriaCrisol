<style>
    /* Color of the links BEFORE scroll */
    .navbar-scroll .nav-link,
    .navbar-scroll .navbar-toggler-icon,
    .navbar-scroll .navbar-brand {
        color: #fff;
    }

    /* Color of the links AFTER scroll */
    .navbar-scrolled .nav-link,
    .navbar-scrolled .navbar-toggler-icon,
    .navbar-scrolled .navbar-brand {
        color: #fff;
    }

    /* Color of the navbar AFTER scroll */
    .navbar-scroll,
    .navbar-scrolled {
        background-color: #cbbcb1;
    }

    .mask-custom {
        backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, .15);
    }

    .navbar-brand {
        font-size: 1.75rem;
        letter-spacing: 3px;
    }
</style>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mask-custom shadow-0 bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#!"><span style="color: #5e9693;">Librería</span><span
                    style="color: #190bda;">Crisol</span></a>
            <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalogo">Catálogo</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            Carrito
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Iniciar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">DNI: </label>
                    <input type="text" class="form-control" placeholder="Ingrese su DNI" aria-label="DNI">
                    <label for="">Contraseña: </label>
                    <input type="password" class="form-control" placeholder="Ingrese su contraseña"
                        aria-label="Contraseña">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Acceder</button>
                </div>
            </div>
        </div>
    </div>

</header>

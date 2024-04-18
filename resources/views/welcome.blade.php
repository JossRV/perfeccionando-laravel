<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pruebas</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Opciones
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Acciones</a></li>
                                <li><a class="dropdown-item" href="#">Otras Acciones</a></li>
                                <li>
                                    {{-- divididor --}}
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Otras Pruebas</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="display-4">Prueba de bootstrap</div>
                </div>
            </div>
        </div>
    </section>
    <footer></footer>
</body>

</html>

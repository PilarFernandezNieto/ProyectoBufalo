<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Electric Buffalo | Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="stylesheet" href="/build/css/app.css.map">
    <link rel="stylesheet" href="/build/css/sidebars.css">
    <script src="/build/js/jquery-3.7.1.min.js"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>
</head>

<body class="panel-admin">


    <main class="barra-lateral">
        <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;">
            <a href="/index.php" class=>The Electric Buffalo</a>
            <p>Panel Administrador</p>
            <hr>

            <ul class="nav nav-pills flex-column mb-auto listado-crud">
                <li>
                    <a href="/admin/noticias/listado_noticias.php" class="nav-link" aria-current="page">
                        Noticias
                    </a>
                </li>
                <li>
                    <a href="/historia.php" class="nav-link">
                        Usuarios
                    </a>
                </li>
                <li>
                    <a href="/" class="nav-link">
                        Contenidos destacados
                    </a>
                </li>
                <li>
                    <a href="/" class="nav-link">Músicos</a>
                </li>
                <li>
                    <a href="/" class="nav-link">Productos</a>
                </li>
            </ul>
            <hr>

            <div class="dropdown sidebar-footer">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow ventana" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </main>
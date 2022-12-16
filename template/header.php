<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G4S Colombia</title>
    <!--importacion de la libreria de bootstrap via @CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Importacion de los estilos personalizados-->
    <link rel="stylesheet" href="./styles/inicioStyle.css">

    <!--Importacion de los estilos personalizados-->
    <link rel="stylesheet" href="./styles/pagina2Style.css">

    <!--Importacion de libreria de iconos para Logo Whatsapp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <!--Declaracion de la barra de navegacion con 3 elementos-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-body">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img width="60" src="./assets/G4S_One-Company_Logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active text-danger" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="https://www.g4s.com/es-co">G4S
                                Colombia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="https://sites.google.com/view/g4s-site-de-bienestar/inicio">G4S Bienestar</a>
                        </li>
                    </ul>
                    <a href="formPage.php">
                        <button class="btn btn-danger" type="submit">Haz una
                            PQR</button></a>
                    <a class="ms-1" href="formPage.php#consultar">
                        <button class="btn btn-dark" type="submit">consultas de PQR</button></a>
                    <a class="ms-1" href="adminLogin.php">
                        <button class="btn btn-outline-success" type="submit">Admin</button></a>
                </div>
            </div>
        </nav>
    </header>
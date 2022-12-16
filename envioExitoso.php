<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Envio Exitoso</title>
    <!--importacion de la libreria de bootstrap via @CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Importacion de los estilos personalizados-->
    <link href="./styles/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="text-center">Con el siguiente número usted podrá consultar el estado de su solicitud.</h3>
                <h4>Ticket #<?php echo $_GET['ticket'] ?> </h4>
            </div>
        </header>

        <main class="px-3">
            <h1>Su solicitud ha sido enviada satisfactoriamente</h1>
            <br>
            <p class="lead">Para nosotros es muy importante atender su solicitud con el mayor cuidado posible. En menos de 5 días hábiles recibirá respuesta al correo suministrado: <strong><?php echo $_GET["correo"] ?></strong></p>
            <p class="lead">
                <a href="index.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Página principal</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Gestion Humana G4S Colombia</p>
        </footer>
    </div>

</body>

</html>
<?php include 'template/adminModuleHeader.php' ?>

<section class="vh-50" style="background-color: white;">
    <!-- Alerta para informar al usuario que el usuario o password es invalido -->
    <?php
    if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'invalido') {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error:</strong> usuario o contraseña incorrecto.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }

    ?>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card my-2" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="./assets/login-picture.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form action="./auth/autenticacionUsuario.php" method="POST">
                                    <div class="d-flex align-items-center mb-5 pb-1">
                                        <i class="fas fa-cubes fa-2x" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Modulo administrativo de PQRS</span>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="txtusuario">Nombre de usuario</label>
                                        <input type="text" name="txtUsuario" class="form-control form-control-lg" autofocus required>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="txtPassword">Contraseña</label>
                                        <input type="password" name="txtPassword" class="form-control form-control-lg" autofocus required>
                                    </div>

                                    <div class="pt-1 mb-4 d-flex align-items-center">
                                        <input type="submit" class="btn btn-dark mb-2" value="Ingresar">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'template/adminModuleFooter.php' ?>
<?php include './template/header.php' ?>

<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 text-center main-section">
        <img class="bg-main-section" width="100%" height="100%" src="./assets/G4S-392 COLORED.JPG" alt="">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal text-light">Peticiones, Quejas y Reclamos</h1>
            <p class="lead fw-normal mb-2 text-dark">Bienvenido a la sección de <span class="text-danger">PQR's</span> de
                gestion
                humana <span class="text-danger"> G4S Colombia.</span> Cuentanos tus inquietudes y estaremos
                dispuestos a atenderte con nuestro mayor compromiso. Tenga en cuenta las <span class="text-danger">
                    definciones</span> antes de realizar tu PQR.</p>
            <a class="btn btn-outline-dark" href="#definiciones">Definiciones</a>
            <a class="btn btn-outline-light" href="#form-title">Tu PQR empieza aquí</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    <div id="form-title" style="height: 80px;"></div>

    <div class="container marketing py-5 p-5 bg-dark bg-opacity-10 rounded-2">
        <h1 class="mb-3 text-center">Haz tu PQR</h1>
        <form action="createPQR.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="txtEmail" placeholder="nombre@ejemplo.com" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Número de identificacion</label>
                <input type="number" class="form-control" name="txtIdentificacion" placeholder="C.C/Pasaporte/T.I" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Selecciona el tipo de tu solicitud</label>
                <select name="txtTipo" class="form-select mb-3" required>
                    <option selected value="Peticion">Petición</option>
                    <option value="Queja">Queja</option>
                    <option value="Reclamo">Reclamo</option>
                </select>
                <textarea class="form-control mb-3" name="txtAsunto" rows="3" required></textarea>
                <div class="text-center">
                    <input type="submit" class="btn btn-danger" value="Enviar">
                </div>
            </div>
        </form>
    </div>
    <hr class="container featurette-divider mt-5">

    <div id="consultar" style="height: 80px;"></div>
    <div class="container card p-5">
        <form action="consultarEstado.php" method="POST">
            <!-- Inicio de Alerta para validaciones en consulta de PQR -->
            <?php
            if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'PQR_encontrada') {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>PQR encontrada:</strong> La PQR realizada en la fecha <?php echo $_GET['fecha'] ?> se encuentra en estado: <strong> <?php echo $_GET['estado'] ?></strong>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'PQR_no_encontrada') {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error:</strong> No se encuentra en el sistema una PQR asociada a su número de identificación.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

            <h1 class="text-center">Consulta el estado de tu PQR</h1>
            <div class="form-group mb-5">
                <label for="identificacion"> <strong>Numero de Ticket</strong> </label>
                <input type="number" class="form-control" id="identificacion" placeholder="Ejemplo: 40" name="txtTicket" required>
                <small id="emailHelp" class="form-text text-muted">No compartimos ni guardamos su número de identificación con terceros.</small>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger text-center">Consultar</button>
            </div>
        </form>


    </div>



    <div id="definiciones" style="height: 80px;"></div>


    <div class="container">
        <h1 class="text-center">Definiciones</h1>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Tus<span class="text-danger">&nbspPeticiones&nbsp</span> son un
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Derecho reconocido por la Constitución a los ciudadanos, en virtud
                        del cual estos pueden dirigirse a las autoridades en
                        demanda de algo que estimen justo y conveniente. Toda persona tiene derecho a presentar una
                        petición de conformidad con el artículo 23 de la Constitución Política y los artículos 5to.
                        y siguientes del Código Contencioso Administrativo.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Tus<span class="text-danger">&nbspQuejas&nbsp</span> son un
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Malestar o descontento por un servicio no prestado oportuna o
                        eficazmente por una entidad. Manifestación de inconformidad sobre la conducta o acción
                        irregular en la prestación servicios.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Tus<span class="text-danger">&nbspReclamos&nbsp</span> son un
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Derecho que tiene todo ciudadano de exigir o demandar solución
                        referente a la atención inadecuada u omisión de la prestación del servicio. Es la manera de
                        exigirle a la entidad que corrija la situación que im atropella el ejercicio de los derechos
                        o que mejore la calidad de un servicio. Manifestación sobre la pres irregular de un servicio
                        o sobre la deficiente atención.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gradient">
        <div class="container px-2 py-5" id="featured-3">
            <h1 class="pb-2 border-bottom text-center">Tambien puedes comunicarse con nosotros</h1>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-2 text-center">
                <div class="feature col ">
                    <img width="100%" src="./assets/G4S-207.JPG">
                    <h3 class="fs-2">Departamento de Gestion Humana</h3>
                    <p>Contacte con uno de nuestros especialistas</p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        tel:+57 300 5296003
                    </a>
                </div>
                <div class="feature col">
                    <img width="100%" src="./assets/G4S-189.JPG">
                    <h3 class="fs-2">Envianos un correo</h3>
                    <p>Escribanos un correo electronico, con mucho gusto estaremos dispuestos a atender su solicitud
                        en
                        el menor tiempo posible.</p>
                    <a href="mailto:javier.redondo@co.g4s.com" target="_blank" class="icon-link d-inline-flex align-items-center">
                        javier.redondo@co.g4s.com
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include './template/footer.php' ?>
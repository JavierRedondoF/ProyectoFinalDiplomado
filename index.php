<?php include 'template/header.php' ?>

<main>
    <!--Declaracion del Carousel utilizando plantillas de bootstrap-->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!--Primer elemento del Carousel-->
            <div class="carousel-item active">
                <img class="bd-placeholder-img slides" width="100%" height="100%" src="./assets/G4S-187.JPG">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>G4S es <span class="text-danger">Bienestar</span></h1>
                        <p>Nuestros valores se encuentran encaminados a entregar crecimiento sostenible y rentable
                        </p>
                        <p><a class="btn btn-lg btn-light" href="#valores">Conócelos</a></p>
                    </div>
                </div>
            </div>
            <!--Segundo elemento del Carousel-->
            <div class="carousel-item">
                <img class="bd-placeholder-img slides" width="100%" height="100%" src="./assets/G4S-392.JPG">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="text-light "><span class="text-danger">P</span>eticiones <span class="text-danger">Q</span>uejas y <span class="text-danger">R</span>eclamos</h1>
                        <p class="text-light bg-dark bg-opacity-25">Desde nuestra web
                            puedes
                            acceder a nuestra plataforma de
                            PQRs
                            en donde
                            podras generar tu petición y con gusto te atenderemos.</p>
                        <p><a class="btn btn-lg btn-light" href="./pagina2.html#form-title">Hazla aquí</a></p>
                    </div>
                </div>
            </div>
            <!--Tercer elemento del Carousel-->
            <div class="carousel-item">
                <img class="bd-placeholder-img slides" width="100%" height="100%" src="./assets/G4S-316.JPG" alt="">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Departamento de Gestion Humana Colombia - G<span class="text-danger">4</span>S</h1>
                        <p class="text-light bg-dark bg-opacity-25">En G4S nos preguntamos constantemente cómo
                            podemos diferenciarnos de los demás en todo lo
                            que hacemos.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Boton para pasar a la anterior slide-->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!--Boton para pasar a la siguiente slide-->
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container marketing">
        <!--Tres columnas de informacion debajo del Carousel-->
        <div id="valores" style="height: 80px;"></div>
        <h1 class="text-center mb-5">Nuestros valores como gestores del telento humano</h1>
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle mb-4" width="140" height="140" src="./assets/G4S-385.JPG">
                <p>Actuamos con <span class="text-danger">Integridad</span> y <span class="text-danger">Respeto</span></p>
            </div>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle mb-4" width="140" height="140" src="./assets/G4S-405.JPG">
                </img>
                <p>Nos apaciona la <span class="text-danger">Seguridad</span> y la <span class="text-danger">Excelencia en el servicio</span></p>
            </div>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle mb-4" width="140" height="140" src="./assets/G4S-211.JPG">
                <p>Logramos esto a través de la <span class="text-danger">Innovación</span> y <span class="text-danger">Trabajo en equipo</span></p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div id="social" style="height: 80px;"></div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Responsabilidad social. <span class="text-muted">Eso
                        sí es G4S.</span></h2>
                <p class="lead">En G4S estamos convencidos de que tener una compañía sana y feliz es la mejor manera
                    de crear pequeñas semillas de
                    cambio que nos permitan mejorar, no solo a nivel profesional, sino también a nivel personal.

                    En nuestra compañía queremos que te sientas cómodo y satisfecho con tu trabajo, contando con la
                    plena seguridad de que
                    estás respaldado por una empresa seria, exitosa y con muchas oportunidades para ti. Bienvenido/a
                    a la sección "G4S Sana
                    y Felíz".</p>
            </div>
            <div class="col-md-5">
                <img class="slides bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./assets/csr 2021.JPG" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </img>
            </div>
        </div>

        <hr class="featurette-divider">
        <div id="cifras" style="height: 80px;"></div>

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class=" fw-normal lh-1">G4S <span class="text-muted">en cifras</span></h2>
                <p class="lead">Se ha destacado por mantener unos altos niveles de satisfacción desde la primera
                    Encuesta de Satisfacción de Empleados
                    realizada en el año 2009.

                    Continuamos trabajando para mejorar estos resultados porque sabemos que esto nos garantiza estar
                    ahí para nuestros
                    trabajadores y clientes.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./assets/g4s cifras.png" width="500" height="500" alt="">

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette fw-normal">Te apasionan los retos?
                    <span class="text-muted">Trabaja con nosotros.</span>
                </h2>
                <p class="lead">Somos un equipo que salvaguarda el bienestar y la prosperidad de millones de
                    personas alrededor del mundo. Contamos con el apoyo de más de 600.000 colaboradores en más de
                    100 países, esto nos hace la empresa de seguridad indiscutible a nivel mundial. Te ofrecemos una
                    carrera desafiante y llena de retos que te van a ayudar a crecer en todos los ámbitos. Únete a
                    esta
                    gran familia.</p>
            </div>
            <div class="embed-responsive embed-responsive-1by1 col-md-5">
                <iframe class="embed-responsive-item" height="100%" width="100%" src="https://www.youtube.com/embed/sLaRMlsOrvw" allow="fullscreen"></iframe>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php' ?>
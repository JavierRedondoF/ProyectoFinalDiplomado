<?php include './template/adminModuleHeader.php' ?>

<?php
include_once './model/connection.php';
$sentencia = $bd->query("SELECT * FROM PQR");
$pqr = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Inicio de Alerta para validaciones -->
                <?php
                if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'autenticado') {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Usuario autenticado:</strong> Inicio de sesion exitoso.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
                ?>

                <?php
                if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'set_resuelta') {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Cambio de estado:</strong> PQR ha cambiado su estado a 'Resuelta'.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
                ?>

                <?php
                if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'set_pendiente') {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Cambio de estado:</strong> PQR ha cambiado su estado a 'Pendiente'.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
                ?>

                <!-- Fin de espacio para alertas -->
                <div class="card">
                    <div class="card-header text-center">
                        <strong>Listado de PQRS</strong>
                    </div>
                    <div class="p-4">
                        <div class="table-responsive align-middle">
                            <table class="table">
                                <thead>
                                    <tr class="text-center">
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Tipo</th>
                                        <th style="width: 100px;" scope="col">Fecha</th>
                                        <th scope="col">Asunto</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" colspan="3">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Se llena la tabla html con hijos <td> como usuarios existan en la bd -->
                                    <?php
                                    foreach ($pqr as $dato) {
                                    ?>
                                        <tr class="">
                                            <td><?php echo $dato->CEDULA; ?></td>
                                            <td><?php echo $dato->TIPO; ?></td>
                                            <td><?php echo $dato->FECHA; ?></td>
                                            <td><?php echo $dato->ASUNTO; ?></td>
                                            <td class="text-center"><?php echo $dato->ESTADO; ?></td>
                                            <td class="text-center text-success"><a title="Marcar como Resuelta" href="setEstado.php?action=Resuelta&codigo=<?php echo $dato->ID; ?>"><i class="bi bi-clipboard-check text-success"></i></a></td>
                                            <td><a title="Marcar como Pendiente" href="setEstado.php?action=Pendiente&codigo=<?php echo $dato->ID; ?>"><i class="bi bi-hourglass-split text-danger"></i></a></td>
                                            <td><a title="Responder" href="mailto:<?php echo $dato->CORREO; ?>" target="_blank"><i class="bi bi-envelope text-primary"></i></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</main>

<?php include './template/adminModuleFooter.php' ?>
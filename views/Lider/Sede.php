<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="#">Lider</a></li>
        <li class="breadcrumb-item active">Ambientes de Formacion</li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header ">
                <i class="fa fa-align-justify"></i> Ambientes de Formacion <button type="button" class="btn btn-primary "
                    data-toggle="modal" data-target="#Agregar">
                    <i class="icon-plus "></i>&nbsp;Nuevo
                </button>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableAmbiente">
                    <thead>
					<tr class="success">
                            <th>Sede</th>
                            <th>Direccion</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody>
                    <?php foreach ($data['sede'] as $sede) { ?>
                        <tr>
                            <td>
                                <?php echo $sede->name_sede; ?>
                            </td>
                            <td>
                                <?php echo $sede->direccion; ?>
                            </td>
                            <td class="text-center">
                            <div class="updateDataSede" data-toggle="modal" data-target="#Actualizar_Ambiente"
                            id-Sede="<?php echo $sede->id_sede; ?>">
										<i class="far fa-edit fa-lg"></i>
									</div>
								</td>
                        </tr>
                        <?php
						}
					?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
    </div>
    <!-- Fin del modal Eliminar -->
</main>
<!-- /Fin del contenido principal -->
</div>

<!-- Modal Agregar nueva Competencias-->
<div class="modal fade  bd-example-modal-lg" id="Agregar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-11">
                <h3 class="modal-title text-center">Agregar Nueva Sede</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <form method="post" action="insertarSede" class="form-signin form-modal">
                    <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Sede de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4>Sede</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="name_sede" id="name_sede" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Nombre de la sede</small>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 >Dirreccion</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="direccion" id="direccion" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Dirreccion de sede</small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center pt-2">
                            <button class="btn-rounded " type="submit">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Actualizar -->
<div class="modal fade bd-example-modal-lg" id="Actualizar_Ambiente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-11">
                    <h3 class=" modal-title text-center">Actualizar Datos</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center ">
                    <form method="post" action="updateDataSede" class="form-signin form-modal">
                    <div class="container-fluid">
                            <div class="row pt-4">
                                <div class="col-12">
                                    <h3> Sede de Formacion</h3>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4>Sede</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input id="txt_upd_id_sede" type="number" name="txt_upd_id_sede" value="" hidden>
                                    <input type="text" name="txt_upd_name_sede" id="txt_upd_name_sede" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Nombre de la sede</small>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-4 col-12">
                                    <h4 >Dirreccion</h4>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <input type="text" name="txt_upd_direccion" id="txt_upd_direccion" class="form-control">
                                    <small id="helpIdNumFicha" class="text-muted">Dirreccion de sede</small>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center pt-2">
                            <button class="btn-rounded " type="submit">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $(".statusChange").click(function () {
            var statetext = $(this).attr('name-state');
            var state_id = $(this).attr('id-state');
            var id_programa = $(this).attr('id-programa');
            $.ajax({
                type: 'POST',
                url: '?c=Lider&m=changeStatusPrograma',
                data: {
                    statetext: statetext,
                    state_id: state_id,
                    id_programa: id_programa
                },
                success(response) {
                    location.reload();
                }
            });
        });

    });

    $(".updateDataSede").click(function () {
            var idSede = $(this).attr('id-Sede');
            console.log(idSede);
            $.ajax({
                type: 'POST',
                url: 'getDataSede',
                dataType: "json",
                data: {
                    id: idSede
                },
                success(response) {
                    console.log(response);
                    var sede = jQuery.parseJSON(JSON.stringify(response));
                    console.log(sede);
                    $('#txt_upd_id_sede').val(sede.id_sede);
                    $('#txt_upd_name_sede').val(sede.name_sede);
                    $('#txt_upd_direccion').val(sede.direccion);
                }
            });
        });
</script>
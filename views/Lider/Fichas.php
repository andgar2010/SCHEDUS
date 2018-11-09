<?php // var_dump($data);?>
<div class="col-lg-9 col-md-12 col-12">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-center my-4">Administrar Fichas de programas de formación</h4>
			<hr>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mt-2">
			<div data-toggle="modal" data-target="#Agregar_Ficha" class=" text-center">
				<button class="btn-rounded"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Agregar Nueva Ficha</button>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-12 mt-2">
			<div data-toggle="modal" data-target="#Agregar_Grupo" class="text-center" id="btnAgregarGrupo">
				<button class="btn-rounded"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Agregar Nuevo Grupo</button>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-12 mt-2">
			<div data-toggle="modal" data-target="#Fusionar" class=" text-center">
				<button class="btn-rounded"><i class="fas fa-compress-alt fa-lg"></i>&nbsp;&nbsp;Fusionar</button>
			</div>
		</div>
	</div>
	<div class="mt-5 row d-flex justify-content-center">
		<div class="container table-responsive">
			<table class=" table table-hover table-condensed text-center" id="tableFichas">
				<thead>
					<tr>
						<th>Ficha</th>
						<th>Programa</th>
						<th>Nivel</th>
						<th>Estado</th>
						<th>Editar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['fichas'] as $ficha) { ?>
					<tr>
						<td>
							<?php echo $ficha->num_ficha; ?>
						</td>
						<td>
							<?php echo $ficha->name_programa_formacion; ?>
						</td>
						<td>
							<?php echo $ficha->name_nivel_programa_formacion; ?>
						</td>
						<td>
							<?php
								switch ($ficha->name_estado_ficha) {
									case 'Cancelado':
										echo '<div class="p-2 bg-danger text-white rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									case 'Completado':
										echo '<div class="p-2 bg-info text-white rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									case 'En formación':
										echo '<div class="p-2 bg-success text-white rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									case 'Pendiente Asignado':
										echo '<div class="p-2 bg-warning text-dark rounded">' . $ficha->name_estado_ficha . '</div>';
									break;
									default:
										echo '<div class="p-2 bg-dark text-white rounded">No pudo obtener estado de formacion ' . $ficha->name_estado_ficha . '</div>';
									break;
								}?>
						</td>
						<td style="padding-bottom: 0px;padding-top: 10px;">
							<div class="updateDataFicha" data-toggle="modal" data-target="#updateDataFicha" id-ficha="<?php echo $ficha->id_ficha; ?>">
								<i class="far fa-edit fa-lg"></i>
							</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
</div>
</div>

<!-- Modal Agregar nueva Ficha-->
<div class="modal fade" id="Agregar_Ficha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Agregar Nueva Ficha</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="?c=Lider&m=insertarFicha" class="form-signin">
						<div class="form-group">
							<h4>Numero de la Ficha</h4>
							<input type="text" name="num_ficha" id="num_ficha" class="form-control adsi-css" aria-describedby="helpIdNumFicha">
							<small id="helpIdNumFicha" class="text-muted">Numero de la ficha</small>
						</div>
						<div class="form-group">

						<h4>Programa:</h4>
						<select class="adsi-css mb-3" name="cod_programa_formacion" required>
							<option value="">Programas</option>
							<?php foreach ($data['programaFormacion'] as $programa) { ?>
							<option value="<?php echo $programa->id_programa_formacion; ?>">
								<?php echo $programa->name_programa_formacion; ?>
							</option>
							<?php } ?>
						</select>
						</div>

						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Insertar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL Agregar nueva Ficha -->


<!-- Modal actualizar datos de Ficha-->
<div class="modal fade" id="updateDataFicha" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Editar datos de ficha</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="POST" action="?c=Lider&m=updateFicha" class="form-signin">
							<table>
								<tr>
									<td>
										<label for="txt_num_ficha">Numero de la Ficha</label>
										<small id="helpIdNumFicha" class="text-muted">Help text</small>
									</td>
									<td>
										<input type="text" name="txt_num_ficha" id="txt_num_ficha" class="adsi-css" aria-describedby="helpIdNumFicha" readonly>
									</td>
								</tr>
								<tr>
									<td>
										<h4><label for="txt_num_ficha">Grupo:</label></h4>
										<small id="helpIdNumFicha" class="text-muted">Help text</small>
									</td>
									<td>
										<select class="adsi-css mb-3" required>
											<option value="">Grupo</option>
											<?php foreach ($data['grupos'] as $grupo) { ?>
											<option value="<?php echo $grupo->num_grupo; ?>"><?php echo $grupo->num_grupo . $grupo->version; ?></option>
											<?php } ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Estado:</h4>
										<label for="txt_num_ficha"></label>
										<small id="helpIdNumFicha" class="text-muted">Help text</small>
									</td>
									<td>
										<select class="adsi-css mb-3" required>
										<option value="">Estado</option>
										<?php
										// TODO FIX GET ALL ESTADIO DE FICHA
										foreach ($data['programaFormacion'] as $programa) { ?>
										<option value="<?php echo $programa->id_estado_programa_formacion; ?>"><?php echo $programa->name_estado_programa_formacion; ?></option>
										<?php } ?>
									</select>
									</td>
								</tr>
								<tr>
									<td>
										<h4>Programa:</h4>
										<label for="txt_num_ficha">Programa:</label>
										<small id="helpIdNumFicha" class="text-muted">Help text</small>
									</td>
									<td>
										<select class="adsi-css mb-3" required>
											<option value="">Programas</option>
											<?php foreach ($data['programaFormacion'] as $programa) {
												//.' Codigo nivel de formacion: ' .$programa->cod_nivel_programa_formacion . ', Codigo estado de progarama: '. $programa->cod_estado_programa_formacion
												?>
											<option value="<?php echo $programa->id_programa_formacion; ?>"><?php echo $programa->name_programa_formacion . ' '. $programa->name_nivel_programa_formacion; ?></option>
											<?php } ?>
										</select>
									</td>
								</tr>
							</table>
							<div class="modal-body">
								<button class="btn-rounded" type="submit" style="width:110px">Actualizar</button>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Modal actualizar datos de Ficha-->

<!-- Modal Agregar nuevo Grupo-->
<div class="modal fade" id="Agregar_Grupo" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Agregar Nuevo Grupo</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="post" action="#" class="form-signin">
						<div class="form-group">
							<div class="form-group">

								<label for="id_ficha"><h5>Ficha</h5>
									<br/>
									<input type="text" name="id_ficha" list="id_ficha" class="adsi-css" placeholder="Número de ficha"/>
									<datalist id="id_ficha">
										<label> or select one from the list:
											<div id="form_select_ficha"></div>
										</label>
									</datalist>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Grupo</h5>
							<input type="text" class="adsi-css mb-3" style="width:80%; height:30px" name="dni" />
						</div>
						<hr>
						<button class="btn-rounded" type="submit" style="width:110px">Agregar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Modal Agregar nuevo Grupo-->

<!-- Modal Fusionar-->
<div class="modal fade" id="Fusionar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Fusionar Fichas</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form>
						<div class="row d-flex justify-content-center">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
								<h4>Ficha 1 :</h4>
								<select class="adsi-css" required>
									<option value="">Seleccione una ficha</option>
									<option value="tab">8975312</option>
									<option value="tab">1320652 G1</option>
									<option value="tab">1320652 G2</option>
									<option value="tab">1320652 G3</option>
									<option value="tab">1320652 G4</option>
									<option value="tab">2349858</option>
									<option value="tab">1320652 G1</option>
									<option value="tab">1320652 G2</option>
									<option value="tab">1320652 G3</option>
									<option value="tab">1878465</option>
									<option value="tab">1328798 G1</option>
									<option value="tab">1328798 G2</option>
									<option value="tab">1328798 G3</option>
								</select>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mb-5">
								<h4>Ficha 2 :</h4>
								<select class="adsi-css" required>
									<option value="">Seleccione una ficha</option>
									<option value="tab">8975312</option>
									<option value="tab">1320652 G1</option>
									<option value="tab">1320652 G2</option>
									<option value="tab">1320652 G3</option>
									<option value="tab">1320652 G4</option>
									<option value="tab">2349858</option>
									<option value="tab">1320652 G1</option>
									<option value="tab">1320652 G2</option>
									<option value="tab">1320652 G3</option>
									<option value="tab">1878465</option>
									<option value="tab">1328798 G1</option>
									<option value="tab">1328798 G2</option>
									<option value="tab">1328798 G3</option>
								</select>
							</div>
							<h5>Nueva ruta de Ficha</h5>
							<input type="text" class="adsi-css" style="width:60%; height:30px" name="dni" />
							<div class="col-12">
								<button class="mt-5 btn-rounded" type="submit" style="width:80px">Fusionar</button>
							</div>
						</div>
						<br>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Modal Fusionar-->

<script>
	function removeDuplicates(json_all) {
		var arr = [],
			collection = [];

		$.each(json_all, function (index, value) {
			if ($.inArray(value.id, arr) == -1) {
				arr.push(value.id);
				collection.push(value);
			}
		});
		return collection;
	};

	$(document).ready(function () {

	    $("#tableFichas").DataTable({
	        "language": {
	            "sProcessing": "Procesando...",
	            "sLengthMenu": "Mostrar _MENU_ registros",
	            "sZeroRecords": "No se encontraron resultados",
	            "sEmptyTable": "Ningún dato disponible en esta tabla",
	            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
	            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
	            "sInfoPostFix": "",
	            "sSearch": "Buscar:",
	            "sUrl": "",
	            "sInfoThousands": ",",
	            "sLoadingRecords": "Cargando...",
	            "oPaginate": {
	                "sFirst": "Primero",
	                "sLast": "Último",
	                "sNext": "Siguiente",
	                "sPrevious": "Anterior"
	            },
	            "oAria": {
	                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
	                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
	            }
	        },
	        "dom": // Insertar objeto tabla por formato:
	            // Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
	            "<'row'<'col-sm-6'f><'col-sm-6'l>>" +
	            // Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
	            "<'row'<'col-sm-12 table-responsive d-flex justify-content-center'tr>>" +
	            // Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
	            "<'row'<'col-sm-2'><'col-sm-10'i><'col-sm-3'><'col-sm-7'p>>" +
	            // Pie de la tabla -- B-> Botones de exportar
	            "<'row'<'col-sm-12'B>>",
	        buttons: [
	            'copy',
	            'excel',
	            'pdf'
	        ]
	        //buttons: [
	        //	'copyHtml5',
	        //	'excelHtml5',
	        //	'csvHtml5',
	        //	'pdfHtml5'
	        //]
	    });


		// Change status of ficha from button
	    $(".statusChange").click(function () {
	        var statetext = $(this).attr('name-state');
	        var state_id = $(this).attr('id-state');
	        var id_Ficha = $(this).attr('id-Ficha');
	        $.ajax({
	            type: 'POST',
	            url: '?c=Lider&m=changeStatusFicha',
	            data: {
	                statetext: statetext,
	                state_id: state_id,
	                id_Ficha: id_Ficha
	            },
	            success(response) {
	                location.reload();
	            }
	        });
	    });

		// get Data Ficha_ID form button -> Modal Form_update_ficha
	    $(".updateDataFicha").click(function () {
			var idFicha = $(this).attr('id-ficha');

	        $.ajax({
	            type: 'POST',
	            url:'?c=Lider&m=getDataFicha',
				data:{
					idFicha:idFicha
				},
	            success(response) {
					var ficha = jQuery.parseJSON(response);
					console.log(ficha);
					$('#txt_num_ficha').val(ficha.num_ficha);
	                // $('#text-nombre').val(ficha.nombre);
	                // $('#text-apellido').val(ficha.apellido);
	                // $('#text-email').val(ficha.email);
	            }
	        });
	    });

		// get Data form Button -> Modal Form input
	    $(".updateDataInstructor").click(function () {
	        var id_instructor = $(this).attr('id-instructor');
	        $.ajax({
	            type: 'POST',
	            url: '?c=Lider&m=getDataInstructor',
	            dataType: "json",
	            data: {
	                id_instructor: id_instructor
	            },
	            success(response) {
	                var instructor = jQuery.parseJSON(JSON.stringify(response));
	                $('#text-dni').val(instructor.dni);
	                $('#text-nombre').val(instructor.nombre);
	                $('#text-apellido').val(instructor.apellido);
	                $('#text-email').val(instructor.email);
	            }
	        });
	    });

		// Agregar nuevo grupo de ficha desde button agregar grupo
	    $("#btnAgregarGrupo").click(function () {
	        $.ajax({
	            type: 'POST',
	            url: '?c=lider&m=getAllDataFichas',
	            dataType: "json",
	            success(response) {
					var ficha = jQuery.parseJSON(JSON.stringify(response));
					console.log(ficha);
	                //var ficha = removeDuplicates(ficha);

	                var select = $("<select></select>").attr("id", "id_ficha").attr("name", "id_ficha").attr("class", "form-control");
	                $.each(ficha, function (i, json) {
						select.append($("<option></option>").attr("value", ficha[i].id_ficha).text(ficha[i].num_ficha));
	                });
	                $("#form_select_ficha").html(select);

	            }
	        });
		});

	});

</script>

<?php
if (!empty($data['msgType'])) {
    echo "<script>toastr." . $data['msgType']['type'] . "('" . $data['msgType']['msg'] . "','" . $data['msgType']['title'] . "')</script>";
}
?>
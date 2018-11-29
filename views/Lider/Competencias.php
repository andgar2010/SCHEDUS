<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Administrar competencias de programas de formación</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header ">
				<i class="fa fa-align-justify"></i> Administrar competencias de programas de formación
				<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalNewAgregarCompetencia">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-striped table-sm mt-5" id="tableCompetencia">
					<thead>
						<tr class="success">
							<th>Código de competencia</th>
							<th>Nombre de competencia</th>
							<th>Programa de formación</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['competencia'] as $competencia) {?>
						<tr>
							<td>
								<?php echo $competencia->codigo_competencia .' ' .$competencia->num_competencia2; ?>
							</td>
							<td>
								<?php echo $competencia->name_competencia; ?>
							</td>
							<td>
								<?php echo $competencia->name_programa_formacion; ?>
							</td>
							<td class="text-center">
								<div class="updateDataCompetencia" data-toggle="modal" data-target="#modalActualizarCompetencia" id-competencia="<?php echo $competencia->id_competencia; ?>">
									<i class="far fa-edit fa-lg"></i></div>
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
<div class="modal fade bd-example-modal-lg" id="modalNewAgregarCompetencia" tabindex="-1" role="dialog" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Agregar Nueva Competencia</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center ">
					<form method="post" action="insertarCompetencias" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-4 col-12">
									<h4>Seleccione el Programa</h4>
								</div>
								<div class="col-lg-8 col-12">
									<select class="form-control" name="cod_programa_formacion" id="selectNewListPrograma" style="width:100%" required></select>
									<small id="helpIdNumCompetencia" class="text-muted">Selecciona el Programa de Formacion</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4 for="">Código de competencia</h4>
								</div>
								<div class="col-lg-4 col-6">
									<input type="number" name="codigo_competencia" id="txt_cod_competencia1" class="form-control"  min="1" max="999999999" aria-describedby="helpIdNumCompetencia" required>
									<small id="helpIdNumCompetencia" class="text-muted">Escriba inicial 9 digitos del código de la competencia</small>
								</div>
								<div class="col-lg-4 col-6">
									<input type="number" name="num_competencia2" id="txt_cod_competencia2" class="form-control" aria-describedby="helpIdNumCompetencia" min="1" max="99999"  required>
									<small id="helpIdNumCompetencia" class="text-muted">Escriba últimos de 5 digitos del código de la competencia</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Nombre de la Competencia</h4>
								</div>
								<div class="col-lg-8 col-12">
									<textarea class="form-control" aria-label="With textarea" name="name_competencia" placeholder="Nombre de la Competencia" required></textarea>
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded" type="submit" >Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Actualizar nueva Competencias-->
<div class="modal fade  bd-example-modal-lg" id="modalActualizarCompetencia" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
				<form method="post" action="#" class="form-signin form-modal">
						<div class="container-fluid">
						<div class="row pt-4">
								<div class="col-lg-4 col-12">
									<h4>Seleccione el Programa</h4>
								</div>
								<div class="col-lg-8 col-12">
									<select class="form-control" name="cod_programa_formacion" id="selectUpdListPrograma" style="width:100%" required></select>
									<small id="helpIdNumCompetencia" class="text-muted">Selecciona el Programa de Formacion</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4 for="">Código de competencia</h4>
								</div>
								<div class="col-lg-4 col-6">
									<input type="number" id="txt_upd_cod_competencia1" class="form-control" name="txt_cod_competencia1" min="1" max="999999999" aria-describedby="helpIdNumCompetencia" readonly>
									<small id="helpIdNumCompetencia" class="text-muted">Inicial 9 digitos del código de la competencia</small>
								</div>
								<div class="col-lg-4 col-6">
									<input type="number" id="txt_upd_cod_competencia2" class="form-control" name="txt_cod_competencia2" aria-describedby="helpIdNumCompetencia" min="1" max="99999"  readonly>
									<small id="helpIdNumCompetencia" class="text-muted">Ultimos de 5 digitos del código de la competencia</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-4  col-12">
									<h4>Nombre de la Competencia</h4>
								</div>
								<div class="col-lg-8 col-12">
									<textarea id="txt_upd_name_comepetencia" class="form-control" aria-label="With textarea" placeholder="Nombre de la Competencia" required></textarea>
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded" type="submit">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /Fin del contenido principal -->

<script>
	$(document).ready(function () {

		$("#tableCompetencia").DataTable({
			"language": {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",
				"sInfo": "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty": "Registros del 0 al 0 de un total de 0 registros",
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
				"<'row'<'col-sm-4'><'col-sm-8'i><'col-sm-4'><'col-sm-6'p>>" +
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

	});

	$('#selectNewListPrograma').select2({
		theme: 'bootstrap4',
		ajax: {
			url: 'getDataProgramaFormacion',
			dataType: 'json',
			delay: 250,
			data: function (params) {
				return {
					q: params.term, // search term
					page: params.page
				};
			},
			processResults: function (data, params) {
				var data = $.map(data, function (obj) {
					obj.id = obj.id || obj.id_programa_formacion; // replace pk with your identifier
					obj.text = obj.text || obj.name_programa_formacion; // replace name with the property used for the text
					return obj;
				});

				return {
					results: data,
				};
			},
			cache: true
		},
		placeholder: $(this).attr('placeholder'),
		allowClear: Boolean($(this).data('allow_clear')),
		tags: true,
		dropdownParent: $("#modalNewAgregarCompetencia"),
	});


	// TODO FIX GETDATACOMPETENCIA TO MODALUPDATE
	// get Data Competencia_ID form button -> Modal Form_update_competencia
	$(".updateDataCompetencia").click(function () {
		var idCompetencia = $(this).attr('id-competencia');
		alert('Work');
		console.log(idCompetencia);

		// Call AJAX getDataCompetencia()
		$.ajax({
			type: 'POST',
			url: 'getDataCompetencia',
			data: {
				id: idCompetencia
			},
			success(response) {
				var competencia = jQuery.parseJSON(response);
				$('#txt_num_competencia').val(competencia.num_competencia);
				$('#txt_id_competencia').val(competencia.id_competencia);

				// $('txt_upd_cod_programa_formacion').val(competencia.cod_programa_formacion);
				$('txt_upd_cod_competencia1').val(competencia.codigo_competencia);
				$('txt_upd_cod_competencia2').val(competencia.num_competencia2);
				$('txt_upd_name_competencia').val(competencia.name_competencia);
				getDataProgramaFormacionToUpdSelect();


				// FUNCTION
				//
				// Call AJAX getDataProgramaFormacion() to SELECT ON FORM UPDATE
				function getDataProgramaFormacionToUpdSelect() {
					$('#selectUpdListPrograma').select2({
						theme: 'bootstrap4',
						ajax: {
							url: 'getDataProgramaFormacion',
							dataType: 'json',
							delay: 250,
							data: function (params) {
								return {
									q: params.term, // search term
									page: params.page
								};
							},
							processResults: function (data, params) {
								console.log(data);
								var data = $.map(data, function (obj) {
									obj.id = obj.id || obj.id_programa_formacion; // replace pk with your identifier
									obj.text = obj.text || obj.name_programa_formacion; // replace name with the property used for the text
									return obj;
								});

								return {
									results: data,
								};
							},
							cache: true
						},
						placeholder: $(this).attr('placeholder'),
						allowClear: Boolean($(this).data('allow_clear')),
						tags: true,
						dropdownParent: $("#modalActualizarCompetencia"),
					});

					// PRE-SELECTED selectUpdListPrograma
					// Fetch the preselected item, and add to the control
					var ProgramaFormacionSelect = $('#selectUpdListPrograma');
					// create the option and append to Select2
					var option = new Option(competencia.name_programa_formacion, competencia.cod_programa_formacion, true, true);
					ProgramaFormacionSelect.append(option).trigger('change');

					// manually trigger the `select2:select` event
					ProgramaFormacionSelect.trigger({
						type: 'select2:select'
					});
					// END PRE-SELECTED SelectUpdListEstadoCompetencia
				} //END getDataProgramaFormacionToUpdSelect()

				// END FUNCTIONS
			}
		}); // End Call AJAX getDataCompetencia()

	}); // End get Data Competencia_ID form button -> Modal Form_update_competencia



</script>

<main class="main">
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">Inicio</li>
		<li class="breadcrumb-item"><a href="#">Lider</a></li>
		<li class="breadcrumb-item active">Administrar programas de formación</li>
	</ol>
	<div class="container-fluid">
		<!-- Ejemplo de tabla Listado -->
		<div class="card">
			<div class="card-header">
				<i class="fa fa-align-justify"></i> Administrar Programas de Formación&nbsp;
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPrograma">
					<i class="icon-plus "></i>&nbsp;Nuevo
				</button>
			</div>
			<div class="card-body">
				<table class="table table-responsive-sm table-bordered table-striped table-sm mt-5" id="tableProgramas">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Siglas</th>
							<th>Programa</th>
							<th>Version</th>
							<th>Nivel</th>
							<th>Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($data['programaFormacion'] as $programaFormacion) { ?>
						<tr>
							<td>
								<?php echo $programaFormacion->codigo; ?>
							</td>
							<td>
								<?php echo  $programaFormacion->short_name_programa_formacion ;?>
							</td>
							<td>
								<?php echo $programaFormacion->name_programa_formacion; ?>
							</td>
							<td>
								<?php echo $programaFormacion->version_programa;?>
							</td>
							<td>
								<?php echo $programaFormacion->name_nivel_programa_formacion; ?>
							</td>
							<td class="text-center">
									<button
										type="button"
										id-programa="<?php echo $programaFormacion->id_programa_formacion; ?>"
										id-state="<?php echo $programaFormacion->id_estado_programa_formacion; ?>"
										name-state="<?php echo $programaFormacion->name_estado_programa_formacion; ?>"
										class="statusChange btn  <?php if ($programaFormacion->name_estado_programa_formacion == 'Activo') { echo "btn-success"; } else { echo "btn-danger";} ?>"
										data-toggle="tooltip"
										data-placement="right"
										title="Click cambia estado de programa de formación">
								<?php echo $programaFormacion->name_estado_programa_formacion; ?>
								</button>
								</td>
								<td class="text-center">
									<div class="updateDataProgramaFormacion" data-toggle="modal" data-target="#modalActualizarPrograma" id-programa="<?php echo $programaFormacion->id_programa_formacion; ?>">
										<i class="far fa-edit fa-lg"></i></div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin ejemplo de tabla Listado -->
	</div>
	<!-- Fin del modal Eliminar -->
</main>
<!-- /Fin del contenido principal -->
</div>

<!-- Modal Agregar nueva Programa-->
<div class="modal fade bd-example-modal-lg" id="modalAgregarPrograma" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Agregar Nuevo Programa</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="insertarProgramaFormacion" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3>Programa</h3>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_cod_programa">Código</h4>
								</div>
								<div class="col-lg-6 col-12">
									<input  type="number" id="txt_cod_programa"  class="form-control" name="txt_cod_programa" aria-describedby="helpCodPrograma" min="1" max="999999999" required>
									<small id="helpCodPrograma" class="form-text text-muted">Escriba código del programa (Máximo 10 digitos)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_short_name_programa">Siglas del programa</h4>
								</div>
								<div class="col-lg-6 col-12">
									<input type="text" id="txt_short_name_programa" class="form-control" name="txt_short_name_programa" aria-describedby="helpShortNamePrograma" pattern="[a-zA-Z]{1,5}" title="Escriba las siglas del programa(Unicamente letras, Máximo 5 caracteres)"  required>
									<small id="helpShortNamePrograma" class="form-text text-muted">Escriba las siglas del programa (Unicamente letras, Máximo 5 caracteres)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_name_programa_formacion">Nombre del programa</h4>
								</div>
								<div class="col-lg-6 col-12">
									<input type="text" name="txt_name_programa_formacion" id="txt_name_programa_formacion"class="form-control" aria-describedby="helpNameProgramaFormacion" pattern="([A-z0-9À-ž\s]){2,191}" title="Unicamente letras" required>
									<small id="helpNameProgramaFormacion" class="form-text text-muted">Escriba programa de formación(Unicamente letras)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_version_programa">Versión del programa</h4>
								</div>
								<div class="col-lg-6 col-12">
									<input type="text" id="txt_version_programa" class="form-control" name="txt_version_programa" aria-describedby="helpVersionPrograma" maxlength="10" title="Máximo 10 Caracteres" required>
									<small id="helpVersionPrograma" class="form-text text-muted">Escriba versión de formación(Máximo 10 Caracteres)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="SelectListNivelProgramaFormacion">Nivel</h4>
								</div>
								<div class="col-lg-6 col-12">
									<select id="SelectListNivelProgramaFormacion" name="txt_id_nivel_programa_formacion" style="width:100%" aria-describedby="helpSelectNivelProgramaFormacion" required ></select>
									<small id="helpSelectNivelProgramaFormacion" class="form-text text-muted">Selecciona nivel de formación</small>
								</div>
							</div>
						</div>
						<hr>
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-lg-6 col-md-12">
									<h3>Proyecto</h3>
								</div>
								<div class="col-lg-3 offset-lg-2 col-md-12">
								<?php //TODO FIX REDIRECT MODAL
								?>
									<a class="btn btn-primary" href="<?php echo APP_URL ?>lider/Proyecto"><i class="icon-plus "></i>&nbsp;Agregar nuevo proyecto</a>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_cod_proyecto">Nombre del proyecto</h4>
								</div>
								<div class="col-lg-6 col-12">
									<select id="SelectlistProyecto" class="form-control" name="txt_cod_proyecto"  style="width:100%" aria-describedby="helpSelectNameProyecto" required></select>
									<small id="helpSelectNameProyecto" class="form-text text-muted">Seleccione nombre del proyecto</small>
								</div>
							</div>
						</div>
						<div class="text-center pt-2">
							<button class="btn-rounded " type="submit">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Modal Agregar nueva Programa-->


<!-- Modal Actulizar datos Programa de formación-->
<div class="modal fade bd-example-modal-lg" id="modalActualizarPrograma" tabindex="-1" role="dialog" aria-hidden="">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<div class="col-11">
					<h3 class="modal-title text-center">Actualizar datos de Programa de formación</h3>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center">
					<form method="post" action="updateDataProgramaFormacion" class="form-signin form-modal">
						<div class="container-fluid">
							<div class="row pt-4">
								<div class="col-12">
									<h3>Programa</h3>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_upd_cod_programa">Código</h4>
								</div>
								<div class="col-lg-6 col-12">
									<input type="number" id="txt_upd_id_programa" name="txt_upd_id_programa" hidden>
									<input type="number" id="txt_upd_cod_programa" class="form-control" name="txt_upd_cod_programa" aria-describedby="helpUpdCodPrograma"  min="1" max="999999999" title="Codigo del programa" readonly>
									<small id="helpUpdCodPrograma" class="form-text text-muted">Codigo del programa</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_upd_short_name_programa">Siglas del programa</h4>
								</div>
								<div class="col-lg-6 col-12">
									<input type="text" id="txt_upd_short_name_programa"class="form-control" name="txt_upd_short_name_programa" aria-describedby="helpUpdShortNamePrograma" pattern="[a-zA-Z]{1,5}" title="Unicamente letras, Máximo 5 caracteres" required >
									<small id="helpUpdShortNamePrograma" class="form-text text-muted">Escriba las siglas del programa(Unicamente letras, Máximo 5 caracteres)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_upd_name_programa_formacion">Nombre del Programa</h4>
									</div>
								<div class="col-lg-6 col-12">
									<input type="text" id="txt_upd_name_programa_formacion" class="form-control" name="txt_upd_name_programa_formacion" aria-describedby="helpUpdNameProgramaFormacion" pattern="([A-z0-9À-ž\s]){2,191}" title="Unicamente letras" required>
									<small id="helpUpdNameProgramaFormacion" class="form-text text-muted">Escriba programa de formación(Unicamente letras)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_upd_version_programa">Versión del programa</h4>
									</div>
								<div class="col-lg-6 col-12">
									<input type="text" id="txt_upd_version_programa"class="form-control" name="txt_upd_version_programa" aria-describedby="helpUpdVersionPrograma" maxlength="10" title="Máximo 10 Caracteres" required>
									<small id="helpUpdVersionPrograma" class="form-text text-muted">Escriba versión de formación(Máximo 10 Caracteres)</small>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="txt_upd_id_nivel_programa_formacion">Nivel</h4>
									</div>
								<div class="col-lg-6 col-12">
									<select id="SelectListUpdNivelProgramaFormacion" class="form-control" name="txt_upd_id_nivel_programa_formacion" style="width:100%" aria-describedby="helpUpdSelectNivelProgramaFormacion" required>
									</select>
									<small id="helpUpdSelectNivelProgramaFormacion" class="form-text text-muted ">Seleccione nivel de formación</small>
								</div>
							</div>
						</div>
						<hr>
						<div class="container-fluid">

							<div class="row pt-4">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<h3>Proyecto</h3>
								</div>
								<div class="col-lg-3 offset-lg-2 col-md-6 col-sm-6 col-xs-6">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
										<i class="icon-plus "></i>&nbsp;Agregar nuevo proyecto
									</button>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-lg-3 offset-lg-2 col-md-8 ">
									<h4 for="SelectListUpdProyecto">Nombre del proyecto</h4>
								</div>
								<div class="col-lg-6 col-12">
									<select id="SelectListUpdProyecto" class="form-control" name="txt_upd_cod_proyecto"  style="width:100%" aria-describedby="helpUpdSelectNameProyecto" required></select>
									<small id="helpUpdSelectNameProyecto" class="form-text text-muted">Seleccione nombre del proyecto</small>
								</div>
							</div>
						</div>
						<hr>
						<div class="text-center pt-2">
							<button class="btn-rounded " type="submit" >Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
	//
	// ─── CALL AJAX GETDATANIVELPROGRAMAFORMACION TO SELECT ───────────
	//
		$('#SelectListNivelProgramaFormacion').select2({
			theme: 'bootstrap4',
			ajax: {
				url: APP_URL + 'lider/getDataNivelProgramaFormacion',
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
						obj.id = obj.id || obj.id_nivel_programa_formacion; // replace pk with your identifier
						obj.text = obj.text || obj.name_nivel_programa_formacion; // replace name with the property used for the text

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
			dropdownParent: $("#modalAgregarPrograma"),
		});
	//
	// ─── END CALL AJAX GETDATANIVELPROGRAMAFORMACION TO SELECT ───────────
	//


	//
	// ─── CALL AJAX GETDATAPROYECTO TO SELECT ─────────────────────────
	//
		$('#SelectlistProyecto').select2({
			theme: 'bootstrap4',
			ajax: {
				url: 'getDataProyecto', // url: APP_URL+'lider/getDataProyecto',
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
						obj.id = obj.id || obj.id_proyecto; // replace pk with your identifier
						obj.text = obj.text || obj.name_proyecto; // replace name with the property used for the text

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
			dropdownParent: $("#modalAgregarPrograma"),
		});
	//
	// ─── END CALL AJAX GETDATAPROYECTO TO SELECT ─────────────────────
	//


	//
	// ─── CALL GETDATAPROGRAMA FOR DATA UPDATE ────────────────────────
	//
		$(".updateDataProgramaFormacion").click(function(){
			var id_programa = $(this).attr('id-programa');
			//console.log(id_programa);

			$.ajax({
				type:'POST',
				url:'getDataProgramaFormacion',
				dataType:"json",
				data:{
					id:id_programa
				},
				success(response){
					var programa  = jQuery.parseJSON(JSON.stringify(response));
					console.log(programa);
					$('#txt_upd_id_programa').val(programa.id_programa_formacion);
					$('#txt_upd_cod_programa').val(programa.codigo);
					$('#txt_upd_short_name_programa').val(programa.short_name_programa_formacion);
					$('#txt_upd_name_programa_formacion').val(programa.name_programa_formacion);
					$('#txt_upd_version_programa').val(programa.version_programa);
					$('#SelectListUpdNivelProgramaFormacion').val(programa.id_nivel_programa_formacion);
					$('#SelectListUpdProyecto').val(programa.id_proyecto);


					// Call AJAX getDataUpdNivelProgramaFormacion to SELECT
					$('#SelectListUpdNivelProgramaFormacion').select2({
						theme: 'bootstrap4',
						ajax: {
							url: 'getDataNivelProgramaFormacion',
							dataType: 'json',
							delay: 250,
							data: function (params) {
								return {
									q: params.term, // search term
									page: params.page
								};
							},
							processResults: function (data, params) {
								//console.log(data);
								var data = $.map(data, function (obj) {
									obj.id = obj.id || obj.id_nivel_programa_formacion; // replace pk with your identifier
									obj.text = obj.text || obj.name_nivel_programa_formacion; // replace name with the property used for the text

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
						dropdownParent: $("#modalActualizarPrograma"),
					});


					// Call AJAX getDataProyecto to SELECT-UPD
					$('#SelectListUpdProyecto').select2({
						theme: 'bootstrap4',
						ajax: {
							url: 'getDataProyecto',
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
									obj.id = obj.id || obj.id_proyecto; // replace pk with your identifier
									obj.text = obj.text || obj.name_proyecto; // replace name with the property used for the text

									if (obj.id_proyecto == programa.id_proyecto) {
										obj.selected = true;
									}
									//console.log(data);
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
						dropdownParent: $("#modalActualizarPrograma"),


					}); //END Call AJAX getDataProyecto to SELECT-UPD



					// PRE-SELECTED selectUpdProyecto
						// Fetch the preselected item, and add to the control
						var proyectoSelect = $('#SelectListUpdProyecto');
						// create the option and append to Select2
						var option = new Option(programa.name_proyecto, programa.id_proyecto, true, true);
						proyectoSelect.append(option).trigger('change');

						// manually trigger the `select2:select` event
						proyectoSelect.trigger({
							type: 'select2:select'
						});
					// END PRE-SELECTED selectUpdProyecto


					// PRE-SELECTED selectUpdNivelProgramaFormacion
						// Fetch the preselected item, and add to the control
						var nivelProgramaFormacion = $('#SelectListUpdNivelProgramaFormacion');
						// create the option and append to Select2
						var option = new Option(programa.name_nivel_programa_formacion, programa.id_nivel_programa_formacion, true, true);
						nivelProgramaFormacion.append(option).trigger('change');

						// manually trigger the `select2:select` event
						nivelProgramaFormacion.trigger({
							type: 'select2:select'
						});
					// END PRE-SELECTED selectUpdNivelProgramaFormacion

				}
			});
		});
	//
	// ─── END CALL GETDATAPROGRAMA FOR DATA UPDATE ────────────────────
	//

	});


	//
	// ─── CLICK BTN CHANGESTATUSPROGARAMAFORMACIOM ───────────────────────────────────
	//
	$(".statusChange").click(function(){
			var state_id =$(this).attr('id-state');
			var id_programa =$(this).attr('id-programa');
			$.ajax({
				type:'POST',
				url:'changeStatusProgaramaFormaciom',
				data:{
					state_id:state_id,
					id_programa_formacion:id_programa
				},
				success(response){
					location.reload(true);
					// window.location.href = "Programas";
				}
			});
		});
	//
	// ─── END CLICK BTN CHANGESTATUSPROGARAMAFORMACIOM ───────────────────────────────────
	//

	// var input = document.getElementById('txt_cod_programa');
	// input.oninvalid = function(event) {
	// 	event.target.setCustomValidity('Maximo de digitos 10');
	// }

	// var input = document.getElementById('txt_upd_id_programa');
	// input.oninvalid = function(event) {
	// 	event.target.setCustomValidity('Maximo de digitos 10');
	// }



</script>
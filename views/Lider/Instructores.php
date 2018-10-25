<div class="col-lg-9 col-md-12 col-12">
	<div class="row">
		<div class="col-md-12">
			<h4 class="text-center my-4">Administar Instructores</h4>
			<hr>
		</div>
		<div class="col-lg-6 col-md-6 col-12 mt-2">
			<div data-toggle="modal" data-target="#Insertar" class=" text-center">
				<button class="btn-rounded"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;&nbsp;Agregar Nuevo Instructor</button>
			</div>
		</div>
		<div class="col-lg-5 col-md-6 col-12 mt-2 ">
			<form action="#" method="post">
				<div id="textbox-search" class="input-group">
					<input class="form-control border-secondary py-2" type="search" placeholder="Busqueda">
					<div class="input-group-append">
						<button class="btn btn-outline-info form-control" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
				<small id="helpId" class="form-text text-muted">Ingresa el Nombre del Instructor para buscarlo</small>
			</form>
		</div>
	</div>
	<div class="mt-5 row justify-content-center">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<table class="col-lg-10 table table-responsive table-hover table-condensed" id="tabla_horario">
					<thead>
						<tr class="success">
							<th class="col-sm-1 ">Instructor</th>
							<th class="">Estado</th>
							<th class="text-center">Actualizar</th>
						</tr>
					</thead>
					<tbody class="">
						<?php
						foreach ($data['users'] as $user) {
    				?>
						<tr>
							<td class="">
								<?php echo $user->nombre . " " . $user->apellido; ?>
							</td>
							<td class="text-center" style="padding-bottom: 0px;padding-top: 10px;">
								<button type"button" id-instructor="<?php echo $user->id_usuario; ?>" id-state="<?php echo $user->id_estado_usuario ?>"
								name-state="<?php echo $user->name_estado_usuario ?>" class="activate btn  <?php if ($user->name_estado_usuario == 'Activo') {echo "
								btn-success";} else {echo "btn-danger" ;}?>">
									<?php echo $user->name_estado_usuario ?>
								</button>
							</td>
							<td style="
									padding-bottom: 0px;
									padding-top: 10px;">
								<div data-toggle="modal" data-target="#Actualizar_ins">
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
</div>
<br>
</div>
</div>
<script>
	$(".activate").click(function(){
		var statetext =$(this).attr('name-state');
		var state_id =$(this).attr('id-state');
		var id_instructor =$(this).attr('id-instructor');
		$.ajax({
			type:'POST',
			url:'?c=Lider&m=changeStatusInstructor',
			data:{
				statetext:statetext,
				state_id:state_id,
				id_instructor:id_instructor
			},
			success(response){
				location.reload();
			}
		});
	});
</script>



<!-- Modal Actualizar_Instructores-->
<div class="modal fade" id="Actualizar_ins" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Actualizar Datos</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="POST" action="../controlador/validar.php" class="form-signin">
						<table>
							<tr>
								<td>
									<h5>Numero de Documento</h5>
								</td>
								<td><input type="number" class="adsi-css" name="Documento" placeholder="Documento" readonly /></td>
							</tr>
							<tr>
								<td>
									<h5>Nombre</h5>
								</td>
								<td><input type="text" class="adsi-css" name="text" placeholder="Nombre" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Correo</h5>
								</td>
								<td><input type="email" class="adsi-css" name="email" placeholder="Correo" required /></td>
							</tr>
						</table>
						<div class="modal-body">
							<button class="btn-rounded" type="submit" style="width:180px">Actualizar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Insertar Instructor-->
<div class="modal fade" id="Insertar" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="col-11 modal-title text-center">Insertar Instructor</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="d-flex justify-content-center text-center">
					<form method="POST" action="?c=Lider&m=InsertarInstructor" class="form-signin">
						<table>
							<tr>
								<td>
									<h5>Numero de Documento</h5>
								</td>
								<td><input type="number" class="adsi-css" name="dni" placeholder="Documento" /></td>
							</tr>
							<tr>
								<td>
									<h5>Nombre</h5>
								</td>
								<td><input type="text" class="adsi-css" name="nombre_instructor" placeholder="Nombre" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Apellido</h5>
								</td>
								<td><input type="text" class="adsi-css" name="apellido_instructor" placeholder="Nombre" required /></td>
							</tr>
							<tr>
								<td>
									<h5>Correo</h5>
								</td>
								<td><input type="email" class="adsi-css" name="email" placeholder="Correo" required /></td>
							</tr>
						</table>
						<div class="modal-body">
							<button class="btn-rounded" type="submit" style="width:180px">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
if (!empty($data['msgType'])) {
	echo "<script>toastr.".$data['msgType']['type']."('".$data['msgType']['msg']."','".$data['msgType']['title']."')</script>";
}
?>
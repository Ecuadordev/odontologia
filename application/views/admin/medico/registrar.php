<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<?php
		$title = "Registrar medico";
		$breadcrumbs = [
			['url' => '#', 'icon' => 'fa fa-dashboard', 'label' => 'Inicio'],
			['url' => '#', 'label' => 'Medico'],
			['label' => 'Registrar', 'active' => true]
		];
		include 'partials/content_header.php';
	?>
	<!-- Main content -->
	<section class="content">
		<form id="FormRegistrar" action="<?= base_url('mantenimiento/medico/guardar')?>" method="POST" autocomplete="OFF" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-3">
					<?php include 'partials/profile_box.php'; ?>
				</div>
				<div class="col-md-9">
					<div class="box box-primary collapsed-box">
						<div class="box-header with-border">
							<div class="nav-tabs-custom">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nombres: *</label>
											<input type="text" name="nombre" class="form-control input-sm" placeholder="Nombres" onkeypress="return soloLetras(event)">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-form-label">Apellidos: *</label>
											<input type="text" name="apellidos" class="form-control input-sm" placeholder="Apellidos" onkeypress="return soloLetras(event)">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Especialidad: *</label>
											<select name="especialidad" class="form-control input-sm">
												<option value="">Seleccione</option>
												<?php foreach ($especialidades as $e): ?>
													<option value="<?= $e->cod_especialidad ?>"><?= $e->nombre_especialidad ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Tipo Documento (*):</label>
											<select name="tipoDocumento" class="form-control">
												<option value="1">DNI</option>
												<option value="2">RUC</option>
												<option value="3">PASAPORTE</option>
												<option value="4">NIC</option>
												<option value="5">CEDULA</option>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Nro Doc: *</label>
											<input type="text" name="dni" class="form-control input-sm" placeholder="Documento" maxlength="10" minlength="10" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Ruc:</label>
											<input type="text" name="ruc" class="form-control input-sm" placeholder="Ruc" maxlength="13" minlength="13" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Dirección: *</label>
											<input type="text" name="direccion" required class="form-control input-sm" placeholder="Direccion">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Colegiatura: *</label>
											<input type="text" name="colegiatura" class="form-control input-sm" placeholder="Colegiatura" maxlength="9" minlength="4" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Fecha nacimiento: *</label>
											<div class="input-group date">
												<input type="text" name="fechanacimiento" class="form-control input-sm datepicker">
												<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Telefono:</label>
											<input type="text" name="telefono" class="form-control input-sm" placeholder="telefono" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Celular:</label>
											<input type="text" name="celular" class="form-control input-sm" placeholder="celular" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="col-form-label">Sexo :</label>
											<div class="radio">
												<label><input type="radio" name="sexo" value="M" checked="true">Masculino</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<label><input type="radio" name="sexo" value="F">Femenino</label>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Estado: *</label>
											<select class="form-control input-sm" required="" name="estado">
												<option value="S">Activado</option>
												<option value="N">Inactivo</option>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="col-form-label">Correo: *</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
												<input name="email" placeholder="E-Mail Address" class="form-control input-sm" type="email">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Foto</label>
											<input type="file" name="foto">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Usuario</label>
											<input type="text" name="usuarioMedico" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Password</label>
											<input type="password" name="passwordMedico" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left">
										<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
									</div>
								</div>
							</div>
							<!-- /.nav-tabs-custom -->
						</div>
						<!-- /.col -->
					</div>
				</div>
			</div>
		</form>
	</section>
	<!-- /.content -->
</div>
<script>
	// ...existing JS...
	function soloLetras(e){
		key = e.keyCode || e.which;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
		especiales = "8-37-39-46";
		tecla_especial = false;
		for(var i in especiales){
			if(key == especiales[i]){
				tecla_especial = true;
				break;
			}
		}
		if(letras.indexOf(tecla)==-1 && !tecla_especial){
			return false;
		}
	}
</script>

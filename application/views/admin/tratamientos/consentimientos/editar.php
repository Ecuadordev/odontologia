<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1><i class="fa fa-th-list" aria-hidden="true"></i> Consentimientos</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Modulo</a></li>
			<li><a href="#">Consentimiento</a></li>
			<li class="active">Registrar</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<form id="ConsentimientoFormNuevo" autocomplete="off" method="POST" action="<?= base_url('tratamientos/panel/guardarConsentimiento') ?>">
						<ol class="breadcrumb">
							<li><a href="<?= base_url('tratamientos/panel/registrarConsentimiento/' . $tratamiento->codi_tra) ?>"><i class="fa fa-refresh"></i> Actualizar</a></li>
							<li><a href="<?= base_url('tratamientos/panel') ?>"><i class="fa fa-hand-o-left"></i> Regresar</a></li>

						</ol>
						<!-- /.box-header -->
						<div class="box-body pad">

							<div class="box box-default box-solid box-default ">
								<div class="box-body">
									<input type="hidden" name="id_tratamiento" value="<?= $tratamiento->codi_tra ?>">
									<input type="hidden" name="id_paciente" value="<?= $tratamiento->codi_pac ?>">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label class="control-label">Fecha</label>
												<input type="text" class="form-control input-sm" value="<?= date('Y-m-d') ?>" disabled>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Consentimiento informado para</label>
												<input type="text" name="para" class="form-control input-sm" placeholder="Para">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Servicio</label>
												<input type="text" name="servicio" class="form-control input-sm" placeholder="Servicio">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">
													<input type="radio" name="tipo" value=ambulatorio> Ambulatorio
												</label>
												<br>
												<label class="control-label">
													<input type="radio" name="tipo" value="hospitalizacion"> Hospitalización
												</label>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Diagnostico</label>
												<select name="diagnostico" class="form-control select2 input-sm">
													<option value="">Seleccione</option>
													<?php foreach ($enfermedades as $e): ?>
														<option value="<?= $e->codi_enf ?>"><?= $e->codi_enf . ' ' . $e->desc_enf ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label class="control-label">Procedimiento</label>
												<select name="procedimiento" class="form-control select2 input-sm">
													<option value="">Seleccione</option>
													<?php foreach ($procedimientos as $p): ?>
														<option value="<?= $p->id_procedimiento ?>"><?= $p->nombre ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-13">
											<button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Guardar</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
					</form>
				</div>

			</div>
		</div>

	</section>
</div>

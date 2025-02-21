<div id="content" class="content-wrapper-2">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Procedimiento
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Modulo</a></li>
				<li><a href="#">Procedimiento</a></li>
				<li class="active">Tarifario</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<ol class="breadcrumb">
							<li><a href="<?= base_url('mantenimiento/tarifario') ?>"><i class="fa fa-hand-o-left"></i> Volver</a></li>
						</ol>
						<!-- tools box -->
						<!-- /. tools -->
						<!-- /.box-header -->
						<div class="box-body pad">
							<?php if ($this->session->flashdata("error")): ?>
								<div class="alert alert-danger alert-dismissible">
									<p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
								</div>
							<?php endif; ?>
							<form action="<?php echo base_url(); ?>mantenimiento/tarifario/update" method="POST" autocomplete="off" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label">Secuencia</label>
											<input type="text" class="form-control input-sm" name="id_procedimiento" value="<?php echo $tarifario->id_procedimiento; ?>" readonly="readonly">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group <?php echo !empty(form_error('nombre')) ? 'has-error' : ''; ?>">
											<label class="control-label">Procedimiento *</label>
											<input type="text" name="nombre" class="form-control input-sm" value="<?php echo !empty(form_error('nombre')) ? set_value('nombre') : $tarifario->nombre ?>">
											<?php echo form_error("nombre", "<span class='help-block'>", "</span>"); ?>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group  <?php echo !empty(form_error('categoria')) ? 'has-error' : ''; ?>">
											<label class="control-label">Categoria *</label>
											<select name="categoria" class="form-control input-sm">
												<option value="">Seleccione</option>
												<?php foreach ($categorias as $ca): ?>
													<?php if ($ca->codi_cat == $tarifario->codi_cat): ?>
														<option value="<?= $ca->codi_cat ?>" selected><?php echo $ca->nomb_cat; ?></option>
													<?php else: ?>
														<option value="<?= $ca->codi_cat ?>"><?= $ca->nomb_cat ?></option>
													<?php endif; ?>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group  <?php echo !empty(form_error('precio')) ? 'has-error' : ''; ?>">
											<label class="control-label">Precio *</label>
											<input type="text" name="precio" class="form-control input-sm" value="<?php echo !empty(form_error('precio')) ?
																																															set_value('precio') : $tarifario->prec_procedimiento ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group <?php echo !empty(form_error('medida')) ? 'has-error' : ''; ?>">
											<label class="control-label">Medida *</label>
											<select name="medida" class="form-control input-sm">
												<option value="">Seleccione</option>
												<?php foreach ($unidad_medidas as $m): ?>
													<?php if ($m->id_medida == $tarifario->id_medida): ?>
														<option value="<?= $m->id_medida ?>" selected><?php echo $m->nom_medida; ?></option>
													<?php else: ?>
														<option value="<?= $m->id_medida ?>"><?= $m->nom_medida ?></option>
													<?php endif; ?>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group <?php echo !empty(form_error('concepto')) ? 'has-error' : ''; ?>"">
                     <label class=" control-label">Tipo concepto *</label>
											<select name="concepto" class="form-control input-sm">
												<option value="">Seleccione</option>
												<?php foreach ($tipo_conceptos as $t): ?>
													<?php if ($t->id_tipoconcepto == $tarifario->id_tipoconcepto): ?>
														<option value="<?= $t->id_tipoconcepto ?>" selected><?php echo $t->nombre_concepto; ?></option>
													<?php else: ?>
														<option value="<?= $t->id_tipoconcepto ?>"><?= $t->nombre_concepto ?></option>
													<?php endif; ?>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="col-form-label">Fecha registro</label>
											<div class="input-group date">
												<input type='text' name="fecha_registro" class="form-control input-sm datepicker" value="<?= date('Y-m-d') ?>" disabled />
												<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Estado *</label>
											<select class="form-control input-sm" required="" name="estado">
												<option value="S">Activado</option>
												<option value="N">Inactivo</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">En qué consiste</label>
											<textarea name="que" class="form-control input-sm" rows="3"><?php echo $tarifario->que; ?></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Cómo se realiza</label>
											<textarea name="como" class="form-control input-sm" rows="3"><?php echo $tarifario->como; ?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Gráfico de la intervención</label>
											<input type="file" name="grafico">
											<?php if (isset($tarifario) && isset($tarifario->grafico)): ?>
												<img src="<?= base_url('assets/uploads/procedimientos/' . $tarifario->grafico) ?>" width="100">
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label">Duración estimada</label>
											<input type="text" name="duracion" class="form-control input-sm" value="<?php echo $tarifario->duracion; ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Beneficios del procedimiento</label>
											<textarea name="beneficios" class="form-control input-sm" rows="3"><?php echo $tarifario->beneficios; ?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Riesgos frecuentes (leves)</label>
											<textarea name="riesgos_frecuentes" class="form-control input-sm" rows="3"><?php echo $tarifario->riesgos_frecuentes; ?></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Riesgos poco frecuentes (graves)</label>
											<textarea name="riesgos_poco_frecuentes" class="form-control input-sm" rows="3"><?php echo $tarifario->riesgos_poco_frecuentes; ?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Riesgos específicos</label>
											<textarea name="riesgos_especificos" class="form-control input-sm" rows="3"><?php echo $tarifario->riesgos_especificos; ?></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Alternativas al procedimiento</label>
											<textarea name="alternativas" class="form-control input-sm" rows="3"><?php echo $tarifario->alternativas; ?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Manejo posterior al procedimiento</label>
											<textarea name="manejo" class="form-control input-sm" rows="3"><?php echo $tarifario->manejo; ?></textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Consecuencias posibles por no realizar el manejo</label>
											<textarea name="consecuencias" class="form-control input-sm" rows="3"><?php echo $tarifario->consecuencias; ?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="pull-right btn btn-md btn-info"><i class="fa fa-floppy-o"></i> Guardar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /.box -->
				</div>
			</div>
			<!-- ./row -->
		</section>
		<!-- /.content -->
	</div>
</div>

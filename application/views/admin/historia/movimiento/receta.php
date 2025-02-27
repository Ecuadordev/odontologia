<div id="HistoriaContenidoReceta" class="panel panel-primary" style="display: none">
	<div class="panel-heading">Receta</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<button id="btn-agregar-receta" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalAgregarReceta"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table id="TableHistoriaMovimientoRecetas" class="table table-bordered">
					<thead>
						<tr class="btn-primary btn-xs">
							<th style="text-align: center;">Fecha</th>
							<th style="text-align: center;">Medicamento</th>
							<th style="text-align: center;">Médico</th>
							<th style="text-align: center;">Diagnostico</th>
							<th style="text-align: center;">Opciones</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>


<div id="ModalAgregarReceta" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content ">
			<form id="FormHistoriaMovimientoAgregarReceta" action="<?= base_url('historia/movimiento/agregarReceta') ?>" method="post" autocomplete="off">
				<input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Agregar Receta</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">H.C: <?= $this->uri->segment(4) ?></label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Edad: <?= edad($paciente->fena_pac) ?> años</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Fecha</label>
										<input type="text" name="fecha" class="form-control input-sm" value="<?= date('Y-m-d') ?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Hora</label>
										<?php
										date_default_timezone_set('America/Guayaquil');
										?>
										<input type="text" name="hora" class="form-control input-sm" value="<?= date('H:i:s') ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Medico</label>
										<select name="medico" class="form-control input-sm" style="width: 100%">
											<option value="">--Selecciona--</option>
											<?php foreach ($medicos as $med): ?>
												<option value="<?= $med->codi_med ?>" <?= ($especialidad->codi_med == $med->codi_med) ? 'selected' : '' ?>><?= $med->apel_med ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Diagnostico 01</label>
										<select name="diagnostico01" class="form-control select2" style="width: 100%">
											<option value=""></option>
											<?php foreach ($diagnosticos as $d): ?>
												<option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Diagnostico 02</label>
										<select name="diagnostico02" class="form-control select2" style="width: 100%">
											<option value=""></option>
											<?php foreach ($diagnosticos as $d): ?>
												<option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Diagnostico 03</label>
										<select name="diagnostico03" class="form-control select2" style="width: 100%">
											<option value=""></option>
											<?php foreach ($diagnosticos as $d): ?>
												<option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<table id="crearMedicamento" class="table table-bordered">
											<thead>
												<tr class="btn-primary btn-xs">
													<th style="text-align: center;">Medicamento</th>
													<th style="text-align: center;">Presentación</th>
													<th style="text-align: center;">Dosis</th>
													<th style="text-align: center;">Duración</th>
													<th style="text-align: center;">Cantidad</th>
													<th style="text-align: center;">Opciones</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<input type="text" name="medicamentos[0][medicamento]" class="form-control input-sm">
													</td>
													<td>
														<input type="text" name="medicamentos[0][presentacion]" class="form-control input-sm">
													</td>
													<td>
														<input type="text" name="medicamentos[0][dosis]" class="form-control input-sm">
													</td>
													<td>
														<input type="text" name="medicamentos[0][duracion]" class="form-control input-sm">
													</td>
													<td>
														<input type="text" name="medicamentos[0][cantidad]" class="form-control input-sm">
													</td>
													<td style="text-align: center;">
														<button type="button" class="btn btn-success btn-sm" style="padding:2px 5px;margin:0px 2px" onclick="agregarFilaMedicamento(this)"><i class="fa fa-plus"></i></button>
														<button type="button" class="btn btn-danger btn-sm" style="padding:2px 5px;margin:0px 2px" onclick="eliminarFilaMedicamento(this)"><i class="fa fa-trash"></i></button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Prescripción</label>
										<textarea name="receta" class="form-control input-sm" rows="5"></textarea>
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Indicaciones</label>
										<textarea name="indicaciones" class="form-control input-sm" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
					<button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="ModalEditarReceta" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content ">
			<form id="FormHistoriaMovimientoEditarReceta" action="<?= base_url('historia/movimiento/editarReceta') ?>" method="post" autocomplete="off">
				<input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
				<input type="hidden" name="id">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Editar Receta</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">H.C: <?= $this->uri->segment(4) ?></label>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label">Edad <?= edad($paciente->fena_pac) ?> años</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Fecha</label>
										<input type="text" name="fecha" class="form-control input-sm" value="<?= date('Y-m-d') ?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Hora</label>
										<input type="text" name="hora" class="form-control input-sm" value="<?= date('H:i:s') ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Medico</label>
										<select name="medico" class="form-control input-sm" style="width: 100%">
											<option value="">--Selecciona--</option>
											<?php foreach ($medicos as $med): ?>
												<option value="<?= $med->codi_med ?>" <?= ($especialidad->codi_med == $med->codi_med) ? 'selected' : '' ?>><?= $med->apel_med ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Diagnostico 01</label>
										<select name="diagnostico01" class="form-control select2" style="width: 100%">
											<option value=""></option>
											<?php foreach ($diagnosticos as $d): ?>
												<option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Diagnostico 02</label>
										<select name="diagnostico02" class="form-control select2" style="width: 100%">
											<option value=""></option>
											<?php foreach ($diagnosticos as $d): ?>
												<option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Diagnostico 03</label>
										<select name="diagnostico03" class="form-control select2" style="width: 100%">
											<option value=""></option>
											<?php foreach ($diagnosticos as $d): ?>
												<option value="<?= $d->codi_enf ?>"><?= $d->desc_enf ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<table id="editarMedicamento" class="table table-bordered">
											<thead>
												<tr class="btn-primary btn-xs">
													<th style="text-align: center;">Medicamento</th>
													<th style="text-align: center;">Presentación</th>
													<th style="text-align: center;">Dosis</th>
													<th style="text-align: center;">Duración</th>
													<th style="text-align: center;">Cantidad</th>
													<th style="text-align: center;">Opciones</th>
												</tr>
											</thead>
											<tr>
												<td>
													<input type="text" name="medicamentos[0][medicamento]" class="form-control input-sm">
												</td>
												<td>
													<input type="text" name="medicamentos[0][presentacion]" class="form-control input-sm">
												</td>
												<td>
													<input type="text" name="medicamentos[0][dosis]" class="form-control input-sm">
												</td>
												<td>
													<input type="text" name="medicamentos[0][duracion]" class="form-control input-sm">
												</td>
												<td>
													<input type="text" name="medicamentos[0][cantidad]" class="form-control input-sm">
												</td>
												<td style="text-align: center;">
													<button type="button" class="btn btn-success btn-sm" style="padding:2px 5px;margin:0px 2px" onclick="agregarFilaMedicamento(this)"><i class="fa fa-plus"></i></button>
													<button type="button" class="btn btn-danger btn-sm" style="padding:2px 5px;margin:0px 2px" onclick="eliminarFilaMedicamento(this)"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Prescripción</label>
										<textarea name="receta" class="form-control input-sm" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Indicaciones</label>
										<textarea name="indicaciones" class="form-control input-sm" rows="5"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
					<button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
	function agregarFilaMedicamento(button) {
		// Find the current row from the button element
		var currentRow = button.closest('tr');
		// Clone the row
		var newRow = currentRow.cloneNode(true);
		// Clear input values in the cloned row
		newRow.querySelectorAll('input').forEach(function(input) {
			input.value = '';
		});
		// Update the name attributes to increment the index
		var index = currentRow.parentElement.children.length;
		newRow.querySelectorAll('input').forEach(function(input) {
			input.name = input.name.replace(/\[\d+\]/, '[' + index + ']');
		});
		// Append the new row to the table body
		var table = currentRow.closest('table');
		table.querySelector('tbody').appendChild(newRow);
	}

	function eliminarFilaMedicamento(button) {
		// Find the current row from the button element
		var currentRow = button.closest('tr');
		// Remove the row
		currentRow.remove();

	}
</script>

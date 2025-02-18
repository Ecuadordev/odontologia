<div class="box box-primary">
	<div class="box-body box-profile">
		<img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/img/Odontologo.jpg" alt="User profile picture">
		<p class="text-muted text-center">Odontologo</p>
		<ul class="list-group list-group-unbordered">
			<li class="list-group-item">
				<b>Fecha registro</b>
				<div class="form-group">
					<div class="input-group date">
						<input type='text' name="fecha_registro" class="form-control input-sm datepicker" value="<?= date('Y-m-d') ?>" readonly="readonly" />
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					</div>
				</div>
			</li>
		</ul>
		<a href="<?= base_url('mantenimiento/medico') ?>" class="btn btn-primary btn-block"><i class="fa fa-hand-o-left"></i> Regresar</a>
	</div>
</div>

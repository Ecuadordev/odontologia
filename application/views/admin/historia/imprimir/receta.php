<div class="recetapdf header">
	<table style="width: 100%;display: inline-block;">
		<tr>
			<td>
				<h1><?= $clinica->nomb_clin; ?></h1>
				<p><?= $clinica->direc_clin; ?></p>
				<p>Tel: <?= $clinica->telf_clin; ?> | Email: <?= $clinica->email_clin ?></p>
			</td>
			<td style="text-align: right;">
				<img src="<?= base_url('assets/uploads/logo/' . $clinica->photo) ?>" class="img-responsive" style="height: 100px;" />
			</td>
		</tr>
	</table>
	<hr>
</div>
<div class="recetapdf content">
	<h2 style="text-align:center;">Receta Médica</h2>
	<br>
	<table style="width: 100%;display: inline-block;">
		<tr>
			<td>
				<p><strong>Paciente:</strong> <?= $paciente->nomb_pac . ' ' . $paciente->apel_pac; ?></p>
				<p><strong>Fecha:</strong> <?= $receta->pacrec_fecha . ' ' . $receta->pacrec_hora; ?></p>
				<p><strong>Cédula:</strong> <?= $paciente->dni_pac; ?></p>
				<p><strong>Alergia:</strong> <?= $alergia[0]->nombre_ale; ?></p>
			</td>
			<td>
				<p><strong>Médico:</strong> <?= $medico->nomb_med . ' ' . $medico->apel_med; ?></p>
				<p><strong>Especialidad:</strong> <?= isset($medico->cod_especialidad) ? $especialidad->nombre_especialidad : ''; ?></p>
				<p><strong>Dirección:</strong> <?= $medico->dire_med; ?></p>
				<p><strong>Registro SENECYT:</strong> <?= $medico->coleg_med; ?></p>
			</td>
		</tr>
	</table>
	<hr>
	<h3>Diagnósticos:</h3>
	<ul style="list-style-type: none;">
		<?php if ($diagnostico01) : ?>
			<li>&nbsp;&nbsp;&nbsp;<?= $diagnostico01->codi_enf; ?></li>
		<?php endif; ?>
		<?php if ($diagnostico02) : ?>
			<li>&nbsp;&nbsp;&nbsp;<?= $diagnostico02->codi_enf; ?></li>
		<?php endif; ?>
		<?php if ($diagnostico03) : ?>
			<li>&nbsp;&nbsp;&nbsp;<?= $diagnostico03->codi_enf; ?></li>
		<?php endif; ?>
	</ul>
	<hr>
	<h3>Asunto:</h3>
	<p><?= $receta->pacrec_asunto; ?></p>
	<hr>
	<h3>Receta:</h3>
	<p><?= nl2br($receta->pacrec_receta); ?></p>
	<hr>
	<h3>Indicaciones:</h3>
	<p><?= nl2br($receta->pacrec_indicaciones); ?></p>
</div>

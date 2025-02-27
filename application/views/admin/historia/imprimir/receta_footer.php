<table style="width:100%; display: inline-block;">
	<tr>
		<td style="text-align: center;">
			<?php if (isset($usuario) && isset($usuario->firma)): ?>
				<img src="<?= base_url('assets/uploads/usuarios/' . $usuario->firma) ?>" width="80">
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td style="text-align: center;">FIRMA</td>
	</tr>
</table>
<br>
<table style="width:100%; display: inline-block;border:1px solid #000;">
	<tr>
		<td style="text-align: left;font-size: 11px">
			Documento generado el <?= date('Y-m-d H:i:s'); ?>
		</td>
		<td style="text-align: right;font-size: 11px">
			<i>Página {PAGENO} de {nb}</i>
		</td>
	</tr>
</table>
<!-- <div style="font-size: 12px">
	<div class="w50">
		Fecha: <?= $receta->pacrec_fecha ?>
	</div>
	<div class="w50">
		<div class="text-center" style="margin:0 auto; border-top: 1px solid black;width:200px">
			Firma y Sello
		</div>
	</div>
</div>

<br>
<br>
<div>
	<p style="padding:4px;font-size:14px;background-color:green;color:white; text-align: center">
		ATENCIÓN: DE LUNES A SABADO DE 9:00 A.M - 9:00 P.M - DOMINGOS PREVIA CITA<br>
		CORREO: clinicadentalvitaldent@hotmail.com
	</p>
</div> -->

<!-- Section 1 -->
<table>
	<tr>
		<th class="purple" colspan="7">
			A. DATOS DEL ESTABLECIMIENTO Y USUARIO
		</th>
	</tr>
	<tr>
		<th class="green center">INSTITUCION DEL SISTEMA</th>
		<th class="green center" colspan="2">ESTABLECIMIENTO DE SALUD</th>
		<th class="green center" colspan="2">NUMERO DE HISTORIA CLINICA</th>
		<th class="green center" colspan="2">NUMERO DE ARCHIVO</th>
	</tr>
	<tr>
		<td class="center"></td>
		<td class="center" colspan="2"></td>
		<td class="center" colspan="2"><?= $consentimiento->dni_pac ?></td>
		<td class="center" colspan="2"><?= $consentimiento->codi_consen ?></td>
	</tr>
	<tr>
		<th class="center">PRIMER APELLIDO</th>
		<th class="center">SEGUNDO APELLIDO</th>
		<th class="center">PRIMER NOMBRE</th>
		<th class="center">SEGUNDO NOMBRE</th>
		<th class="center">SEXO</th>
		<th class="center">EDAD</th>
		<th class="center">CONDICION EDAD</th>
	</tr>
	<tr>
		<td class="center"><?= $consentimiento->apel_pac ?></td>
		<td class="center"></td>
		<td class="center"><?= $consentimiento->nomb_pac ?></td>
		<td class="center"></td>
		<td class="center"><?= $consentimiento->sexo_pac ?></td>
		<td class="center"><?= $consentimiento->edad_pac ?></td>
		<td class="center" style="padding:0;">
			<table style="border:none;margin:0;padding:0;">
				<tr>
					<td class="">H</td>
					<td class="">D</td>
					<td class="">M</td>
					<td class="">A</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<!-- Section 2 -->
<table>
	<tr>
		<th class="purple" colspan="10">
			B. CONSENTIMIENTO INFORMADO
		</th>
	</tr>
	<tr>
		<th class="green center" colspan="3">CONSENTIMIENTO INFORMADO PARA:</th>
		<td class="" colspan="7"><?= $consentimiento->para_con ?></td>
	</tr>
	<tr>
		<th class="green center">SERVICIO:</th>
		<td class="center" colspan="3"><?= $consentimiento->servicio_con ?></td>
		<th class="green center" colspan="2">TIPO DE ATENCION:</th>
		<td class="center">AMBULATORIO</td>
		<td class="center"><?= $consentimiento->tipo_con === "ambulatorio" ? "X" : "&nbsp;" ?></td>
		<td class="center">HOSPITALIZACION</td>
		<td class="center"><?= $consentimiento->tipo_con === "hospitalizacion" ? "X" : "&nbsp;" ?></td>
	</tr>
	<tr>
		<th class="green center">DIAGNOSTICO:</th>
		<td class="center" colspan="5"><?= $consentimiento->desc_enf ?></td>
		<th class="green center" colspan="2">CIE 10:</th>
		<td class="center" colspan="2"><?= $consentimiento->codi_enf ?></td>
	</tr>
	<tr>
		<th class="green center" colspan="4">NOMBRE DEL PROCEDIMIENTO RECOMENDADO:</th>
		<td class="center" colspan="6"><?= $consentimiento->nombre ?></td>
	</tr>
	<tr>
		<th class="green center" colspan="1">EN QUE CONSISTE:</th>
		<td class="" colspan="9"><?= $consentimiento->que ?></td>
	</tr>
	<tr>
		<th class="green center" colspan="1">COMO SE REALIZA:</th>
		<td class="" colspan="9"><?= $consentimiento->como ?></td>
	</tr>
	<tr>
		<th class="green " colspan="10">GRAFICO DE LA INTERVENCION (Incluye un gráfico previamente seleccionado que facilite la comprensión al paciente)</th>
	</tr>
	<tr>
		<td class="" colspan="10">
			<?php if (isset($consentimiento->grafico)): ?>
				<img src="<?= base_url('assets/uploads/procedimientos/' . $consentimiento->grafico) ?>" width="100">
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="4">DURACIÓN ESTIMADA DE LA INTERVENCIÓN:</th>
		<td class="" colspan="6"><?= $consentimiento->duracion ?></td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="3">BENEFICIOS DEL PROCEDIMIENTO:</th>
		<td class="" colspan="7"><?= $consentimiento->beneficios ?></td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="3">RIESGOS FRECUENTES (POCO GRAVES):</th>
		<td class="" colspan="7"><?= $consentimiento->riesgos_frecuentes ?></td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="3">RIESGOS POCO FRECUENTES (GRAVES):</th>
		<td class="" colspan="7"><?= $consentimiento->riesgos_poco_frecuentes ?></td>
	</tr>
	<tr>
		<th class="green" colspan="10">DE EXISTIR, ESCRIBA LOS RIESGOS ESPECÍFICOS RELACIONADOS CON EL PACIENTE (edad, estado de salud, creencias, valores, etc):</th>
	</tr>
	<tr>
		<td class="" colspan="10"><?= $consentimiento->riesgos_especificos ?></td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="3">ALTERNATIVAS AL PROCEDIMIENTO:</th>
		<td class="" colspan="7"><?= $consentimiento->alternativas ?></td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="3">DESCRIPCIÓN DEL MANEJO POSTERIOR <br>AL PROCEDIMIENTO:</th>
		<td class="" colspan="7"><?= $consentimiento->manejo ?></td>
	</tr>
	<tr>
		<th class="green vertical-center" colspan="3">CONSECUENCIAS POSIBLES SI NO SE <br>REALIZA EL PROCEDIMIENTO:</th>
		<td class="" colspan="7"><?= $consentimiento->consecuencias ?></td>
	</tr>
	<tr style="display:none;border:none;">
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
		<td style="display:none;border:none;"></td>
	</tr>
</table>

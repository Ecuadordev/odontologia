<!-- Section 1 -->
<table>
  <tr class="header green">
    <th class="center">ESTABLECIMIENTO</th>
    <th class="center">NOMBRE</th>
    <th class="center">APELLIDO</th>
    <th class="center">SEXO (M-F)</th>
    <th class="center">EDAD</th>
    <th class="center">Nº HISTORIA CLÍNICA</th>
  </tr>
  <tr>
    <td class="center"></td>
    <td class="center"><?= explode(" ", $historia->paciente)[1] ?></td>
    <td class="center"><?= explode(" ", $historia->paciente)[0] ?></td>
    <td class="center"><?= $historia->sexo[0] ?></td>
    <td class="center"><?= $historia->edad ?></td>
    <td class="center"><?= $historia->codi_pac ?></td>
  </tr>
</table>
<table>
  <tr>
    <td class="small center vertical-center green">MENOR DE 1 AÑO</td>
    <td class="center vertical-center yellow check"><?= $historia->edad < 1 ? "X" : "&nbsp;" ?></td>
    <td class="small center vertical-center green">1-4 AÑOS</td>
    <td class="center vertical-center yellow check"><?= $historia->edad >= 1 && $historia->edad < 4 ? "X" : "&nbsp;" ?>
    </td>
    <td class="small center vertical-center green">5-9 AÑOS PROGRAMADO</td>
    <td class="center vertical-center green yellow check">
      <?= $historia->edad >= 5 && $historia->edad < 9 ? "X" : "&nbsp;" ?>
    </td>
    <td class="small center vertical-center green">5-14 AÑOS NO PROGRAMADO</td>
    <td class="center vertical-center yellow check"><?= $historia->edad >= 5 && $historia->edad < 14 ? "X" : "&nbsp;" ?>
    </td>
    <td class="small center vertical-center green">10-14 AÑOS PROGRAMADO</td>
    <td class="center vertical-center yellow check">
      <?= $historia->edad >= 10 && $historia->edad < 14 ? "X" : "&nbsp;" ?>
    </td>
    <td class="small center vertical-center green">15-19 AÑOS</td>
    <td class="center vertical-center yellow check">
      <?= $historia->edad >= 15 && $historia->edad < 19 ? "X" : "&nbsp;" ?>
    </td>
    <td class="small center vertical-center green">MAYOR DE 20 AÑOS</td>
    <td class="center vertical-center yellow check"><?= $historia->edad >= 20 ? "X" : "&nbsp;" ?></td>
    <td class="small center vertical-center green">EMBARAZADA</td>
    <td class="center vertical-center yellow check">&nbsp;</td>
  </tr>
</table>

<!-- Section 2 -->
<table>
  <tr class="header">
    <th class="no-border">1 MOTIVO DE CONSULTA</th>
    <td class="no-border small right">ANOTAR LA CAUSA DEL PROBLEMA EN LA VERSIÓN DEL INFORMANTE</td>
  </tr>
  <tr>
    <td colspan="2"><?= $historia->motivo ?></td>
  </tr>
</table>

<!-- Section 3 -->
<table>
  <tr class="header">
    <th class="no-border">2 ENFERMEDAD O PROBLEMA ACTUAL</th>
    <td class="smaller no-border right">REGISTRAR SÍNTOMAS: CRONOLOGÍA, LOCALIZACIÓN, CARACTERÍSTICAS, INTENSIDAD, CAUSA
      APARENTE, SÍNTOMAS ASOCIADOS,<br />EVOLUCIÓN, ESTADO ACTUAL.</td>
  </tr>
  <tr>
    <td colspan="2"><?= $historia->enfermedad ?></td>
  </tr>
</table>

<!-- Section 4 -->
<table>
  <tr class="header">
    <th colspan="20">3 ANTECEDENTES PERSONALES Y FAMILIARES</th>
  </tr>
  <tr>
    <td class="center green word-break vertical-center" style="width: 70px;">1. ALERGIA<br />ANTIBIÓTICO</td>
    <td class="yellow check vertical-center">
      <?= in_array('alergia_antibiotico', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">2. ALERGIA<br />ANESTESIA</td>
    <td class="yellow check vertical-center">
      <?= in_array('alergia_anestesia', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">3. HEMO<br />RRAGIAS</td>
    <td class="yellow check vertical-center">
      <?= in_array('hemorragias', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">4. VIH/SIDA</td>
    <td class="yellow check vertical-center"><?= in_array('vih', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">5. TUBER<br />CULOSIS</td>
    <td class="yellow check vertical-center">
      <?= in_array('tuberculosis', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">6. ASMA</td>
    <td class="yellow check vertical-center"><?= in_array('asma', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">7. DIABETES</td>
    <td class="yellow check vertical-center">
      <?= in_array('diabetes', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">8. HIPER<br />TENSIÓN</td>
    <td class="yellow check vertical-center">
      <?= in_array('hipertension', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">9. ENF.<br />CARDIACA</td>
    <td class="yellow check vertical-center">
      <?= in_array('cardiaca', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
    <td class="center green word-break vertical-center" style="width: 70px;">10. OTRO</td>
    <td class="yellow check vertical-center"><?= in_array('otro', explode(",", $historia->padece)) ? "X" : "&nbsp;" ?>
    </td>
  </tr>
  <tr>
    <td colspan="20">
      <p><strong>Antecedentes familiares</strong></p>
      <p><?= $historia->antecfamiliares ?></p>
      <p><strong>Antecedentes personales</strong></p>
      <p><?= $historia->antecpersonales ?></p>
    </td>
  </tr>
</table>

<!-- Section 5 -->
<table>
  <tr class="header">
    <th colspan="9">4 SIGNOS VITALES</th>
  </tr>
  <tr>
    <td class="smaller green center vertical-center">PRESIÓN<br />ARTERIAL</td>
    <td class="center vertical-center check"><?= isset($historia->exploracion) ? $historia->exploracion : 0 ?> mn Hg
    </td>
    <td class="smaller green center vertical-center">FRECUENCIA<br />CARDIACA min.</td>
    <td class="center vertical-center check"><?= isset($historia->fcardiaca) ? $historia->fcardiaca : 0 ?> x min.</td>
    <td class="smaller green center vertical-center">TEMPERATURA<br />°C</td>
    <td class="center vertical-center check"><?= isset($historia->temperatura) ? $historia->temperatura : 0 ?> °C</td>
    <td class="smaller green center vertical-center">F. RESPIRAT.<br /> min.</td>
    <td class="center vertical-center check"><?= isset($historia->frespiratoria) ? $historia->frespiratoria : 0 ?> /min
    </td>
    <td width="30%">&nbsp;</td>
  </tr>
</table>

<!-- Section 6 -->
<table>
  <tr class="header">
    <th colspan="12">5 EXAMEN DEL SISTEMA ESTOMATOGNÁTICO</th>
  </tr>
  <tr>
    <td class="small green vertical-center" width="80px">1. LABIOS</td>
    <td class="center vertical-center yellow check">
      <?= in_array("lips", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">2. MEJILLAS</td>
    <td class="center vertical-center yellow check">
      <?= in_array("cheeks", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">3. MAXILAR SUPERIOR</td>
    <td class="center vertical-center yellow check">
      <?= in_array("maxilla", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">4. MAXILAR INFERIOR</td>
    <td class="center vertical-center yellow check">
      <?= in_array("lower_jaw", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">5. LENGUA</td>
    <td class="center vertical-center yellow check">
      <?= in_array("tongue", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">6. PALADAR</td>
    <td class="center vertical-center yellow check">
      <?= in_array("palate", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
  </tr>
  <tr>
    <td class="small green vertical-center" width="80px">7. PISO</td>
    <td class="center vertical-center yellow check">
      <?= in_array("floor", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">8. CARRILLOS</td>
    <td class="center vertical-center yellow check">
      <?= in_array("jowls", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">9. GLÁNDULAS SALIVALES</td>
    <td class="center vertical-center yellow check">
      <?= in_array("salivary", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">10. ORO FARINGE</td>
    <td class="center vertical-center yellow check">
      <?= in_array("pharynx", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">11. A. T. M.</td>
    <td class="center vertical-center yellow check"><?= in_array("atm", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
    <td class="small green vertical-center" width="80px">12. GANGLIOS</td>
    <td class="center vertical-center yellow check">
      <?= in_array("lymph_nodes", explode(",", $historia->estomgtc)) ? "X" : "" ?>
    </td>
  </tr>
  <tr>
    <td colspan="12"><?= $historia->exmodonto ?></td>
  </tr>
</table>

<!-- Section 7 -->
<table>
  <tr class="header">
    <th width="50%" class="vertical-center purple" style="border:none;">6 ODONTOGRAMA</th>
    <td width="50%" class="purple small" style="border:none;">PINTAR CON: AZUL PARA TRATAMIENTO REALIZADO - ROJO PARA
      PATOLOGÍA ACTUAL MOVILIDAD Y RECESIÓN: MARCAR "X" (1, 2 ó 3), SI APLICA</td>
  </tr>
  <tr>
    <td colspan="2">
      <img style="width: 100%" alt=""
        src="<?= base_url('assets/img/odontogramas/odontograma-' . $paciente->codi_pac . '-ini.png') ?>">
    </td>
  </tr>
</table>

<!-- Section 8 -->
<table style="border-collapse: collapse">
  <? $pcg = array_chunk(explode(",", $historia->pcg), 3) ?>
  <? $cpo = array_chunk(explode(",", $historia->cpo), 4) ?>
  <tr>
    <th colspan="15" class="section-title purple">7 INDICADORES DE SALUD BUCAL</th>
    <td rowspan="5" style="border:none;">
      <table style="border:none;">
        <tr>
          <th colspan="5" class="section-title purple">8 ÍNDICES CPO-ceo</th>
        </tr>
        <tr>
          <th class="center vertical-center green" rowspan="2">D</th>
          <th class="center vertical-center green">C</th>
          <th class="center vertical-center green">P</th>
          <th class="center vertical-center green">O</th>
          <th class="center vertical-center green">Total</th>
        </tr>
        <tr>
          <td>
            <?= $cpo[0][0] ?>
          </td>
          <td>
            <?= $cpo[0][1] ?>
          </td>
          <td>
            <?= $cpo[0][2] ?>
          </td>
          <td class="center vertical-center yellow">
            <?= $cpo[0][3] ?>
          </td>
        </tr>
        <tr>
          <th class="center vertical-center green" rowspan="2">d</th>
          <th class="center vertical-center green">c</th>
          <th class="center vertical-center green">e</th>
          <th class="center vertical-center green">o</th>
          <th class="center vertical-center green">Total</th>
        </tr>
        <tr>
          <td>
            <?= $cpo[1][0] ?>
          </td>
          <td>
            <?= $cpo[1][1] ?>
          </td>
          <td>
            <?= $cpo[1][2] ?>
          </td>
          <td class="center vertical-center yellow">
            <?= $cpo[1][3] ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <th colspan="9" class="section-title green">Higiene Oral Simplificada</th>
    <th colspan="2" class="section-title green">Enfermedad Periodontal</th>
    <th colspan="2" class="section-title green">Mal Oclusión</th>
    <th colspan="2" class="section-title green">Fluorosis</th>
  </tr>
  <tr>
    <td class="blue vertical-center" colspan="6">PIEZAS DENTALES</td>
    <td class="blue center">PLACA<br /><small>0-1-2-3-9</small></td>
    <td class="blue center">CÁLCULO<br /><small>0-1-2-3</small></td>
    <td class="blue center">GINGIVITIS<br /><small>0-1</small></td>
    <td class="blue center vertical-center">LEVE</td>
    <td class="check yellow center vertical-center"><?= $historia->periodontal == "leve" ? "X" : "" ?></td>
    <td class="blue center vertical-center">ANGLE I</td>
    <td class="check yellow center vertical-center"><?= $historia->oclusion == "angle" ? "X" : "" ?></td>
    <td class="blue center vertical-center">LEVE</td>
    <td class="check yellow center vertical-center"><?= $historia->flourosis == "leve" ? "X" : "" ?></td>
  </tr>
  <tr>
    <td class="center vertical-center blue">16</td>
    <td class="center vertical-center check yellow">
      <?= in_array("16", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">17</td>
    <td class="center vertical-center check yellow">
      <?= in_array("17", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">55</td>
    <td class="center vertical-center check yellow">
      <?= in_array("55", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center"><?= $pcg[0][0] ?></td>
    <td class="center vertical-center"><?= $pcg[0][1] ?></td>
    <td class="center vertical-center"><?= $pcg[0][2] ?></td>
    <td class="blue center vertical-center">MODERADA</td>
    <td class="check yellow center vertical-center"><?= $historia->periodontal == "moderada" ? "X" : "" ?></td>
    <td class="blue center vertical-center">ANGLE II</td>
    <td class="check yellow center vertical-center"><?= $historia->oclusion == "angle2" ? "X" : "" ?></td>
    <td class="blue center vertical-center">MODERADA</td>
    <td class="check yellow center vertical-center"><?= $historia->flourosis == "moderada" ? "X" : "" ?></td>
  </tr>
  <tr>
    <td class="center vertical-center blue">11</td>
    <td class="center vertical-center check yellow">
      <?= in_array("11", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">21</td>
    <td class="center vertical-center check yellow">
      <?= in_array("21", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">51</td>
    <td class="center vertical-center check yellow">
      <?= in_array("51", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center"><?= $pcg[1][0] ?></td>
    <td class="center vertical-center"><?= $pcg[1][1] ?></td>
    <td class="center vertical-center"><?= $pcg[1][2] ?></td>
    <td class="blue center vertical-center">SEVERA</td>
    <td class="check yellow center vertical-center"><?= $historia->periodontal == "severa" ? "X" : "" ?></td>
    <td class="blue center vertical-center">ANGLE III</td>
    <td class="check yellow center vertical-center"><?= $historia->oclusion == "angle3" ? "X" : "" ?></td>
    <td class="blue center vertical-center">SEVERA</td>
    <td class="check yellow center vertical-center"><?= $historia->flourosis == "severa" ? "X" : "" ?></td>
  </tr>
  <tr>
    <td class="center vertical-center blue">26</td>
    <td class="center vertical-center check yellow">
      <?= in_array("26", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">27</td>
    <td class="center vertical-center check yellow">
      <?= in_array("27", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">65</td>
    <td class="center vertical-center check yellow">
      <?= in_array("65", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center"><?= $pcg[2][0] ?></td>
    <td class="center vertical-center"><?= $pcg[2][1] ?></td>
    <td class="center vertical-center"><?= $pcg[2][2] ?></td>
    <td class="center vertical-center" colspan="7" rowspan="5">
      <table>
        <tr>
          <th colspan="2" class="section-title blue" width="100%">9 SIMBOLOGÍA DEL ODONTOGRAMA</th>
        </tr>
        <tr>
          <td colspan="2">
            <table class="nested-table">
              <tr>
                <td width="100%">
                  <img style="width: 100%" alt="" src="<?= base_url('assets/img/simbologia.png') ?> width=" 100%"">
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="center vertical-center blue">36</td>
    <td class="center vertical-center check yellow">
      <?= in_array("36", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">37</td>
    <td class="center vertical-center check yellow">
      <?= in_array("37", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">75</td>
    <td class="center vertical-center check yellow">
      <?= in_array("75", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center"><?= $pcg[3][0] ?></td>
    <td class="center vertical-center"><?= $pcg[3][1] ?></td>
    <td class="center vertical-center"><?= $pcg[3][2] ?></td>
  </tr>
  <tr>
    <td class="center vertical-center blue">31</td>
    <td class="center vertical-center check yellow">
      <?= in_array("31", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">41</td>
    <td class="center vertical-center check yellow">
      <?= in_array("41", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">71</td>
    <td class="center vertical-center check yellow">
      <?= in_array("71", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center"><?= $pcg[4][0] ?></td>
    <td class="center vertical-center"><?= $pcg[4][1] ?></td>
    <td class="center vertical-center"><?= $pcg[4][2] ?></td>
  </tr>
  <tr>
    <td class="center vertical-center blue">46</td>
    <td class="center vertical-center check yellow">
      <?= in_array("46", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">47</td>
    <td class="center vertical-center check yellow">
      <?= in_array("47", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center blue">85</td>
    <td class="center vertical-center check yellow">
      <?= in_array("85", explode(",", $historia->health_piece)) ? "X" : "" ?>
    </td>
    <td class="center vertical-center"><?= $pcg[5][0] ?></td>
    <td class="center vertical-center"><?= $pcg[5][1] ?></td>
    <td class="center vertical-center"><?= $pcg[5][2] ?></td>
  </tr>
  <tr>
    <td colspan="6" class="green center vertical-center">Totales</td>
    <td class="center vertical-center yellow"><?= $pcg[6][0] ?></td>
    <td class="center vertical-center yellow"><?= $pcg[6][1] ?></td>
    <td class="center vertical-center yellow"><?= $pcg[6][2] ?></td>
  </tr>
</table>

<!-- Section 10 -->
<table>
  <tr class="purple">
    <th colspan="9">10 PLANES DE DIAGNÓSTICO, TERAPÉUTICO Y EDUCACIONAL</th>
  </tr>
  <tr>
    <td class="small right vertical-center green">BIOMETRIA</td>
    <td class="center vertical-center check yellow">
      <?= in_array("biometria", explode(",", $historia->enfermedades)) ? "X" : "" ?>
    </td>
    <td class="small right vertical-center green">QUIMICA<br />SANGUINEA</td>
    <td class="center vertical-center check yellow">
      <?= in_array("quimica", explode(",", $historia->enfermedades)) ? "X" : "" ?>
    </td>
    <td class="small right vertical-center green">RAYOS - X</td>
    <td class="center vertical-center check yellow">
      <?= in_array("rayosx", explode(",", $historia->enfermedades)) ? "X" : "" ?>
    </td>
    <td class="small right vertical-center green">OTROS</td>
    <td class="center vertical-center check yellow">
      <?= in_array("otros", explode(",", $historia->enfermedades)) ? "X" : "" ?>
    </td>
    <td width="40%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9"><?= $historia->observaciones ?></td>
  </tr>
</table>

<!-- Section 11 -->
<?php $chunks = array_chunk($historia->pacdiagnostico, 2) ?>
<?php $diagnostico_counter = 1; ?>
<table>
  <tr class="header">
    <th class="purple vertical-center" style="border: none !important;">11</th>
    <th class="purple vertical-center" style="border: none !important;">DIAGNÓSTICO</th>
    <th class="purple vertical-center small" style=" border: none !important; text-align: right; font-weight: normal;">
      PRE =
      PRESUNTIVO<br />DEF = DEFINITIVO
    </th>
    <th class="purple vertical-center center">CIE</th>
    <th class="purple vertical-center center">PRE</th>
    <th class="purple vertical-center center">DEF</th>
    <th class="purple vertical-center center" colspan="2"></th>
    <th class="purple vertical-center center">CIE</th>
    <th class="purple vertical-center center">PRE</th>
    <th class="purple vertical-center center">DEF</th>
  </tr>
  <?php foreach ($chunks as $chunk): ?>
    <tr>
      <?php foreach ($chunk as $index => $dg): ?>
        <? if ($index % 2 === 0): ?>
          <th class="center vertical-center green"><?= $diagnostico_counter ?></th>
          <td colspan="2"><?= $dg->desc_enf ?></td>
          <td><?= $dg->codi_enf01 ?></td>
          <td class="check yellow"><?= $dg->predef === "presuntivo" ? "X" : "" ?></td>
          <td class="check yellow"><?= $dg->predef === "definitivo" ? "X" : "" ?></td>
        <? else: ?>
          <th class="center vertical-center green"><?= $diagnostico_counter ?></th>
          <td><?= $dg->desc_enf ?></td>
          <td><?= $dg->codi_enf01 ?></td>
          <td class="check yellow"><?= $dg->predef === "presuntivo" ? "X" : "" ?></td>
          <td class="check yellow"><?= $dg->predef === "definitivo" ? "X" : "" ?></td>
        <? endif; ?>
        <? $diagnostico_counter++; ?>
      <?php endforeach ?>
    </tr>
  <?php endforeach ?>
  <tr>
    <td class="green" style="width: 30px;"></td>
    <td colspan="2"></td>
    <td></td>
    <td class="check yellow"></td>
    <td class="check yellow"></td>
    <td class="green" style="width: 30px;"></td>
    <td width="200px"></td>
    <td></td>
    <td class="check yellow"></td>
    <td class="check yellow"></td>
  </tr>
</table>
<table>
  <tr>
    <td>FECHA DE APERTURA</td>
    <td>FECHA DE CONTROL</td>
    <td>PROFESIONAL</td>
    <td>FIRMA</td>
    <td>NUMERO DE HOJA</td>
    <td></td>
  </tr>
</table>

<!-- Section 12 -->
<table>
  <tr class="header purple">
    <th colspan="6">12 PROCEDIMIENTOS Y PRESCRIPCIONES</th>
  </tr>
  <tr class="green">
    <td>PROCEDIMIENTOS</td>
    <td>PRESCRIPCIONES</td>
    <td>CÓDIGO Y FIRMA</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="yellow">
    <td>CÓDIGO</td>
    <td>FIRMA</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr class="orange">
    <td>CÓDIGO</td>
    <td>FIRMA</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

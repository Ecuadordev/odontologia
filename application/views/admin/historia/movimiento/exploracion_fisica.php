<div id="HistoriaContenidoExploracionFisica" class="panel panel-primary" style="display: none">
  <div class="panel-heading">Exploración física paciente</div>
  <div class="panel-body">
  <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px">
    <li class="active" role="presentation"><a href="#enfermedad" aria-controls="enfermedad" role="tab" data-toggle="tab">Enfermadad actual</a></li>
    <li role="presentation"><a href="#consulta" aria-controls="consulta" role="tab" data-toggle="tab">Consulta de salud</a></li>
    <li role="presentation"><a href="#exploracion" aria-controls="exploracion" role="tab" data-toggle="tab">Exploración Física</a></li>
    <li role="presentation"><a href="#alergias" aria-controls="alergias" role="tab" data-toggle="tab">Alergias</a></li>
  </ul>

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="enfermedad">
    <form id="FormHistoriaMovimientoPacienteEnfermedad" action="<?= base_url('historia/movimiento/guardarPacienteEnfermedad') ?>" method="post">
      <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">

      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Tiempo de enfermedad:</label>
        <input type="text" name="tiempoEnfermedad" class="form-control input-sm" value="<?= $enfermedad->tiempo_enfact ?>">
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Motivo de la consulta:</label>
        <textarea name="motivoConsulta" class="form-control input-sm" rows="3"><?= $enfermedad->motivo_enfact ?></textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Signos y sintomas principales:</label>
        <textarea name="signosSintomas" class="form-control input-sm" rows="3"><?= $enfermedad->signo_enfact ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Antecedentes personales:</label>
        <textarea name="antecedentesPersonales" class="form-control input-sm" rows="3"><?= $enfermedad->antecper_enfact ?></textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Antecedentes Familiares:</label>
        <textarea name="antecedentesFamiliares" class="form-control input-sm" rows="3"><?= $enfermedad->antecfam_enfact ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Esta tomando algun medicamento:</label>
        <div>
          <label class="radio-inline">
          <input type="radio" name="tomandoMedicamento" value="1" <?= ($enfermedad->medicam_enfact=='1')?'checked':'' ?>> Si
          </label>
          <label class="radio-inline">
          <input type="radio" name="tomandoMedicamento" value="0" <?= ($enfermedad->medicam_enfact=='0')?'checked':'' ?>> No
          </label>
        </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Nombre del medicamento:</label>
        <input type="text" name="nombreMedicamento" class="form-control input-sm" value="<?= $enfermedad->nommedicam_enfact ?>">
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Motivo de uso:</label>
        <input type="text" name="motivoUso" class="form-control input-sm" value="<?= $enfermedad->motivomedi_enfact ?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
        <label class="control-label">Dosis:</label>
        <input type="text" name="dosis" class="form-control input-sm" value="<?= $enfermedad->dosis_enfact ?>">
        </div>
      </div>
      </div>

       <div class="row">
      <div class="col-md-12">
        <div class="form-group pull-right">
        <button type="submit" class="btn btn-info">Guardar</button>
        </div>
      </div>
      </div>
    </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="consulta">
    <form id="FormHistoriaMovimientoPacienteConsulta" action="<?= base_url('historia/movimiento/guardarPacienteConsulta') ?>" method="post">
      <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">

      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Ha tenido alguna vez tratamiento de ortodoncia?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="algunaVezMedicamento" value="1" <?= ($consulta->ortod_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="algunaVezMedicamento" value="0" <?= ($consulta->ortod_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="algunaVezMedicamentoTexto" class="form-control" rows="2" <?= ($consulta->ortod_paccon=='0' OR $consulta->ortod_paccon=='')?'disabled':'' ?>><?= $consulta->ortodtexto_paccon ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Esta tomando algun medicamento?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="tomandoMedicamentoConsulta" value="1" <?= ($consulta->medic_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="tomandoMedicamentoConsulta" value="0" <?= ($consulta->medic_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="tomandoMedicamentoTexto" class="form-control" rows="2" <?= ($consulta->medic_paccon=='0' OR $consulta->medic_paccon=='')?'disabled':'' ?>><?= $consulta->medictexto_paccon ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Es alegico a algun medicamento o anestesico?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="alergicoAnestesico" value="1" <?= ($consulta->alergico_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="alergicoAnestesico" value="0" <?= ($consulta->alergico_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="alergicoAnestesicoTexto" class="form-control" rows="2"
           <?= ($consulta->alergico_paccon=='0' OR $consulta->alergico_paccon=='')?'disabled':'' ?>
        ><?= $consulta->alergicotexto_paccon ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Has estado hospitalizado o tenido una cirugia?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="hospitalizadoCirugia" value="1" <?= ($consulta->hosp_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="hospitalizadoCirugia" value="0" <?= ($consulta->hosp_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="hospitalizadoCirugiaTexto" class="form-control" rows="2"
         <?= ($consulta->hosp_paccon=='0' OR $consulta->hosp_paccon=='')?'disabled':'' ?>
        ><?= $consulta->hosptexto_paccon ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Ha tenido algun transtorno nervioso o emocional?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="transtornoNerviosoEmocional" value="1" <?= ($consulta->trans_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="transtornoNerviosoEmocional" value="0" <?= ($consulta->trans_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="transtornoNerviosoEmocionalTexto" class="form-control" rows="2"
          <?= ($consulta->trans_paccon=='0' OR $consulta->trans_paccon=='')?'disabled':'' ?>
        ><?= $consulta->transtexto_paccon ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">¿Padece o a padecido alguna de las siguientes enfermedades?</label>
        <div style="display: flex; flex-wrap: wrap; padding: 10px 20px;">
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="alergia_antibiotico" <?= (in_array('alergia_antibiotico',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Alergia a antibióticos
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="alergia_anestesia" <?= (in_array('alergia_anestesia',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Alergia a anestesia
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="hemorragias" <?= (in_array('hemorragias',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Hemorragias
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="vih" <?= (in_array('vih',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> VIH/Sida
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="tuberculosis" <?= (in_array('tuberculosis',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Tuberculosis
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="asma" <?= (in_array('asma',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Asma
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="diabetes" <?= (in_array('diabetes',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Diabetes
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="hipertension" <?= (in_array('hipertension',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Hipertensión
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="cardiaca" <?= (in_array('cardiaca',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Enf. cardiaca
          </label>
          <label class="radio-inline" style="flex: 1 1 20%;margin: 0 0 5px 0;">
          <input type="checkbox" name="padeceEnfermedad[]" value="otro" <?= (in_array('otro',explode(",",$consulta->padece_paccon))) ? 'checked' : '' ?>> Otro
          </label>
        </div>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Cepilla los dientes diariamente?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="cepillaDientes" value="1" <?= ($consulta->cepilla_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="cepillaDientes" value="0" <?= ($consulta->cepilla_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="cepillaDientesTexto" class="form-control" rows="2"
          <?= ($consulta->cepilla_paccon=='0' OR $consulta->cepilla_paccon=='')?'disabled':'' ?>
        ><?= $consulta->cepillatexto_paccon ?></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <label class="control-label">¿Sufre de presión arterial alta?</label>
      </div>
      <div class="col-md-3">
        <div class="form-group">
        <label class="radio-inline">
          <input type="radio" name="presionArterial" value="1" <?= ($consulta->presion_paccon=='1')?'checked':'' ?>> Si
        </label>
        <label class="radio-inline">
          <input type="radio" name="presionArterial" value="0" <?= ($consulta->presion_paccon=='0')?'checked':'' ?>> No
        </label>
        </div>
      </div>
      <div class="col-md-9">
        <div class="form-group">
        <textarea name="presionArterialTexto" class="form-control" rows="2" <?= ($consulta->presion_paccon=='0' OR $consulta->presion_paccon=='')?'disabled':'' ?>>
          <?= $consulta->presiontexto_paccon ?>
        </textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="form-group pull-right">
        <button type="submit" class="btn btn-info">Guardar</button>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">

        <table style="border-collapse: collapse">
        <? $pcg = array_chunk(explode(",",$consulta->pcg), 3) ?>
        <? $cpo = array_chunk(explode(",",$consulta->cpo), 4) ?>
          <tr>
            <th colspan="9" class="section-title green">Higiene Oral Simplificada</th>
            <th colspan="2" class="section-title green">Enfermedad Periodontal</th>
            <th colspan="2" class="section-title green">Mal Oclusión</th>
            <th colspan="2" class="section-title green">Fluorosis</th>
            <td rowspan="4" style="border:none;">
              <table style="border:none;">
                <tr>
                  <th colspan="5" class="section-title purple">Índices CPO-ceo</th>
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
                    <input type="number" name="cpo[00]" value="<?= $cpo[0][0]?>" class="text-center cpo_1" onChange="calculateTotals('cpo_1', 'cpo_t_1');" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                  <td>
                    <input type="number" name="cpo[01]" value="<?= $cpo[0][1]?>" class="text-center cpo_1" onChange="calculateTotals('cpo_1', 'cpo_t_1');" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                  <td>
                    <input type="number" name="cpo[02]" value="<?= $cpo[0][2]?>" class="text-center cpo_1" onChange="calculateTotals('cpo_1', 'cpo_t_1');" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                  <td class="center vertical-center yellow">
                    <input type="number" name="cpo[03]" value="<?= $cpo[0][3]?>" class="text-center cpo_t_1" style="width:70px;" pattern="[0-9]{1,}"/>
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
                    <input type="number" name="cpo[10]" value="<?= $cpo[1][0]?>" class="text-center cpo_2" onChange="calculateTotals('cpo_2', 'cpo_t_2');" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                  <td>
                    <input type="number" name="cpo[11]" value="<?= $cpo[1][1]?>" class="text-center cpo_2" onChange="calculateTotals('cpo_2', 'cpo_t_2');" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                  <td>
                    <input type="number" name="cpo[12]" value="<?= $cpo[1][2]?>" class="text-center cpo_2" onChange="calculateTotals('cpo_2', 'cpo_t_2');" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                  <td class="center vertical-center yellow">
                    <input type="number" name="cpo[13]" value="<?= $cpo[1][3]?>" class="text-center cpo_t_2" style="width:70px;" pattern="[0-9]{1,}"/>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="blue vertical-center" colspan="6">PIEZAS DENTALES</td>
            <td class="blue center">PLACA<br/><small>0-1-2-3-9</small></td>
            <td class="blue center">CÁLCULO<br/><small>0-1-2-3</small></td>
            <td class="blue center">GINGIVITIS<br/><small>0-1</small></td>
            <td class="blue center vertical-center">LEVE</td>
            <td class="check yellow center vertical-center"><input type="radio" name="periodontal" value="leve" <?= $consulta->periodontal == "leve" ? "checked" : "" ?>></td>
            <td class="blue center vertical-center">ANGLE I</td>
            <td class="check yellow center vertical-center"><input type="radio" name="oclusion" value="angle" <?= $consulta->oclusion == "angle" ? "checked" : "" ?>></td>
            <td class="blue center vertical-center">LEVE</td>
            <td class="check yellow center vertical-center"><input type="radio" name="flourosis" value="leve" <?= $consulta->flourosis == "leve" ? "checked" : "" ?>></td>
          </tr>
          <tr>
            <td class="center vertical-center blue">16</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="16" <?= in_array("16", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">17</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="17" <?= in_array("17", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">55</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="55" <?= in_array("55", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center"><input type="number" name="pcg[11]" value="<?= $pcg[0][0]?>" class="text-center pcg_1" onChange="calculateTotals('pcg_1', 'pcg_t_1');" style="width:70px;" pattern="[0,1,2,3,9]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[12]" value="<?= $pcg[0][1]?>" class="text-center pcg_2" onChange="calculateTotals('pcg_2', 'pcg_t_2');" style="width:70px;" pattern="[0,1,2,3]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[13]" value="<?= $pcg[0][2]?>" class="text-center pcg_3" onChange="calculateTotals('pcg_3', 'pcg_t_3');" style="width:70px;" pattern="[0,1]{1}"/></td>
            <td class="blue center vertical-center">MODERADA</td>
            <td class="check yellow center vertical-center"><input type="radio" name="periodontal" value="moderada" <?= $consulta->periodontal == "moderada" ? "checked" : "" ?>></td>
            <td class="blue center vertical-center">ANGLE II</td>
            <td class="check yellow center vertical-center"><input type="radio" name="oclusion" value="angle2" <?= $consulta->oclusion == "angle2" ? "checked" : "" ?>></td>
            <td class="blue center vertical-center">MODERADA</td>
            <td class="check yellow center vertical-center"><input type="radio" name="flourosis" value="moderada" <?= $consulta->flourosis == "moderada" ? "checked" : "" ?>></td>
          </tr>
          <tr>
            <td class="center vertical-center blue">11</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="11" <?= in_array("11", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">21</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="21" <?= in_array("21", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">51</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="51" <?= in_array("51", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center"><input type="number" name="pcg[21]" value="<?= $pcg[1][0]?>" class="text-center pcg_1" onChange="calculateTotals('pcg_1', 'pcg_t_1');" style="width:70px;" pattern="[0,1,2,3,9]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[22]" value="<?= $pcg[1][1]?>" class="text-center pcg_2" onChange="calculateTotals('pcg_2', 'pcg_t_2');" style="width:70px;" pattern="[0,1,2,3]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[23]" value="<?= $pcg[1][2]?>" class="text-center pcg_3" onChange="calculateTotals('pcg_3', 'pcg_t_3');" style="width:70px;" pattern="[0,1]{1}"/></td>
            <td class="blue center vertical-center">SEVERA</td>
            <td class="check yellow center vertical-center"><input type="radio" name="periodontal" value="severa" <?= $consulta->periodontal == "severa" ? "checked" : "" ?>></td>
            <td class="blue center vertical-center">ANGLE III</td>
            <td class="check yellow center vertical-center"><input type="radio" name="oclusion" value="angle3" <?= $consulta->oclusion == "angle3" ? "checked" : "" ?>></td>
            <td class="blue center vertical-center">SEVERA</td>
            <td class="check yellow center vertical-center"><input type="radio" name="flourosis" value="severa" <?= $consulta->flourosis == "severa" ? "checked" : "" ?>></td>
          </tr>
          <tr>
            <td class="center vertical-center blue">26</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="26" <?= in_array("26", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">27</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="27" <?= in_array("27", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">65</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="65" <?= in_array("65", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center"><input type="number" name="pcg[31]" value="<?= $pcg[2][0]?>" class="text-center pcg_1" onChange="calculateTotals('pcg_1', 'pcg_t_1');" style="width:70px;" pattern="[0,1,2,3,9]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[32]" value="<?= $pcg[2][1]?>" class="text-center pcg_2" onChange="calculateTotals('pcg_2', 'pcg_t_2');" style="width:70px;" pattern="[0,1,2,3]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[33]" value="<?= $pcg[2][2]?>" class="text-center pcg_3" onChange="calculateTotals('pcg_3', 'pcg_t_3');" style="width:70px;" pattern="[0,1]{1}"/></td>
            <td class="center vertical-center" colspan="7" rowspan="5">
              &nbsp;
            </td>
          </tr>
          <tr>
            <td class="center vertical-center blue">36</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="36" <?= in_array("36", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">37</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="37" <?= in_array("37", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">75</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="75" <?= in_array("75", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center"><input type="number" name="pcg[41]" value="<?= $pcg[3][0]?>" class="text-center pcg_1" onChange="calculateTotals('pcg_1', 'pcg_t_1');" style="width:70px;" pattern="[0,1,2,3,9]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[42]" value="<?= $pcg[3][1]?>" class="text-center pcg_2" onChange="calculateTotals('pcg_2', 'pcg_t_2');" style="width:70px;" pattern="[0,1,2,3]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[43]" value="<?= $pcg[3][2]?>" class="text-center pcg_3" onChange="calculateTotals('pcg_3', 'pcg_t_3');" style="width:70px;" pattern="[0,1]{1}"/></td>
          </tr>
          <tr>
            <td class="center vertical-center blue">31</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="31" <?= in_array("31", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">41</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="41" <?= in_array("41", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">71</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="71" <?= in_array("71", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center"><input type="number" name="pcg[51]" value="<?= $pcg[4][0]?>" class="text-center pcg_1" onChange="calculateTotals('pcg_1', 'pcg_t_1');" style="width:70px;" pattern="[0,1,2,3,9]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[52]" value="<?= $pcg[4][1]?>" class="text-center pcg_2" onChange="calculateTotals('pcg_2', 'pcg_t_2');" style="width:70px;" pattern="[0,1,2,3]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[53]" value="<?= $pcg[4][2]?>" class="text-center pcg_3" onChange="calculateTotals('pcg_3', 'pcg_t_3');" style="width:70px;" pattern="[0,1]{1}"/></td>
          </tr>
          <tr>
            <td class="center vertical-center blue">46</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="46" <?= in_array("46", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">47</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="47" <?= in_array("47", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center blue">85</td>
            <td class="center vertical-center check yellow"><input type="checkbox" name="health_piece[]" value="85" <?= in_array("85", explode(",",$consulta->health_piece)) ? "checked" : ""?>/></td>
            <td class="center vertical-center"><input type="number" name="pcg[61]" value="<?= $pcg[5][0]?>" class="text-center pcg_1" onChange="calculateTotals('pcg_1', 'pcg_t_1');" style="width:70px;" pattern="[0,1,2,3,9]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[62]" value="<?= $pcg[5][1]?>" class="text-center pcg_2" onChange="calculateTotals('pcg_2', 'pcg_t_2');" style="width:70px;" pattern="[0,1,2,3]{1}"/></td>
            <td class="center vertical-center"><input type="number" name="pcg[63]" value="<?= $pcg[5][2]?>" class="text-center pcg_3" onChange="calculateTotals('pcg_3', 'pcg_t_3');" style="width:70px;" pattern="[0,1]{1}"/></td>
          </tr>
          <tr>
            <td colspan="6" class="green center vertical-center">Totales</td>
            <td class="center vertical-center yellow"><input type="number" name="pcg[71]" value="<?= $pcg[6][0]?>" class="text-center pcg_t_1" style="width:70px;" readonly/></td>
            <td class="center vertical-center yellow"><input type="number" name="pcg[72]" value="<?= $pcg[6][1]?>" class="text-center pcg_t_2" style="width:70px;" readonly/></td>
            <td class="center vertical-center yellow"><input type="number" name="pcg[73]" value="<?= $pcg[6][2]?>" class="text-center pcg_t_3" style="width:70px;" readonly/></td>
          </tr>
        </table>
      </div>
      </div>
    </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="exploracion">
    <form id="FormHistoriaMovimientoPacienteExploracion" action="<?= base_url('historia/movimiento/guardarPacienteExploracion') ?>" method="post">
      <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">

         <div class="col-md-14">
      <div class="box box-default box-solid">
      <div class="box-header with-border">
        <h6 class="box-title">Funciones Vitales</h6>

        <div class="box-tools pull-right">

        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <div class="form-horizontal form-valid">
      <div class="form-group">

        <div class="col-sm-3 val-smk">
           <label class="control-label">Presion arterial:</label>
          <div class="input-group">
           <input type="text" name="PA" class="form-control input-sm" value="<?= $exploracion->pa_exp ?>">
         <div class="input-group-addon">
           mn Hg
         </div>
          </div>
        </div>
      <div class="col-sm-3 val-smk">
        <label class="control-label">Pulso:</label>
        <div class="input-group">
        <input type="text" name="pulso" class="form-control input-sm" value="<?= $exploracion->pulso_exp ?>">
         <div class="input-group-addon">
         / min
         </div>
        </div>
      </div>
      <div class="col-sm-3 val-smk">

        <label class="control-label">Temperatura:</label>
         <div class="input-group">
        <input type="text" name="temperatura" class="form-control input-sm" value="<?= $exploracion->temperat_exp ?>">
        <div class="input-group-addon">
          º C
         </div>
        </div>
      </div>
      <div class="col-sm-3 val-smk">
        <label class="control-label">Frecuencia cardiaca:</label>
        <div class="input-group">

        <input type="text" name="FC" class="form-control input-sm" value="<?= $exploracion->fc_exp ?>">
        <div class="input-group-addon">
          x min.
         </div>
        </div>
      </div>
      <div class="col-sm-3 val-smk">
            <label class="control-label">Frec. Respiratoria:</label>
        <div class="input-group">

        <input type="text" name="frecRep" class="form-control input-sm" value="<?= $exploracion->frec_exp ?>">
         <div class="input-group-addon">
          / min
         </div>
        </div>
      </div>
      </div>
    </div>
      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>


          <div class="col-md-14">
      <div class="box box-default box-solid">
      <div class="box-header with-border">
        <h6 class="box-title">Peso - Talla</h6>

        <div class="box-tools pull-right">

        </div>
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body">
          <div class="form-horizontal form-valid">
          <div class="form-group">

      <div class="col-sm-3 val-smk">
         <label class="control-label">Peso:</label>
        <div class="input-group">

        <input type="text" name="peso" class="form-control input-sm" value="<?= $exploracion->peso_exp ?>">
        <div class="input-group-addon">
           Kg.
         </div>
        </div>
      </div>
      <div class="col-sm-3 val-smk">
        <label class="control-label">Talla:</label>
        <div class="input-group">

        <input type="text" name="talla" class="form-control input-sm" value="<?= $exploracion->talla_exp ?>">
         <div class="input-group-addon">
           m.
         </div>
        </div>
      </div>
      <div class="col-sm-3 val-smk">
         <label class="control-label">IMC:</label>
        <div class="input-group">

        <input type="text" name="masa" class="form-control input-sm" value="<?= $exploracion->masa_exp ?>">
        <div class="input-group-addon">
           Kg/m.
         </div>
        </div>
      </div>

      </div>
      </div>
      </div>
      <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Examen clínico general</label>
        <textarea name="examenClinicoGeneral" class="form-control input-sm" rows="3"><?= $exploracion->clinico_exp ?></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Examen complementario</label>
        <textarea name="examenComplementario" class="form-control input-sm" rows="3"><?= $exploracion->complement_exp ?></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Sistema Estomatogántico</label>
        <div style="display: flex; flex-wrap: wrap; padding: 10px 20px;">
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="lips" name="estomgtc[]" <?= in_array("lips", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Labios
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="cheeks" name="estomgtc[]" <?= in_array("cheeks", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Mejillas
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="maxilla" name="estomgtc[]" <?= in_array("maxilla", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Maxilar Superior
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="lower_jaw" name="estomgtc[]" <?= in_array("lower_jaw", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Maxilar Inferior
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="tongue" name="estomgtc[]" <?= in_array("tongue", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Lengua
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="palate" name="estomgtc[]" <?= in_array("palate", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Paladar
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="floor" name="estomgtc[]" <?= in_array("floor", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Piso
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="jowls" name="estomgtc[]" <?= in_array("jowls", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Carrillos
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="salivary" name="estomgtc[]" <?= in_array("salivary", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Glándulas Salivales
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="pharynx" name="estomgtc[]" <?= in_array("pharynx", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Oro Faringe
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="atm" name="estomgtc[]" <?= in_array("atm", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          A.T.M.
          </label>
          <label class="radio-inline" style="flex: 1 1 15%;margin: 0 0 5px 0;">
          <input type="checkbox" value="lymph_nodes" name="estomgtc[]" <?= in_array("lymph_nodes", explode(",",$exploracion->estomgtc_exp)) ? "checked" : "" ?>>
          Ganglios
          </label>
        </div>
        </div>
        <div class="form-group">
        <label class="control-label">Observaciones</label>
        <textarea name="odontoestomatologico" class="form-control input-sm" rows="3"><?= $exploracion->odontoesto_exp ?></textarea>
        </div>
      </div>
      </div>

       <div class="row">
      <div class="col-md-12">
        <div class="form-group pull-right">
        <button type="submit" class="btn btn-info">Guardar</button>
        </div>
      </div>
      </div>
    </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="alergias">
    <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalAgregarAlergia"><i class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 table-responsive">
      <table id="TableHistoriaMovimientoAlergias" class="table table-bordered table-striped table-sm">
        <thead>
        <tr class="btn-primary btn-xs">
          <th style="text-align: center;" width="10">Secuencia</th>
          <th style="text-align: center;">Nombre</th>
          <th style="text-align: center;">Observación</th>
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
  </div>
</div>


<div id="ModalAgregarAlergia" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md" role="document">
  <div class="modal-content ">
    <form id="FormHistoriaMovimientoAgregarAlergia" action="<?= base_url('historia/movimiento/agregarAlergia') ?>" method="post" autocomplete="off">
    <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Agregar Alergia</h4>
    </div>
    <div class="modal-body">
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Alergia:</label>
        <select name="alergia" class="form-control">
          <option value="">--Selecciona--</option>
          <?php foreach ($alergias as $a): ?>
          <option value="<?= $a->cod_ale ?>"><?= $a->nombre_ale ?></option>
          <?php endforeach ?>
        </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Observación:</label>
        <textarea name="observacion" class="form-control input-sm" rows="3"></textarea>
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


<div id="ModalEditarAlergia" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md" role="document">
  <div class="modal-content ">
    <form id="FormHistoriaMovimientoEditarAlergia" action="<?= base_url('historia/movimiento/editarAlergia') ?>" method="post" autocomplete="off">
    <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
    <input type="hidden" name="id">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Editar Alergia</h4>
    </div>
    <div class="modal-body">
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Alergia</label>
        <select name="alergia" class="form-control input-sm">
          <option value=""></option>
          <?php foreach ($alergias as $a): ?>
          <option value="<?= $a->cod_ale ?>"><?= $a->nombre_ale ?></option>
          <?php endforeach ?>
        </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <label class="control-label">Observación</label>
        <textarea name="observacion" class="form-control input-sm" rows="4"></textarea>
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
  function calculateTotals(sources, target) {
  var total = 0;
  $(`.${sources}`).each(function() {
    var value = $(this).val();
    if (!value || $(this).attr('aria-invalid') === 'true' || value < 0) value = 0;
    total += parseInt(value);
  });
  $(`.${target}`).val(total);
  }
</script>

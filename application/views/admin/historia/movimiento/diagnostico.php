<div id="HistoriaContenidoDiagnostico" class="panel panel-primary" style="display: none">
  <div class="panel-heading">Diagnostico</div>
  <div class="panel-body">

    <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px">
      <li class="active" role="presentation">
        <a href="#enfermedades" aria-controls="enfermedades" role="tab" data-toggle="tab">Enfermadad actual</a>
      </li>
      <li role="presentation">
        <a href="#planes" aria-controls="planes" role="tab" data-toggle="tab">Planes de Diagnóstico</a>
      </li>
    </ul>

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="enfermedades">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalAgregarDiagnostico"><i
                  class="fa fa-plus" aria-hidden="true"></i> Agregar</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table id="TableHistoriaMovimientoDiagnostico" class="table table-bordered">
              <thead>
                <tr class="btn-primary btn-xs">
                  <th style="text-align: center;">Fecha</th>
                  <th style="text-align: center;">CIE10</th>
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
      <div role="tabpanel" class="tab-pane" id="planes">
        <form id="FormHistoriaMovimientoPacientePlanesDiagnostico"
          action="<?= base_url('historia/movimiento/guardarPacientePlanesDiagnostico') ?>" method="post">
          <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
          <div class="row">
            <div class="col-md-12">

              <table>
                <tr class="purple">
                  <th class="check" colspan="9">PLANES DE DIAGNÓSTICO, TERAPÉUTICO Y EDUCACIONAL</th>
                </tr>
                <tr>
                  <td class="check small right vertical-center green"><label for="checkBiometria">BIOMETRIA</label></td>
                  <td class="check center vertical-center check yellow"><input type="checkbox"
                      name="planesEnfermedades[]" id="checkBiometria" value="biometria" <?= in_array("biometria", explode(",", $planes_diagnostico->enfermedades)) ? "checked" : "" ?> /></td>
                  <td class="check small right vertical-center green"><label
                      for="checkQuimica">QUIMICA<br />SANGUINEA</label>
                  </td>
                  <td class="check center vertical-center check yellow"><input type="checkbox"
                      name="planesEnfermedades[]" id="checkQuimica" value="quimica" <?= in_array("quimica", explode(",", $planes_diagnostico->enfermedades)) ? "checked" : "" ?> /></td>
                  <td class="check small right vertical-center green"><label for="checkRayosx">RAYOS - X</label></td>
                  <td class="check center vertical-center check yellow"><input type="checkbox"
                      name="planesEnfermedades[]" id="checkRayosx" value="rayosx" <?= in_array("rayosx", explode(",", $planes_diagnostico->enfermedades)) ? "checked" : "" ?> /></td>
                  <td class="check small right vertical-center green"><label for="checkOtros">OTROS</label></td>
                  <td class="check center vertical-center check yellow"><input type="checkbox"
                      name="planesEnfermedades[]" id="checkOtros" value="otros" <?= in_array("otros", explode(",", $planes_diagnostico->enfermedades)) ? "checked" : "" ?> /></td>
                  <td width="40%">&nbsp;</td>
                </tr>
                <tr>
                  <td class="uncheck" colspan="9">
                    <label class="control-label" for="textPlanesObservaciones">OBSERVACIONES</label>
                    <textarea id="textPlanesObservaciones" name="planesObservaciones" class="form-control input-sm"
                      rows="5"><?= $planes_diagnostico->observaciones ?></textarea>
                  </td>
                </tr>
              </table>

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
    </div>
  </div>
</div>


<div id="ModalAgregarDiagnostico" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <form id="FormHistoriaMovimientoAgregarDiagnostico"
        action="<?= base_url('historia/movimiento/agregarDiagnostico') ?>" method="post" autocomplete="off">
        <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Agregar Diagnostico</h4>
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

              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Fecha:</label>
                    <input type="text" name="fecha" class="form-control input-sm" value="<?= date('Y-m-d') ?>" readonly>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Diagnostico:</label>
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
                    <label class="control-label">
                      Presuntivo
                      <input type="radio" name="predef" value="presuntivo">
                    </label>&nbsp;
                    <label class="control-label">
                      Definitivo
                      <input type="radio" name="predef" value="definitivo">
                    </label>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-close"></i>
            Cancelar</button>
          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div id="ModalEditarDiagnostico" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <form id="FormHistoriaMovimientoEditarDiagnostico"
        action="<?= base_url('historia/movimiento/editarDiagnostico') ?>" method="post" autocomplete="off">
        <input type="hidden" name="paciente" value="<?= $this->uri->segment(4) ?>">
        <input type="hidden" name="id">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Editar Diagnostico</h4>
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

              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Fecha</label>
                    <input type="text" name="fecha" class="form-control input-sm" value="<?= date('Y-m-d') ?>" readonly>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Diagnostico</label>
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
                    <label class="control-label">
                      Presuntivo
                      <input type="radio" name="predef" value="presuntivo">
                    </label>&nbsp;
                    <label class="control-label">
                      Definitivo
                      <input type="radio" name="predef" value="definitivo">
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
            <i class="fa fa-close"></i>
            Cancelar
          </button>
          <button type="submit" class="btn btn-info">
            <i class="fa fa-save"></i>
            Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

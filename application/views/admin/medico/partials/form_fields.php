<?php
// If editing, show the codigo field
if(isset($medicos)): ?>
  <div class="row">
    <div class="col-md-2">
      <div class="form-group">
        <label class="col-form-label">Codigo *</label>
        <input type="text" name="codigo" class="form-control input-sm" value="<?php echo $medicos->codi_med; ?>" readonly>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label>Nombres: *</label>
      <input type="text" name="nombre" class="form-control input-sm" placeholder="Nombres" value="<?php echo isset($medicos) ? $medicos->nomb_med : ''; ?>" onkeypress="return soloLetras(event)">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Apellidos: *</label>
      <input type="text" name="apellidos" class="form-control input-sm" placeholder="Apellidos" value="<?php echo isset($medicos) ? $medicos->apel_med : ''; ?>" onkeypress="return soloLetras(event)">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label>Especialidad: *</label>
      <select name="especialidad" class="form-control input-sm">
        <option value="">Seleccione</option>
        <?php foreach ($especialidades as $e): ?>
          <option value="<?= $e->cod_especialidad ?>" <?php echo (isset($medicos) && $e->cod_especialidad == $medicos->cod_especialidad) ? 'selected' : ''; ?>>
            <?= $e->nombre_especialidad ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Tipo Documento (*):</label>
      <select name="tipoDocumento" class="form-control">
        <option value="1">DNI</option>
        <option value="2">RUC</option>
        <option value="3">PASAPORTE</option>
        <option value="4">NIC</option>
        <option value="5">CEDULA</option>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Nro Doc: *</label>
      <input type="text" name="dni" class="form-control input-sm" placeholder="Documento" value="<?php echo isset($medicos) ? $medicos->dni_med : ''; ?>" maxlength="10" minlength="10" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) return false;">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Ruc:</label>
      <input type="text" name="ruc" class="form-control input-sm" placeholder="Ruc" value="<?php echo isset($medicos) ? $medicos->ruc_med : ''; ?>" maxlength="<?php echo isset($medicos) ? '11' : '13'; ?>" minlength="<?php echo isset($medicos) ? '11' : '13'; ?>" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) return false;">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label>Dirección: *</label>
      <input type="text" name="direccion" required class="form-control input-sm" placeholder="Direccion" value="<?php echo isset($medicos) ? $medicos->dire_med : ''; ?>">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label>Colegiatura: *</label>
      <input type="text" name="colegiatura" class="form-control input-sm" placeholder="Colegiatura" value="<?php echo isset($medicos) ? $medicos->coleg_med : ''; ?>" maxlength="9" minlength="4" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) return false;">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Fecha nacimiento: *</label>
      <div class="input-group date">
        <input type="text" name="fechanacimiento" class="form-control input-sm datepicker" value="<?php echo isset($medicos) ? $medicos->fena_med : ''; ?>">
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Telefono:</label>
      <input type="text" name="telefono" class="form-control input-sm" placeholder="telefono" value="<?php echo isset($medicos) ? $medicos->telf_med : ''; ?>" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) return false;">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label>Celular:</label>
      <input type="text" name="celular" class="form-control input-sm" placeholder="celular" value="<?php echo isset($medicos) ? $medicos->cel_med : ''; ?>" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) return false;">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Sexo :</label>
      <div class="radio">
        <label><input type="radio" name="sexo" value="M" <?php echo (isset($medicos) && $medicos->sexo_med=='M') ? 'checked' : (!isset($medicos) ? 'checked' : ''); ?>>Masculino</label>
        <label><input type="radio" name="sexo" value="F" <?php echo (isset($medicos) && $medicos->sexo_med=='F') ? 'checked' : ''; ?>>Femenino</label>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Estado: *</label>
      <select class="form-control input-sm" required name="estado">
        <option value="S" <?php echo (isset($medicos) && $medicos->esta_med=='S') ? 'selected' : (!isset($medicos) ? 'selected' : ''); ?>>Activado</option>
        <option value="N" <?php echo (isset($medicos) && $medicos->esta_med=='N') ? 'selected' : ''; ?>>Inactivo</option>
      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label>Correo: *</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="E-Mail Address" class="form-control input-sm" type="email" value="<?php echo isset($medicos) ? $medicos->emai_med : ''; ?>">
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <label>Foto</label>
      <input type="file" name="foto">
      <?php if(isset($usuario) && isset($usuario->foto)): ?>
        <br>
        <img src="<?= base_url('assets/uploads/usuarios/'.$usuario->foto) ?>" width="100">
      <?php endif; ?>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>Firma</label>
      <input type="file" name="firma">
      <?php if(isset($usuario) && isset($usuario->firma)): ?>
        <br>
        <img src="<?= base_url('assets/uploads/usuarios/'.$usuario->firma) ?>" width="100">
      <?php endif; ?>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>Usuario</label>
      <input type="text" name="usuarioMedico" class="form-control" value="<?php echo isset($usuario) ? $usuario->logi_usu : ''; ?>">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="passwordMedico" class="form-control" <?php echo isset($medicos) ? 'disabled' : ''; ?>>
      <?php if(isset($medicos)): ?>
        <label for="cambiarPasswordMedico">
          <input type="checkbox" id="cambiarPasswordMedico">
          Cambiar Password
        </label>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
  </div>
</div>

<script>
// ...existing JS...
function soloLetras(e){
  var key = e.keyCode || e.which;
  var tecla = String.fromCharCode(key).toLowerCase();
  var letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  var especiales = "8-37-39-46".split('-');
  var tecla_especial = false;
  for(var i in especiales){
    if(key == especiales[i]){
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}
</script>

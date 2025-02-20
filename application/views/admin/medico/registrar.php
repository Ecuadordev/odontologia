<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php
    $title = "Registrar medico";
    $breadcrumbs = [
      ['url' => '#', 'icon' => 'fa fa-dashboard', 'label' => 'Inicio'],
      ['url' => '#', 'label' => 'Medico'],
      ['label' => 'Registrar', 'active' => true]
    ];
    include 'partials/content_header.php';
  ?>
  <!-- Main content -->
  <section class="content">
    <form id="FormRegistrar" action="<?= base_url('mantenimiento/medico/guardar')?>" method="POST" autocomplete="OFF" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-3">
          <?php include 'partials/profile_box.php'; ?>
        </div>
        <div class="col-md-9">
          <div class="box box-primary collapsed-box">
            <div class="box-header with-border">
              <div class="nav-tabs-custom">
                <?php include 'partials/form_fields.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<script>
  // ...existing JS...
  function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false;
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

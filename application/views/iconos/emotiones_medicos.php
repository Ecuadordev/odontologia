 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <title>Medicos</title>  

      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>
 </head>



<style type="">
  

.img-hover:hover{
   -webkit-transform: scale(1.4);
   -moz-transform: scale(1.4);
   -ms-transform: scale(1.4);
   -o-transform: scale(1.4);
   transform: scale(1.4);
}


  .contenedor6 {
    margin-left: 5%; 
    border-left-width: 50px;

    margin-top: 10%;
    width: 105%;

}


</style>
<body>
 <?php isset($caritas_consultasmedicos) && is_array($caritas_consultasmedicos);
                             
?> 

<br>
<br>
<br>


                           <div class="contenedor6">
    
                                        
                               <div class="col-md-2">
                                 <center>
                                  <img class="img-responsive img-hover" onclick="like_medico(<?php echo 1; ?>)" src="<?php echo base_url(); ?>assets/template/dist/img/caritas/exelente.png">

                                    <h1>Excelente</h1>     
                           
                                </center>
                                      
                              
                               </div>
                         
                               <div class="col-md-2">
                                <center>
                                   <img class="img-responsive img-hover" onclick="buena_medico(<?php echo 1; ?>)" src="<?php echo base_url(); ?>assets/template/dist/img/caritas/content.png"> 
                     
                       
                                    <h1>Bueno</h1>
                                 </center>     
                               </div> 
                               <div class="col-md-2">
                                <center>
                                   <img class="img-responsive img-hover" onclick="regular_medico(<?php echo 1; ?>)" src="<?php echo base_url()?>assets/template/dist/img/caritas/regular.png"> 
                       
                        
                                 <h1>Regular</h1>
                                </center>
                                 
                               </div>

                               <div class="col-md-2">
                        
                              <center>
                                 <img class="img-responsive img-hover" onclick="pesimo_medico(<?php echo 1; ?>)" src="<?php echo base_url()?>assets/template/dist/img/caritas/pesimos.png"> 
             
                        
                              <h1>Pesimo</h1>
                              </center>
                              
                    </div>

                    <div class="col-md-2">
                        <center>
                               <img class="img-responsive img-hover" onclick="malo_medico(<?php echo 1; ?>)" src="<?php echo base_url()?>assets/template/dist/img/caritas/malo.png"> 
                      
                        
                        <h1>Malo</h1>
                        </center>
                      
                    </div>

  </div>


        <!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        
<script type="text/javascript">
  function like_medico(m_id){
    $.ajax({
      type: 'post',
      url: "<?php echo base_url('emotiones/caritas_consultasmedicos/excelente_medico'); ?>",
      data: {m_id:m_id},
      cache: false,
      success: function(val){
        swal({
imageUrl: '<?php echo base_url()?>assets/template/dist/img/modal/exelente.png',
  title: "CLINICA SAN PEDRO!",
   
  text: "Excelente atención..!",
  input: "text",
  showConfirmButton: false,
  timer: 2000
  // icon: "success",
  // button: "Aww yiss!",
  
});
      }

      });
    
  }

  
</script>

<script type="text/javascript">
  
   function buena_medico(m_id){
    $.ajax({
      type: 'post',
      url: "<?php echo base_url('emotiones/caritas_consultasmedicos/buena_medico'); ?>",
      data: {m_id:m_id},
      cache: false,
      success: function(val){
        swal({
  imageUrl: '<?php echo base_url()?>assets/template/dist/img/modal/content.png',
  title: "CLINICA SAN PEDRO!",
   
  text: "Buena  atención..!",
  input: "text",
  showConfirmButton: false,
  timer: 2000,
});
      }

      });
    
  }
</script>


<script type="text/javascript">
  
   function regular_medico(m_id){
    $.ajax({
      type: 'post',
      url: "<?php echo base_url('emotiones/caritas_consultasmedicos/regular_medico'); ?>",
      data: {m_id:m_id},
      cache: false,
      success: function(val){
        swal({
  imageUrl: '<?php echo base_url()?>assets/template/dist/img/modal/regular.png',
  title: "CLINICA SAN PEDRO!",
   
  text: "Regular  atención..!",
  input: "text",
  showConfirmButton: false,
  timer: 2000,
});
      }

      });
    
  }
</script>

<script type="text/javascript">
  
   function pesimo_medico(m_id){
    $.ajax({
      type: 'post',
      url: "<?php echo base_url('emotiones/caritas_consultasmedicos/pesimo_medico'); ?>",
      data: {m_id:m_id},
      cache: false,
      success: function(val){
        swal({
  imageUrl: '<?php echo base_url()?>assets/template/dist/img/modal/pesimos.png',
  title: "CLINICA SAN PEDRO!",
   
  text: "Pesima  atención..!",
  input: "text",
  showConfirmButton: false,
  timer: 2000,
});
      }

      });
    
  }
</script>


<script type="text/javascript">
  
   function malo_medico(m_id){
    $.ajax({
      type: 'post',
      url: "<?php echo base_url('emotiones/caritas_consultasmedicos/malo_medico'); ?>",
      data: {m_id:m_id},
      cache: false,
      success: function(val){
        swal({
  imageUrl: '<?php echo base_url()?>assets/template/dist/img/modal/malo.png',
  title: "CLINICA SAN PEDRO!",
   
  text: "Mala  atención..!",
  input: "text",
  showConfirmButton: false,
  timer: 2000,
});
      }

      });
    
  }
</script>



</body>
        


<!-- <script type="text/javascript">
function confirma(){
 if (confirm("¿Realmente desea eliminarlo?")){ 
 alert("El registro ha sido eliminado.") }
 else { 
 return false
 }
}
</script> -->
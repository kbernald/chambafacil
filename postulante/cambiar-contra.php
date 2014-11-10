<?php
require("../config.php");
if(empty($_SESSION['user'])) 
{
header("Location: ../index.php");
die("Redirecting to index.php"); 
}
require('inc/header.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
$_SESSION['id_usr']=$_SESSION['user']['id_usr'];
?>
<!--CONTENIDO-->
    
     <form method="post" action="ajax_php/ajax_guarda_informacionpersonal.php">
     <h3>Cambiar Contraseña</h3> 
   <div class="row">
           <div class="col-lg-6">
       <label class="title">Correo Electronico:<span class="required">*</span></label>
        <input id='ape_mat' name='ape_mat' type="email" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Contraseña Actual:<span class="required">*</span></label>
        <input id='ape_mat' name='ape_mat' type="text" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 --> 

</div><!-- /.row -->     
         
         <div class="row">
              <div class="col-lg-6">
       <label class="title">Nueva Contraseña:<span class="required">*</span></label>
        <input id='ape_mat' name='ape_mat' type="password" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Repetir Contraseña:<span class="required">*</span></label>
        <input id='ape_mat' name='ape_mat' type="password" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 --> 

</div><!-- /.row -->     
       <div class="row">
           <div class="col-lg-12">
               <p>&nbsp;</p>
         <button  type="submit" id='save_datos' name='save_datos' class="btn-lg btn btn-success"><i class="fa fa-save">&nbsp;</i>Guardar</button>
           </div>
           </div>
   </form>

<!--FIN CONTENIDO-->
<?php 
require('inc/footer.php');  
?>
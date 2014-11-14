<?php
require('../database.php');
require('../config.php');
if(empty($_SESSION['user'])) 
{
header("Location: ../index.php");
die("Redirecting to index.php"); 
}
require('inc/header.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
$_SESSION['id_usr']=$_SESSION['user']['id_usr'];
?>

<!-- CONTENIDO -->

               <h3 class="text-center"><i class="fa fa-file-text">&nbsp;</i>CURRICULUM VITAE</h3></br>
                
                <div class="row">
 
                    <div class="col-sm-10">
                       <div class="row">

                     <div class="col-sm-2">
                     <strong>Nombre:
                      </div>
                    <div class="col-sm-10">
                      <p>Jane Stephanie Smith Reves</p>
                    </div>
                 </div>
                
                 <div class="row">
                     <div class="col-sm-2">
                     <strong>Edad:
                      </div>
                    <div class="col-sm-10">
                      <p>22 Años</p>
                    </div>
                 </div>
                   
                   <div class="row">
                     <div class="col-sm-2">
                    <strong>Domicilio:</strong>
                      </div>
                    <div class="col-sm-10">
                      <p>Av. Siempreviva Nro. 17 Col . Anzules, Lima</p>
                    </div>
                 </div>
                   <div class="row">
                     <div class="col-sm-2">
                     <strong>Telefono:</strong>
                      </div>
                    <div class="col-sm-10">
                      <p>012547845</p>
                    </div>
                 </div>
                   <div class="row">
                     <div class="col-sm-2">
                    <strong>Email:</strong>
                      </div>
                    <div class="col-sm-10">
                      <p>curriculumv@gmail.com</p>
                    </div>
                 </div>
                   
                   
                    </div>
                    
                    <div class="col-sm-2">
                      <img src="http://www.thebigidea.co.nz/files/imagecache/display/images/Foto%20carnet%20bona%20web.jpg" width="150px"> 
                      </div>
                 </div>
               <h4>&nbsp;</h4>
                 <h5>INFORMACION PERSONAL</h5>
                                  
                
            <div class="row">
                    
                     <div class="col-sm-6">
            
                     
                     
                      </div>
                    <div class="col-sm-6">
                      
                      
                      
                    </div>
                 </div>
    
<!-- -->
<?php
include('inc/footer.php');
?>

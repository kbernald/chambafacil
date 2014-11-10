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
     <h3>Seguimiento de Postulacion</h3> 

     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Mis Postulaciones </div>

      <!-- Table -->
      <table class="table table-striped table-bordered ">
        <thead>
          <tr>
            <th>#</th>
            <th>Empresa</th>
            <th>Distrito</th>
            <th>Cargo</th>
            <th>T. de Horario</th>
            <th>Salario</th>
            <th>Ev. Curricular</th>
            <th>Estado de Evaluacion</th>
            <th>Entrevista</th>
            <th>Detalle de Evaluacion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>BBVA</td>
            <td>Puente</td>
            <td>Admin. BD</td>
            <td>Full Time</td>
            <td>3500</td>
            <td>No Apto</td>
            <td>Concluido</td>
            <td>No Apto</td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-eye">&nbsp;</i>Detalle</button></td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBVA</td>
            <td>Puente</td>
            <td>Admin. BD</td>
            <td>Full Time</td>
            <td>3500</td>
            <td>No Apto</td>
            <td>Concluido</td>
            <td>No Apto</td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-eye">&nbsp;</i>Detalle</button></td>
          </tr>
            <tr>
            <td>1</td>
            <td>BBVA</td>
            <td>Puente</td>
            <td>Admin. BD</td>
            <td>Full Time</td>
            <td>3500</td>
            <td>No Apto</td>
            <td>Concluido</td>
            <td>No Apto</td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-eye">&nbsp;</i>Detalle</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    
  <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading text-center">Detalle de la Evaluacion </div>
      <div class="panel-body">
    <form method="post" action="">
           <div class="row">
  <div class="col-lg-4">
      <label class="title">Total de postulantes:<span class="required">*</span></label>
        <input id='nombre' name='nombre'type="text" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-4">
       <label class="title">Total de aprobados:<span class="required">*</span></label>
        <input id='nombre' name='nombre'type="text" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 -->
         <div class="col-lg-4">
      <label class="title">Total de desaprobados:<span class="required">*</span></label>
        <input id='nombre' name='nombre'type="text" placeholder="" class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->   
        
             <div class="row">
  <div class="col-lg-12">
      <label class="title">Puestos que no cumplio:</label>
      <i class="fa fa-file-pdf-o"></i>
  </div><!-- /.col-lg-6 -->
                 </div>
         <div class="row">
   <div class="col-lg-12">
       <label class="title"><h4>Relacion de Postulantes:</h4></label>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->   
  </div>
      <!-- Table -->
      <table class="table table-striped table-bordered ">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Entrevista</th>
            <th>Curriculum</th
          </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>Melissa</td>
            <td>Mejia Sullucucho</td>
            <td>Apto</td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o">&nbsp;</i>Descargar</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Lisett</td>
            <td>Navarro Sayas</td>
            <td>Apto</td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o">&nbsp;</i>Descargar</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>John</td>
            <td>Carranza Pomar</td>
            <td>No Apto</td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o">&nbsp;</i>Descargar</button></td>
          </tr>
            
        </tbody>
      </table>
    </div>

    <?php 
require('inc/footer.php');  
?>
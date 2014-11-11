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
<!--CONTENIDO-->
     <h3>Seguimiento de Oferta</h3> 
      <form method="post" action="">

             <div class="row">
          <div class="col-lg-6">
              <label class="title">Distrito:</label>
                <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
                <?php 
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT * FROM distrito_dist";
               foreach ($pdo->query($sql) as $row) {
               echo '<option value="'.$row['id_dist'].'">'.$row['distritonom'].'</option>';
                }
                Database::disconnect();
                ?>
         </select>
          </div>
          </div><!-- /.col-lg-6 --><div class="col-lg-6">
               <label class="title">Perfil:</label>
                <div class="form-group">
            <select id='sexo' name='sexo' data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->     
                       <div class="row">
          <div class="col-lg-6">
              <label class="title">Cargo:</label>
                <div class="form-group">
            <select id='sexo' name='sexo' data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
          </div><!-- /.col-lg-6 -->
           <div class="col-lg-6">
               <label class="title">Horario:</label>
                <div class="form-group">
            <select id='sexo' name='sexo' data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->   
 </form>

     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Mis especializaciones </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Empresa</th>
            <th>Distrito</th>
            <th>Perfil</th>
            <th>Cargo</th>
            <th>Fecha</th>
            <th>Tipo de Horario</th>
            <th>Salario</th>
            <th>Bases del concurso</th>
            <th>Postular</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>BBVA</td>
            <td>Puente Piedra</td>
            <td>Bachiller</td>
            <td>Admin. de BD</td>
            <td>28-10-2014</td>
            <td>Full Time</td>
            <td>1500</td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-file">&nbsp;</i>Bases</button></td>
            <td><button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td> 
          </tr>
          <tr>
            <td>1</td>
            <td>BBVA</td>
            <td>Puente Piedra</td>
            <td>Bachiller</td>
            <td>Admin. de BD</td>
            <td>28-10-2014</td>
            <td>Full Time</td>
            <td>1500</td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-file">&nbsp;</i>Bases</button></td>
            <td><button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td> 
          </tr>
          
        </tbody>
      </table>
    </div>
    
    <?php 
require('inc/footer.php');  
?>
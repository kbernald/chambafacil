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
 
            <h3>Busqueda de Oferta de Trabajo</h3>  
               <form method="post" action="postular.php">
       
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Lugar:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
                <?php 
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "SELECT * FROM departamento_dep";
               foreach ($pdo->query($sql) as $row) {
               echo '<option value="'.$row['id_dep'].'">'.$row['nom_dep'].'</option>';
                }
                Database::disconnect();
                ?>
         </select>
          </div>
  </div><!-- /.col-lg-6 --><div class="col-lg-6">
      <label class="title">Categoria:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     <div class="row">
  <div class="col-lg-6">
      <label class="title">Fecha:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 --><div class="col-lg-6">
      <label class="title">Tipo de Horario:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
   <div class="row">
    <div class="col-lg-6">
        <label class="title">Ingrese una palabra clave:</label>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Buscar</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.form-group -->
        </div>
       </div>
   </form>
     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Resultados de Oferta de Trabajo </div> 
      <!-- Table -->
    <table class="table">
        <thead>
            <tr> 
                <th>Logo</th>
                <th>Fecha</th>
                <th>Cargo</th>
                <th>Lugar</th>
                <th>Tipo</th>
                <th>Categoria</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
        <?php         
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM Oferta_oft";
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td><img src="holder.js/40x40"></td>';
echo '<td>'. $row['fec_public_oft'] . '</td>';
echo '<td>'. $row['id_tiph'] . '</td>';
echo '<td>'. $row['id_ciu'] . '</td>';
echo '<td>'. $row['id_tiph'] . '</td>';
echo '<td>'. $row['id_per'] . '</td>';
echo '<td>';
echo '<a data-toggle="modal" href="postular.php"  class="btn btn-primary btn-large" href="ver_alumno.php?id='.$row['id_oft'].'"><i class="fa fa-eye">&nbsp;</i>Postularr</a>';
echo '</td>';
echo '</tr>';
}
Database::disconnect();
?>

        </tbody>
    </table>
    </div>  
    
    
<!-- -->
<?php
include('inc/footer.php');
?>

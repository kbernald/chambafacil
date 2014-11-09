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
<!-- CONTENIDO -->

 <form method="post" action="">
     <h3>Grado de Estudio</h3> 
     <div class="row">
  <div class="col-lg-6">
      <label class="title">Estudio realizado:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Especialidad:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->      
         
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Nombre de la Institucion:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Estado:<span class="required">*</span></label>
       <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->    
     
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Fecha de Inicio:<span class="required">*</span></label>
        <input type="text" class="form-control" value="MM/DD/AA" data-date-format="mm/dd/yy">
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Fecha de Fin:<span class="required">*</span></label>
        <input type="text" class="form-control" value="MM/DD/AA" data-date-format="mm/dd/yy">
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Periodo de estudio:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <div class="form-group">
              <label for="exampleInputFile">Cargar documento</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Seleccione una Imagen, PDF o DOC.</p>
            </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
     
    <button data-toggle="dropdown" class="btn btn-danger" type="submit"><i class="fa fa-plus-circle">&nbsp;</i>Agregar</button>
   </form>
     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Mis Grados de Estudios </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Estudio Realizado</th>
            <th>Especialidad</th>
            <th>Institucion</th>
            <th>Estado</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Fin</th>
            <th>Periodo</th>
            <th>Documento</th>
            <th>Edicion</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Programacion</td>
            <td>Ingenieria de Sistemas</td>
            <td>Universidad Nacional de Ingenieria</td>
            <td>Truncado</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Basico</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Programacion</td>
            <td>Ingenieria de Sistemas</td>
            <td>Universidad Nacional de Ingenieria</td>
            <td>Truncado</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Basico</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
            <tr>
            <td>3</td>
            <td>Programacion</td>
            <td>Ingenieria de Sistemas</td>
            <td>Universidad Nacional de Ingenieria</td>
            <td>Truncado</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Basico</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>





     <form method="post" action="">
     <h3>Cursos de Especialización</h3> 
     <div class="row">
  <div class="col-lg-6">
      <label class="title">Estudio realizado:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Especialidad:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->      
         
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Institucion:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Estado:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->    
     
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Fecha de Inicio:<span class="required">*</span></label>
        <input type="text" class="form-control" value="MM/DD/AA" data-date-format="mm/dd/yy">
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Fecha de Fin:<span class="required">*</span></label>
        <input type="text" class="form-control" value="MM/DD/AA" data-date-format="mm/dd/yy">
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Periodo:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <div class="form-group">
              <label for="exampleInputFile">Subir documento</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Seleccione una Imagen, PDF o DOC.</p>
            </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->   
    <button data-toggle="dropdown" class="btn btn-danger" type="submit"><i class="fa fa-plus-circle">&nbsp;</i>Agregar</button>
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
            <th>Estudio Realizado</th>
            <th>Especialidad</th>
            <th>Institucion</th>
            <th>Estado</th>
            <th>Fecha de Inicio</th>
            <th>Fecha de Fin</th>
            <th>Periodo</th>
            <th>Documento</th>
            <th>Edicion</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Programacion</td>
            <td>Ingenieria de Sistemas</td>
            <td>Universidad Nacional de Ingenieria</td>
            <td>Truncado</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Basico</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Programacion</td>
            <td>Ingenieria de Sistemas</td>
            <td>Universidad Nacional de Ingenieria</td>
            <td>Truncado</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Basico</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
            <tr>
            <td>3</td>
            <td>Programacion</td>
            <td>Ingenieria de Sistemas</td>
            <td>Universidad Nacional de Ingenieria</td>
            <td>Truncado</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Basico</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
</div>
</div>
<?php 
require('inc/footer.php');  
?>
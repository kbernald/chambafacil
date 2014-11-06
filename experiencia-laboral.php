
<?php 
require('inc/header.php'); 
require('inc/menu.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
?>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
<?php require("inc/sidebar.php"); ?>
          </div>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
     <form method="post" action="">
     <h3>Experiencias Laborales</h3> 
     <div class="row">
  <div class="col-lg-6">
      <label class="title">Titulo / Puesto:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Nomb. de la Empresa:<span class="required">*</span></label>
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
      <label class="title">Area:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Cargo:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Roles y Funciones:<span class="required">*</span></label>
    
            <textarea class="form-control" rows="3"></textarea>
 
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Motivo de cese del trabajo:<span class="required">*</span></label>
        <textarea class="form-control" rows="3"></textarea>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row --> 
          <div class="row">
   <div class="col-lg-6">
       <div class="form-group">
              <label for="exampleInputFile">Subir documento</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Seleccione una Imagen, PDF o DOC.</p>
            </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->       
         
    <p>&nbsp;</p>
    <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="submit">Agregar <span class="caret"></span></button>
   </form>
     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Mis Experiencias </div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Puesto</th>
            <th>Empresa</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Area</th>
            <th>Cargo</th>
            <th>Certificado</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Gerente General</td>
            <td>Ladrillos Rex</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Recursos Humanos</td>
            <td>Administracion</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Gerente General</td>
            <td>Ladrillos Rex</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Recursos Humanos</td>
            <td>Administracion</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-certificate"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>
            <tr>
            <td>3</td>
            <td>Gerente General</td>
            <td>Ladrillos Rex</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Recursos Humanos</td>
            <td>Administracion</td>
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
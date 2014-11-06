<?php 
require('inc/header.php'); 
require_once('../config.php');
$_SESSION['clave']=$_COOKIE['pass'];
?>
<!-- CONTENIDO -->

     <form method="post" action="">
     <h3>Información Personal</h3> 
     <div class="row">
  <div class="col-lg-6">
      <label class="title">Nombres:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Fecha de Nacimiento:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->        
     
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Apellido Paterno:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Apellido Materno:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Estado Civil:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
    <option value="1">Soltero</option>
    <option value="2">Casado</option>
    <option value="3">Viudo</option>
    <option value="4">Divorciado</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Sexo:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Tipo de Documento:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
    <option value="1">DNI</option>
    <option value="2">Carnet Universitario</option>
    <option value="3">Libreta Militar</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Nro. de Documento:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->   
         <div class="row">
   <div class="col-lg-6">
       <label class="title">Pais:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
                <option value="1">Perú</option>
                <option value="2">Bolivia</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <label class="title">Departamento:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">Lima</option>
    <option value="1">Ica</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
          <div class="row">
  <div class="col-lg-12">
      <label class="title">Dirección:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
                <div class="row">
  <div class="col-lg-6">
      <label class="title">Telefono Celular:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Telefono Fijo:<span class="required">*</span></label>
        <input type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
  
                <div class="row">
  <div class="col-lg-6">
      <label class="title">Situacion Actual:<span class="required">*</span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">Seleccionar</option>
    <option value="1">Trabajador Dependiente</option>
    <option value="2">Trabajador Independiente</option>
    <option value="3">Desempleado</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
              <div class="form-group">
              <label for="exampleInputFile">Subir Foto</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Foto de Perfil (400 x 400 px).</p>
            </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
   </form>
</div>
</div>
</div>
<?php 
require('inc/footer.php');  
?>
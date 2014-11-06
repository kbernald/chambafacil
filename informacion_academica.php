<?php
$page = "home";  // NOMBRE DEL PHP
$title = "Chambafacil"; //TITULO DE LA PAGINA
$metaD = "¿Buscas trabajo? aqui es muy facil"; //DESCRIPCION DE LA PAGINA
require_once '/inc/header.php'; //LLAMA A LA CABEZERA HTML HEAD Y BODY 
include_once '/inc/menu.php';  //LLAMA AL MENU DE LA PAGINA
?>

<!-- Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <?php require_once '/inc/sidebar.php'; ?> <!-- LLAMA A LA BARRA IZQUIRDA MENU SIDEBAR -->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         
              <p><h2>Informacion Academica</h2></p><h3>Cursos por grado</h3></p>
  
  <table width="500" border="2" cellspacing="0" cellpadding="0">
    <tr>
    <td>Estudio Realizado</td>
    <td>Especialidad</td>
    <td>Institucion</td>
    <td>Estado</td>
    <td>Fecha Inicio</td>
    <td>Fecha Fin</td>
    <td>Documento</td>
    
  </tr>
  <tr>
    <td><input  type="text" name="Estudio"/></td>
    <td><input  type="text" name="Especialidad"/></td>
    <td><input  type="text" name="Institucion"/></td>
    <td><input  type="text" name="Estado"/></td>
    <td><input  type="text" name="Fechaini"/></td>
    <td><input  type="text" name="Fechafi"/></td>
    <td><input  type="text" name="Documento"/></td>
    <td><input  type="button" name="editar" value="Editar"/></td>
  </tr>
</table>
  <p><br />
    <br />
    <select name="Estudioreal">
      <option>Estudio realizado</option>
    </select>
    
    <label for="select"></label>
    <select name="Especial" id="select">
      <option>Especialidad</option>
    </select>
    
  <input class="" type="text" name="Estudio" placeholder="Institucion" />
  <label for="select2"></label>
  <select name="Estado1" id="select2">
    <option>Estado</option>
  </select>
    
  <label for="select3"></label>
  <select name="fechain" id="select3">
    <option>Fecha Inicio</option>
  </select>
  <label for="select4"></label>
  <select name="fecha fi" id="select4">
    <option>Fecha fin</option>
  </select>
  <label for="fileField"></label>
  <input type="file" name="subirdoc" id="fileField" />
  <input type="button" name="Agregar" id="button" value="Agregar" />
  </p>
  <p><h3>Cursos de Especializacion</h3>
  <table width="500" border="2" cellspacing="0" cellpadding="0">
    <tr>
    <td>Curso Realizado</td>
    <td>Especialidad</td>
    <td>Institucion</td>
    <td>Estado</td>
    <td>Fecha Inicio</td>
    <td>Fecha Fin</td>
    <td>Documento</td>
    
  </tr>
  <tr>
    <td><input  type="text" name="Cursoreal"/></td>
    <td><input  type="text" name="Especialidad1"/></td>
    <td><input  type="text" name="Institucion1"/></td>
    <td><input  type="text" name="Estado1"/></td>
    <td><input  type="text" name="Fechaini1"/></td>
    <td><input  type="text" name="Fechafi1"/></td>
    <td><input  type="text" name="Documento1"/></td>
    <td><input  type="button" name="editar" value="Editar1"/></td>
  </tr>
</table><br /><br />
<select name="cursoes">
  <option>Curso especialidadoo</option>
</select>

<label for="select"></label>
<select name="Especial1" id="select">
  <option>Especialidad</option>
</select>

<input class="" type="text" name="institucion1" placeholder="Institucion" />
<label for="select2"></label>
<select name="Estado1" id="select2">
  <option>Estado</option>
</select>

<label for="select3"></label>
<select name="fechaini" id="select3">
  <option>Fecha Inicio</option>
</select>
<label for="select4"></label>
<select name="fechafin" id="select4">
  <option>Fecha fin</option>
</select>
<label for="fileField"></label>
<input type="file" name="subirdoc" id="fileField" />
<input type="button" name="Agregar" id="button" value="Agregar" />
            
        </div>
      </div>
    </div>
        <!-- -->
<?php
require_once '/inc/login.php';  //LLAMA AL BOTON LOGIN 
require_once '/inc/registro.php';  //LLAMA AL BOTON REGISTRO 
require_once '/inc/footer.php';  // LLAMA AL FOOTER PIE DE PAGINA
?>

<?php
require("../config.php");
if (empty($_SESSION['user'])) {
    header("Location: ../index.php");
    die("Redirecting to index.php");
}
require('inc/header.php');
$_SESSION['clave'] = $_COOKIE['pass'];
$_SESSION['id_usr'] = $_SESSION['user']['id_usr'];
$idusuario = $_SESSION['id_usr'];
$sql_contador = "SELECT COUNT(*) FROM experiencia_laboral WHERE id_usu=$idusuario";
$result = $db->query($sql_contador);
$row_contador = $result->fetch(PDO::FETCH_NUM);


$sql_lista = "SELECT * FROM experiencia_laboral WHERE id_usu=$idusuario";
$result = $db->query($sql_contador);
$row = $result->fetch(PDO::FETCH_NUM);
?>
<!-- CONTENIDO --> 

<form method="post" action="ajax_php/ajax_experiencia-laboral.php">
    <h3>Experiencias Laborales</h3> 
    <div class="row">
        <div class="col-lg-6">
            <label class="title">Puesto:<span class="required">*</span></label>
            <input type="text" placeholder="" name="puesto" class="form-control" />
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Empresa:<span class="required">*</span></label>
            <input type="text" placeholder="" name="empresa" class="form-control" />
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->        

    <div class="row">
        <div class="col-lg-6">
            <label class="title">Fecha Inicio:<span class="required">*</span></label>
            <input type="text" class="form-control" name="fecha_inicio" value="02/16/12" data-date-format="dd/mm/yyyy" name='dp2' id="dp2">
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Fecha Fin:<span class="required">*</span></label>
            <input type="text" class="form-control" name="fecha_fin" value="02/16/12" data-date-format="dd/mm/yyyyy" name='dp3' id="dp3">
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->     
    <div class="row">
        <div class="col-lg-6">
            <label class="title">Area:<span class="required">*</span></label>
            <div class="form-group">
                <select data-toggle="select" name="area" class="form-control select select-default">
                    <option value="0">--SELECCIONAR--</option>
                </select>
            </div>
        </div><!-- /.col-lg-6 -->

        <div class="col-lg-6">
            <label class="title">Roles y Funciones:<span class="required">*</span></label>

            <textarea name="roles" class="form-control" rows="3"></textarea>

        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->  
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="exampleInputFile">Certificado de Trabajo</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Seleccione una Imagen, PDF o DOC.</p>
            </div>
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->       
    <button data-toggle="dropdown" class="btn btn-danger" type="submit"><i class="fa fa-plus-circle">&nbsp;</i>Agregar información</button>
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
<?php
for ($i = 0; $i > (int) $row_contador[0]; $i++) {
    echo '<tr>
            <td>1</td>
            <td>'.$row[10].'</td>
            <td>Ladrillos Rex</td>
            <td>18/09/2001</td>
            <td>30/10/2001</td>
            <td>Recursos Humanos</td>
            <td>Administracion</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td>
          </tr>';
}
?>
        </tbody>
    </table>
</div>



<?php
require('inc/footer.php');
?>
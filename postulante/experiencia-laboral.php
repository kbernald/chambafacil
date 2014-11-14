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

$sql_lista = "SELECT id_explab, id_usu, id_perfil, id_area, institucion_empresa,
         funciones, fech_ini, fech_fin, Contacto, num_contacto, Moti_fin,
         Documentor, experiencia_laboralcol FROM experiencia_laboral WHERE id_usu=$idusuario ORDER BY id_explab";
$result_2 = $db->query($sql_lista);
$row = $result_2->fetchAll();
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
            <input type="text" class="form-control" name="fecha_inicio" value="14/11/2014" data-date-format="dd/mm/yyyy" name='dp2' id="dp2">
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Fecha Fin:<span class="required">*</span></label>
            <input type="text" class="form-control" name="fecha_fin" value="14/11/2014" data-date-format="dd/mm/yyyy" name='dp3' id="dp3">
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
<!--    <button data-toggle="dropdown" class="btn btn-danger" type="submit"><i class="fa fa-plus-circle">&nbsp;</i>Agregar información</button>-->
<button  type="submit" id='save_datos' name='save_datos' class="btn btn-danger"><i class="fa fa-plus-circle">&nbsp;</i>Agregar información</button>&nbsp;&nbsp;
    
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
foreach ($row as $row_table) {
    $j=$i+1;
    echo '<tr>
            <td>'.$j.'</td>
            <td>'.$row_table['experiencia_laboralcol'].'</td>
            <td>'.$row_table['institucion_empresa'].'</td>
            <td>'.$row_table['fech_ini'].'</td>
            <td>'.$row_table['fech_fin'].'</td>
            <td>Recursos Humanos</td>
            <td>Administracion</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td></tr>';
}
?>
        </tbody>
    </table>
</div>



<?php
require('inc/footer.php');
?>
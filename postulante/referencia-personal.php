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
$sql = "SELECT id_ref, refe_per, nom_cont, ape_cont, email, telf_cont, relacion, puesto_cont, nom_inst, tipo_refe, id_tipeoc, id_usr FROM referencia_personal WHERE id_usr=$idusuario";
$result_2 = $db->query($sql);
$row = $result_2->fetchAll();
?>
<!--CONTENIDO-->

<form method="post" action="ajax_php/ajax_referencia-personal.php">
    <h3>Referencia Personal</h3> 
    <div class="row">
        <div class="col-lg-6">
            <label class="title">Nombres:<span class="required">*</span></label>
            <input type="text" placeholder="" name="nombre" class="form-control" />
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Apellidos:<span class="required">*</span></label>
            <input type="text" placeholder="" name="apellido" class="form-control" />
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->      

    <div class="row">
        <div class="col-lg-6">
            <label class="title">E-mail:<span class="required">*</span></label>
            <input type="text" placeholder="" name="email" class="form-control" />
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Telefono:<span class="required">*</span></label>
            <input type="text" placeholder="" name="telefono" class="form-control" />
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->    

    <div class="row">
        <div class="col-lg-6">
            <label class="title">Relacion:<span class="required">*</span></label>
            <input type="text" placeholder="" name="relacion" class="form-control" />
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Puesto:<span class="required">*</span></label>
            <input type="text" placeholder="" class="form-control" name="puesto"/>
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->     
    <div class="row">

        <div class="col-lg-6">
            <div class="form-group">
                <label class="title">Institucion:<span class="required" name="institucion">*</span></label>
                <input type="text" placeholder="" class="form-control" name="institucion"/>
            </div>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <label class="title">Referencia de Estudio:<span class="required">*</span></label>
            <div class="form-group">
                <select data-toggle="select" class="form-control select select-default">
                    <option value="0">--SELECCIONAR--</option>
                </select>
            </div>
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->   
    <!--<button data-toggle="dropdown" class="btn btn-danger" type="submit"><i class="fa fa-plus-circle">&nbsp;</i>Agregar</button>-->
    <button  type="submit" id='save_datos' name='save_datos' class="btn btn-danger"><i class="fa fa-plus-circle">&nbsp;</i>Agregar información</button>&nbsp;&nbsp;

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
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Relacion</th>
                <th>Puesto</th>
                <th>Institucion</th>
                <!--<th>Referencia</th>-->
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($row as $row_table) {
                
          echo '<tr><td>' . $row_table['nom_cont'] . '</td>
            <td>' . $row_table['ape_cont'] . '</td>
            <td>' . $row_table['email'] . '</td>
            <td>' . $row_table['telf_cont'] . '</td>
            <td>' . $row_table['relacion'] . '</td>
            <td>' . $row_table['nom_inst'] . '</td>
            <td>' . $row_table['puesto_cont'] . '</td>
            <td><button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o"></i></button></td>
            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-danger"><i class="fa fa-minus-square"></i></button></td></tr>';
            }
            ?>
<!--            <tr>
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
</tr>-->
        </tbody>
    </table>
</div>

<?php
require('inc/footer.php');
?>
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

$sql_usuario_verificacion = "SELECT count(*) FROM informac_personal_infp WHERE idusr=$idusuario";
$result = $db->query($sql_usuario_verificacion);
$row_verificacion = $result->fetch(PDO::FETCH_NUM);

$sql_usuario = "SELECT * FROM informac_personal_infp WHERE idusr=$idusuario";
$result = $db->query($sql_usuario);
$row = $result->fetch(PDO::FETCH_NUM);

if (isset($_POST['save_datos'])) {
    if ($row_verificacion[0] === 0 || $row_verificacion[0] === '0') {
        $rutaEnServidor = 'img/postulante';
        $rutaTemporal = $_FILES['imagen']['tmp_name'];
        $nombreImagen = basename($_FILES['imagen']['name']);
        $rutaDestino = $rutaEnServidor . '/' . $nombreImagen;
        move_uploaded_file($rutaTemporal, $rutaDestino);
        $nombre = $_POST['nombre'];

        $ape_pat = $_POST['ape_pat'];
        $ape_mat = $_POST['ape_mat'];
        $direccion = $_POST['direccion'];
        $tel_celular = $_POST['tel_celular'];
        $tel_fijo = $_POST['tel_fijo'];
        $nrodoc = $_POST['nro_doc'];
        $est_civil = $_POST['est_civil'];
        $sexo = $_POST['sexo'];
        $tip_doc = $_POST['tip_doc'];
        $cbo_pais = $_POST['cbo_pais'];
        $cbo_departamento = $_POST['cbo_departamento'];
        $cbo_provincia = $_POST['cbo_provincia'];
        $cbo_distrito = $_POST['cbo_distrito'];
        $fecha = strtotime($_POST['dp2']);
        $año = date('Y', $fecha);
        $mes = date('m', $fecha);
        $dia = date('d', $fecha);

        $fec_nac_usr2 = $año . '-' . $mes . '-' . $dia;

        $fec_nac_usr = '1191-09-11';
        $sit_actual = $_POST['sit_actual'];
        $pais_nac = $_POST['pais_nac'];
        $idusr = $_SESSION['id_usr'];
        $sql = "INSERT INTO informac_personal_infp(
id_tipdoc,num_doc,Nombre_usr,Apel_pat_usr,Apel_mat_usr,Sex_usr,fec_nac_usr,Tel_celular_usr,Tel_fijo_usr,id_dep,id_prov,id_dist,Direccion_usr,id_sitlab,id_paisnac,idusr,foto)
VALUES(
:id_tipdoc,:num_doc,:Nombre_usr,:Apel_pat_usr,:Apel_mat_usr,:Sex_usr,:fec_nac_usr,:Tel_celular_usr,:Tel_fijo_usr,:id_dep,:id_ciu,:id_dist,:Direccion_usr,:id_sitlab,:id_paisnac,:idusr,:foto);";
        $query_params = array(
            ':id_paisnac' => $pais_nac,
            ':idusr' => $idusr,
            ':id_sitlab' => $sit_actual,
            ':id_tipdoc' => $tip_doc,
            ':num_doc' => $nrodoc,
            ':Nombre_usr' => $nombre,
            ':Apel_pat_usr' => $ape_pat,
            ':Apel_mat_usr' => $ape_mat,
            ':Sex_usr' => $sexo,
            ':fec_nac_usr' => $fec_nac_usr2,
            ':Tel_celular_usr' => $tel_celular,
            ':Tel_fijo_usr' => $tel_fijo,
            ':id_dep' => $cbo_departamento,
            ':id_ciu' => $cbo_provincia,
            ':id_dist' => $cbo_distrito,
            ':Direccion_usr' => $direccion,
            ':foto' => $nombreImagen
        );
        try {
            $stmt = $db->prepare($sql);
            $result = $stmt->execute($query_params);
            echo ("<script>location.href='informacionpersonal.php'</script>");
            header("Location:informacionpersonal.php");
        } catch (PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
    } elseif ($row_verificacion[0] > 1 || $row_verificacion[0] != 0) {
        header("Location: ../informacionpersonal.php");
    }
} else {
    ?>
    <!--CONTENIDO-->

    <form method="post" enctype="multipart/form-data" action="">
        <h3>Informaci&oacute;n Personal</h3> 
        <div class="row">
            <div class="col-lg-6">
                <div class="foto-perfil">
                    <img src=" <?php
                    if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                        echo 'img/postulante/' . $row[19];
                    } else {
                        echo 'holder.js/500x300';
                    }
                    ?> ">
                </div>
                <div class="form-group">

                    <label for="exampleInputFile">Foto de Perfil</label>
                    <!--<input type="file" id="exampleInputFile" name="imagen">-->
                    <input type="file" id="imagen" name="imagen">
                    <p class="help-block">Tama&nacute;o de la imagen (Max. 300 x 300 px).</p>
                </div>
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6">
                <label class="title">Nombres:<span class="required">*</span></label>
                <input id='nombre' name='nombre'type="text" placeholder="..." class="form-control" value="<?php
                if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                    echo $row[4];
                }
                ?>"/>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Apellido Paterno:<span class="required">*</span></label>
                <input value="<?php
                if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                    echo $row[5];
                }
                ?>" id='ape_pat' name='ape_pat' type="text" placeholder="..." class="form-control" />
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Apellido Materno:<span class="required">*</span></label>
                <input value="<?php
                if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                    echo $row[6];
                }
                ?>" id='ape_mat' name='ape_mat' type="text" placeholder="..." class="form-control" />
            </div><!-- /.col-lg-6 --> 
            <div class="col-lg-6">
                <label class="title">Fecha de Nacimiento:<span class="required">*</span></label>
                <input type="text" class="form-control" value="<?php
                if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                    $fecha = strtotime($row[8]);
                    $año = date('Y', $fecha);
                    $mes = date('m', $fecha);
                    $dia = date('d', $fecha);

                    $fec_nac_usr = $dia . '/' . $mes . '/' . $año;
                    echo $fec_nac_usr;
                }
                ?>" data-date-format="dd/mm/yyyy" name='dp2' id="dp2">
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->     


        <div class="row">
            <div class="col-lg-6">
                <label class="title">Estado Civil:<span class="required">*</span></label>
                <div class="form-group">
                    <select id='est_civil' name='est_civil' data-toggle="select" class="form-control select select-default">
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
                    <select id='sexo' name='sexo' data-toggle="select" class="form-control select select-default">
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
                    <select name='tip_doc' id='tip_doc' data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
                        <option value="1">DNI</option>
                        <option value="2">Carnet Universitario</option>
                        <option value="3">Libreta Militar</option>
                    </select>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Nro. de Documento:<span class="required">*</span></label>
                <input value="<?php
                if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                    echo $row[3];
                }
                ?>" id='nro_doc' name='nro_doc' type="text" placeholder="..." class="form-control" />
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->   
        <div class="row">
            <div class="col-lg-6">
                <label class="title">Pais:<span class="required">*</span></label>
                <div class="form-group">
                    <select id="cbo_pais" onchange="javascript:habilitarCboDepartamento();" name='cbo_pais' data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
                        <?php
                        $sql = "SELECT * FROM pais_pai";
                        $stmt = $db->prepare($sql);
                        $result = $stmt->execute();
                        $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
                        foreach ($data as $k => $v) {
                            printf('<option value="%d">%s</option>', $k, $v);
                            echo '<script> $(document).ready(function() {
    $("#cbo_pais option[value='.$row[11].']").attr("selected", "selected");
});</script>';
                        }
                        ?>
                    </select>
                    <script type="">
                        $("select.region option[value='Africa']").attr("selected", "selected");
                    </script>

                </div>
                <script type="text/javascript">
                    function habilitarCboDepartamento() {
                        $('#cbo_departamento').removeAttr("disabled");

                    }
                </script>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Departamento:<span class="required">*</span></label>
                <div class="form-group">
                    <select id="cbo_departamento" name='cbo_departamento' onchange="javascript:habilitarCboProvincia();"disabled="true" data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
    <?php
    $sql = "SELECT id_dep,nom_dep FROM Departamento_dep";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    foreach ($data as $k => $v) {
        printf('<option value="%d">%s</option>', $k, $v);
    }
    ?>
                    </select>
                    <script type="text/javascript">
                        function habilitarCboDistrito() {
                            idpais = $("#cbo_pais option:selected").attr("value");


                            //pagina.IndexCboDistritos(iddepartamento)
                            $('#cbo_departamento').removeAttr("disabled");
                        }

                    </script>

                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->  
        <div class="row">
            <div class="col-lg-6">
                <label class="title">Provincia:<span class="required">*</span></label>
                <div class="form-group">
                    <select id='cbo_provincia' name='cbo_provincia' onchange="javascript:habilitarCboDistrito();" disabled="true" data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
                        <option value="1">Barranca</option>
                        <option value="2">Huacho</option>
                    </select>
                    <script type="text/javascript">
                        function habilitarCboProvincia() {
                            iddepartamento = $("#cbo_departamento option:selected").attr("value");


                            //pagina.IndexCboDistritos(iddepartamento)
                            $('#cbo_provincia').removeAttr("disabled");
                        }

                    </script>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Distrito:<span class="required">*</span></label>
                <div class="form-group">
                    <select id='cbo_distrito' name='cbo_distrito' disabled="true" data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
                        <option value="1">Lima</option>
                        <option value="2">Callao</option>
                    </select>
                    <script type="text/javascript">
                        function habilitarCboDistrito() {
                            idprovincia = $("#cbo_provincia option:selected").attr("value");


                            //pagina.IndexCboDistritos(iddepartamento)
                            $('#cbo_distrito').removeAttr("disabled");
                        }

                    </script>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->  
        <div class="row">
            <div class="col-lg-12">
                <label class="title">Direcci&oacute;n:<span class="required">*</span></label>
                <input value="<?php
                    if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                        echo $row[15];
                    }
    ?>" id='direccion' name='direccion' type="text" placeholder="..." class="form-control" />
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <label class="title">Telefono Celular:<span class="required">*</span></label>
                <input value="<?php
            if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                echo $row[9];
            }
    ?>" id='tel_celular' name='tel_celular' type="text" placeholder="..." class="form-control" />
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Telefono Fijo:<span class="required">*</span></label>
                <input value="<?php
            if ($row_verificacion[0] === 1 || $row_verificacion[0] === '1') {
                echo $row[10];
            }
    ?>" id='tel_fijo' name='tel_fijo' type="text" placeholder="..." class="form-control" />
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->  

        <div class="row">
            <div class="col-lg-6">
                <label class="title">Situacion Actual:<span class="required">*</span></label>
                <div class="form-group">
                    <select id='sit_actual' name='sit_actual' data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
    <?php
    $sql = "SELECT id_sitlab,Desc_sitlab FROM situacion_laboral_sitlab";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    foreach ($data as $k => $v) {
        printf('<option value="%d">%s</option>', $k, $v);
    }
    ?>
                    </select>
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <label class="title">Pais de Nacimiento:<span class="required">*</span></label>
                <div class="form-group">
                    <select id='pais_nac' name='pais_nac' data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
    <?php
    $sql = "SELECT * FROM pais_pai";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    foreach ($data as $k => $v) {
        printf('<option value="%d">%s</option>', $k, $v);
    }
    ?>
                    </select>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->  
        <div class="row">

            <div class="col-lg-6">
                <label class="title">Categoria:<span class="required">*</span></label>
                <div class="form-group">
                    <select id='pais_nac' data-toggle="select" class="form-control select select-default">
                        <option value="0">--SELECCIONAR--</option>
                        <option value="1">Administracion/Oficina</option>
                        <option value="2">Recursos Humanos</option>
                        <option value="3">Otros</option>
                    </select>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->  
        <button  type="submit" id='save_datos' name='save_datos' class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Guardar</button>&nbsp;&nbsp;
        <button name='edit_datos' class="btn btn-danger"><i class="fa fa-save">&nbsp;</i>Editar</button>
    </form>
    </div>
    </div>
    </div>
    <!--FIN CONTENIDO-->
    <?php
}
require('inc/footer.php');
?>
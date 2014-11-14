<?php
require_once("../../config.php");
$idusuario = $_SESSION['id_usr'];
$puesto = $_POST['puesto'];
$ape_pat = $_POST['empresa'];
$fecha_inicio2 = strtotime($_POST['fecha_inicio']);
$año = date('Y', $fecha_inicio2);
$mes = date('m', $fecha_inicio2);
$dia = date('d', $fecha_inicio2);
$fecha_inicio = $año . '-' . $mes . '-' . $dia;
$fecha_fin2 = $_POST['fecha_fin'];
$año = date('Y', $fecha_fin2);
$mes = date('m', $fecha_fin2);
$dia = date('d', $fecha_fin2);
$fecha_fin = $año . '-' . $mes . '-' . $dia;
$area = $_POST['area'];
$roles = $_POST['roles']; 
$sql = "INSERT INTO experiencia_laboral(id_usu, funciones, fech_ini, fech_fin,experiencia_laboralcol) "
        . "VALUES ();";
$query_params = array(
    ':id_usu' => $idusuario,
    ':funciones' => $roles,
    ':fech_ini' => $fecha_inicio,
    ':fech_fin' => $fecha_fin,
    ':experiencia_laboralcol' => $area
);
try {
    $stmt = $db->prepare($sql);
    $result = $stmt->execute($query_params);
    echo ("<script>location.href='../experiencia-laboral.php'</script>");
} catch (PDOException $ex) {
    die("Failed to run query: " . $ex->getMessage());
    echo '<script>alert("No se registro la experiencia laboral");</script>';
}
?>
<?php

require_once("../../config.php");
$idusuario = $_SESSION['id_usr'];


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$relacion = $_POST['relacion'];
$institucion = $_POST['institucion'];
$puesto = $_POST['puesto'];
//if ($nombre != '' && $empresa != '' && $fecha_inicio != '' && $fecha_fin != '' && $area != '' && $roles != '') {
    $sql = "INSERT INTO referencia_personal(relacion,nom_cont,ape_cont,email, telf_cont, puesto_cont, nom_inst, id_usr) "
            . "VALUES (:relacion,:nom_cont,:ape_cont,:email,:telf_cont,:puesto_cont,:nom_inst,:id_usr);";
    $query_params = array(
        ':id_usr' => $idusuario,
        ':ape_cont' => $apellido,
        ':email' => $email,
        ':telf_cont' => $telefono,
        ':relacion' => $relacion,
        ':nom_inst' => $institucion,
        ':puesto_cont' => $puesto,
        ':nom_cont' => $nombre
    );
    try {
        $stmt = $db->prepare($sql);
        $result = $stmt->execute($query_params);
        echo ("<script>location.href='../referencia-personal.php'</script>");
    } catch (PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
        echo '<script>alert("No se registro la referencia laboral");</script>';
    }
//}
?>

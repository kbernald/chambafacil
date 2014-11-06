<?php
require_once("../config.php");
$idusuario = $_SESSION['id_usr'];
$sql_usuario_verificacion="SELECT count(*) FROM informac_personal_infp WHERE idusr=$idusuario";
$result = $db->query($sql_usuario_verificacion);
$row = $result->fetch(PDO::FETCH_NUM);
if($row[0]===0){

$nombre=$_POST['nombre'];
$ape_pat=$_POST['ape_pat'];
$ape_mat=$_POST['ape_mat'];
$direccion=$_POST['direccion'];
$tel_celular=$_POST['tel_celular'];
$tel_fijo=$_POST['tel_fijo'];
$nrodoc=$_POST['nro_doc'];
$est_civil=$_POST['est_civil'];
$sexo=$_POST['sexo'];
$tip_doc=$_POST['tip_doc'];
$cbo_pais=$_POST['cbo_pais'];
$cbo_departamento=$_POST['cbo_departamento'];
$cbo_provincia=$_POST['cbo_provincia'];
$cbo_distrito=$_POST['cbo_distrito'];
$fecha=strtotime($_POST['dp2']);
$año = date('Y',$fecha);
$mes= date('m',$fecha);
$dia= date('d',$fecha);

$fec_nac_usr2=$año.'-'.$mes.'-'.$dia;

$fec_nac_usr='1191-09-11';
$sit_actual=$_POST['sit_actual'];
$pais_nac=$_POST['pais_nac'];
$idusr = $_SESSION['id_usr'];
$sql="INSERT INTO informac_personal_infp(
id_tipdoc,num_doc,Nombre_usr,Apel_pat_usr,Apel_mat_usr,Sex_usr,fec_nac_usr,Tel_celular_usr,Tel_fijo_usr,id_dep,id_ciu,id_dist,Direccion_usr,id_sitlab,id_paisnac,idusr)
VALUES(
:id_tipdoc,:num_doc,:Nombre_usr,:Apel_pat_usr,:Apel_mat_usr,:Sex_usr,:fec_nac_usr,:Tel_celular_usr,:Tel_fijo_usr,:id_dep,:id_ciu,:id_dist,:Direccion_usr,:id_sitlab,:id_paisnac,:idusr);";
$query_params=array(
':id_paisnac'=>$pais_nac,
':idusr'=>$idusr,
':id_sitlab'=>$sit_actual,
':id_tipdoc'=>$tip_doc,
':num_doc'=>$nrodoc,
':Nombre_usr'=>$nombre,
':Apel_pat_usr'=>$ape_pat,
':Apel_mat_usr'=>$ape_mat,
':Sex_usr'=>$sexo,
':fec_nac_usr'=>$fec_nac_usr2,
':Tel_celular_usr'=>$tel_celular,
':Tel_fijo_usr'=>$tel_fijo,
':id_dep'=>$cbo_departamento,
':id_ciu'=>$cbo_provincia,
':id_dist'=>$cbo_distrito,
':Direccion_usr'=>$direccion
);
    
try {  
            $stmt = $db->prepare($sql); 
            $result = $stmt->execute($query_params); 
       echo ("<script>location.href='../home.php'</script>");
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 

}
?>
<?php
require("../config.php");
if(empty($_SESSION['user'])) 
{
header("Location: ../index.php");
die("Redirecting to index.php"); 
}
require('inc/header.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
$_SESSION['id_usr']=$_SESSION['user']['id_usr'];
?>
<!--CONTENIDO-->
<div class="text-center">
<h1><i class="fa fa-users"></i></h1>
<h3>Bienvenido <?php echo htmlentities($_SESSION['user']['Email_usr'], ENT_QUOTES, 'UTF-8'); ?> al panel de empresas de chambafacil.com</h3>
<p>Aqui podras hacer el registro, control y seguimiento de tus publicaciones.<br>
    Primero debes completar tus datos</p>
</div>

<!--FIN CONTENIDO-->
<?php 
require('inc/footer.php');  
?>
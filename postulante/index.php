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
<h3>Bienvenido <?php echo htmlentities($_SESSION['user']['Email_usr'], ENT_QUOTES, 'UTF-8'); ?> al panel de usuario de chambafacil.com</h3>
<p>Buscar trabajo nunca fue tan facil, solo necesitamos los datos de tu curriculum vitae.</p>
</div>
</div>
</div>
<!--FIN CONTENIDO-->
<?php 
require('inc/footer.php');  
?>
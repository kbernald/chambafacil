<?php
$page = "home";
$title = "Confirmacion de Registro";
$metaD = "¿Buscas trabajo? aqui es muy facil";
?>
<?php 
require('inc/header.php'); 
require_once('../config.php');
$_SESSION['clave']=$_COOKIE['pass'];
?>
<!-- CONTENIDO -->

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>&nbsp;</h1>
            <img src="assets/img/confirmacion.png" alt="">
            <h1>¡Gracias por registrarte!</h1>
            <p>Los datos del registro son:<br />
            <strong>Email: </strong><?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?><br />
			 <strong>Contraseña: </strong><?php echo htmlentities($_SESSION['clave']); ?><br /></p>
        </div>
      </div>
    </div>
<!-- -->
<!-- -->
<?php 
require('inc/footer.php'); 
?>



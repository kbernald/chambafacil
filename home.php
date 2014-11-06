<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>
<!-- Author: Michael Milstead / Mode87.com
     for Untame.net
     Bootstrap Tutorial, 2013
-->
<?php 
require('inc/header.php'); 
require('inc/menu.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
$_SESSION['id_usr']=$_SESSION['user']['id_usr'];
?>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
<?php require("inc/sidebar.php"); ?>
          </div>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2>Bienvenido <?php echo htmlentities($_SESSION['user']['Email_usr'], ENT_QUOTES, 'UTF-8'); ?> a chambafacil.com</h2>
    <p>Buscar trabajo nunca fue tan facil, solo necesitamos los datos de tu curriculum vitae.</p>

</div>
</div>
</div>
<?php 
require('inc/footer.php');  
?>
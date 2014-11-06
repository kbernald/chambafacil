<?php
$page = "home";
$title = "Chambafacil";
$metaD = "¿Buscas trabajo? aqui es muy facil";
?>
<?php 
    require_once ("config.php"); 
    $submitted_email= ''; 
    if(!empty($_POST)){ 
         $query = " SELECT id_usr, Pass_usr, semilla, Email_usr FROM usuario_usr WHERE Email_usr = :email "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if($login_ok){ 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: secret.php"); 
            die("Redirecting to: secret.php"); 
        } 
        else{ 
            die("Redirecting to: error.php");
            $submitted_email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?>

<!DOCTYPE html>
<html>
    <head>
 <meta charset="utf-8">   
    <meta name="description" content="<?php error_reporting(0);if(isset($metaD) && !empty($metaD)) {
echo $metaD;
}
else {
 echo "Bolsa de trabajo virtual de Perú";
} ?>" />

    <title><?php if(isset($title) && !empty($title)) {
echo $title;
}
else {
echo "Chambafacil | Buscar trabajo nunca fue tan facil";
} ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Loading Bootstrap -->
        <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/datepicker.css" rel="stylesheet">
        <!-- Loading Flat UI -->
        <link href="assets/css/flat-ui.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/favicon.ico">
        <!-- Loading Font-Awesome -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Loading Estilo Chambafacil -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="assets/js/vendor/html5shiv.js"></script>
          <script src="assets/js/vendor/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>                
        <script type="text/javascript" src="js/jquery-1.4.4.js"></script>
               <script type="text/javascript">
$(document).ready(function () {
	$('#logeo').click(function(){
		password= $('#login-pass').val();
		document.cookie="pass="+password;

	});
            
});
        
        </script>
	
	</head>
<body>  
  <!--   navbar --> 
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="container">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" width="140"></a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <!-- <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">¿Dudas? <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul> --> 

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                            <!-- Button trigger modal -->
                            <button id="postulante" class="btn btn-navbar btn-primary" data-toggle="modal" data-target="#pop-postulante"><i class="fa fa-user">&nbsp;</i>Postulante</button>
                        </li>
                         <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li class="dropdown">
                           <button id="empresa"  class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#pop-empresa"><i class="fa fa-building">&nbsp;</i>Empresa</button>
                        </li>
                        
                        
                    </ul>
                    <form class="navbar-form navbar-right" action="#" role="search">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control nav-search" id="navbarInput-01" type="search" placeholder="¿Que puesto buscas?">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
        </div>
      </div>
    </form>
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
<!-- Content -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h1>&nbsp;</h1>
            <img src="assets/img/error.png" akt="">
            <h1>Hubo un Error al Iniciar Sesión</h1>
            <p>Escriba bien su email y contraseña, y porfavor vuelta a intentar Iniciar Sesión</p>
            <h1>&nbsp;</h1>
        </div>
      </div>
    </div>
      <!-- /END THE FEATURETTES -->
<?php 
require ('popup_postulante.php');  //LLAMA AL BOTON LOGIN 
require ('popup_empresa.php');  //LLAMA AL BOTON REGISTRO  
?>


    

    </div><!-- /.container -->
  
<!-- FOOTER -->
<div id="footer" class="clearfix">
  <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                   <h3 class="footer-title">Mi cuenta</h3>
          <ul class="footer-list">
            <li><a href="#">Regístrate</a></li>
            <li><a href="#">Actualiza tus datos</a></li>
            <li><a href="#">Cambia tu contraseña</a></li>
            <li><a href="#">¿Olvidaste tu contraseña?</a></li>
            <li><a href="#">Buscar chamba</a></li> 
            <li>&nbsp;</li>
          </ul>

        </div> 
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                <h3 class="footer-title">Sobre nosotros</h3>
          <ul class="footer-list">
            <li><a href="#">¿Quiénes somos?</a></li>
            <li><a href="#">Nuestro compromiso</a></li>
            <li><a href="#">Términos de uso</a></li>
            <li><a href="#">Politica de privacidad</a></li>
            <li><a href="#">Politica de publicación</a></li> 
            <li>&nbsp;</li>
          </ul>

        </div> 

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                <h3 class="footer-title">Servicio al usuario</h3>
          <ul class="footer-list">
            <li><a href="#">Preguntas Frecuentes</a></li>
            <li><a href="#">Contáctanos</a></li>
            <li><a href="#">Libro de reclamaciones</a></li> 
            <li>&nbsp;</li>
          </ul>

        </div> 
            

        </div>
      </div>
    <div class="copyright">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">ChambaFacil 2014. Todos los derechos reservados.
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->     
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/flat-ui.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
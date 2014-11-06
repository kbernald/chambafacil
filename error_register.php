<?php
$page = "home";
$title = "Chambafacil";
$metaD = "¿Buscas trabajo? aqui es muy facil";
?>
<?php 
    require_once ("config.php"); 
    $submitted_email= ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                id, 
                password, 
                salt, 
                email 
            FROM users 
            WHERE 
                email = :email 
        "; 
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
<?php 
require("inc/header.php"); 
?>
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
                    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" width="150"></a>

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
                            <a href="#"  class="dropdown-toggle" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in">&nbsp;</i>Iniciar Sesión</a>
                        </li>
                        <li class="dropdown">
                            <!-- Button trigger modal -->
                            <button id="registrarme" class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#register"><i class="fa fa-pencil-square-o">&nbsp;</i>Registrarse</button>
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
            <h1>Hubo un Error al Registrarte!</h1>
            <p>Porfavor rellene bien sus datos, y vuelta a intentar.</p>
            <h1>&nbsp;</h1>
        </div>
      </div>
    </div>
      <!-- /END THE FEATURETTES -->
<?php 
require ('login.php');  //LLAMA AL BOTON LOGIN 
require ('registro.php');  //LLAMA AL BOTON REGISTRO  
?>


    

    </div><!-- /.container -->
  
<!-- FOOTER -->
<div id="footer" class="clearfix">
  <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                 <h3 class="footer-title">Información</h3>
          <ul>
            <li><a>Ayuda</a></li>
            <li><a>Preguntas Frecuentes</a></li>
            <li><a>Términos y condiciones del sitio</a></li>
            <li><a>Búsqueda de trabajo avanzada</a></li>
            <li><a>Nuestra Compañía</a></li> 
          </ul>
        </div> 
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                <h3 class="footer-title">Información</h3>
          <ul>
            <li><a>Ayuda</a></li>
            <li><a>Preguntas Frecuentes</a></li>
            <li><a>Términos y condiciones del sitio</a></li>
            <li><a>Búsqueda de trabajo avanzada</a></li>
            <li><a>Nuestra Compañía</a></li> 
          </ul>

        </div> 

           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="footer-banner">
                            
                <h3 class="footer-title">Right Footer Widget</h3>
                  <ul>
                    <li>List item here </li>
                    <li>List item here </li>
                    <li>List item with <a href="#">link</a> </li>
                    <li>List item here </li>
                    <li>List item here </li>
                    <li>List item here </li>
                  </ul>

                        </div>
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
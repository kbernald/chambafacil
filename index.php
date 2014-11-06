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
                id_usr, 
                Pass_usr, 
                semilla, 
                Email_usr 
            FROM usuario_usr 
            WHERE 
                Email_usr = :email 
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
            $check_password = hash('sha256', $_POST['password'] . $row['semilla']); 
			
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['semilla']);
            } 
			
            if($check_password === $row['Pass_usr']){
                $login_ok = true;
            } 
        } 
	
        if($login_ok){ 
            unset($row['semilla']); 
            unset($row['Pass_usr']);
            $_SESSION['user'] = $row;  
            header("Location: home.php"); 
            die("Redirecting to: home.php"); 
        } 
        else{ 
            header("Location: error_login.php"); 
            die("Redirecting to: error_login.php");
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
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <!--<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
       <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>-->
      </ol>
      <div class="carousel-inner">
       <!-- <div class="item active">
          <img src="assets/img/slide1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>-->
          <div class="bg item active">
        <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1>Buscar trabajo nunca fue tal fácil.</h1>
                <p>Tu puedes lograrlo, el camino al éxito comienza con el recorrido de nuestros esfuerzos!</p>
                   <div class="input-group input-group-hg input-group-rounded">
                   <span class="input-group-btn">
                   <button type="submit" class="btn"><span class="fui-search"></span></button>
                   </span>
                   <input type="text" class="form-control" placeholder="ingeniero, abogado, enfermero, diseñador..." id="search-query-2">       
                   </div> 
                <p>&nbsp;</p>
            </div>
          </div>
        </div>
      </div>
     <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><i class="fa fa-chevron-left fa-3"></i></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><i class="fa fa-chevron-right fa-3"></i></a> -->
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <img class="img-circle" src="assets/img/maletin.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Misión</h2>
          <p class="text-justify">Brindar un servicio de calidad para la búsqueda de empleos de forma eficiente y óptima, agilizando el seguimiento de ofertas actuales en el Mercado, para profesionales y personas con deseos de superación.</p>
         <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4 col-sm-4 col-xs-12">
          <img class="img-circle" src="assets/img/cronometro.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Visión</h2>
          <p class="text-justify">Ser reconocido como el mejor portal web de búsqueda de empleos del Perú, brindando un servicio de calidad en la búsqueda de ofertas laborales de forma eficiente y óptima para el año 2015.</p>
         <!-- <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>  -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4 col-sm-4 col-xs-12">
          <img class="img-circle" src="assets/img/buscador.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Objetivos</h2>
          <p class="text-justify">Planificar y desarrollar las políticas de acción que permitan impulsar iniciativas empresariales y de empleo en el Perú, integrando actuaciones y programas en los ámbitos de formación ocupacional, inserción socio laboral de personas en desempleo y de promoción de la iniciativa empresarial.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <h2 class="featurette-heading">¿Buscando Chamba?</br> <span class="text-muted">Es muy facil.</span></h2>
          <p class="lead">Revoluciona la manera de buscar trabajo en ChambaFácil. Y entérate qué es lo que buscan las empresas.</p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <img class="featurette-image img-responsive" src="assets/img/1.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <img class="featurette-image img-responsive" src="assets/img/2.png" alt="Generic placeholder image">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <h2 class="featurette-heading">Nunca antes visto. <span class="text-muted">Algo nuevo.</span></h2>
          <p class="lead">Ahora sabrás que es lo que las empresas están buscando de ti. Te diremos que es lo que faltó para conseguir la chamba.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <h2 class="featurette-heading">¿Tienes chamba que publicar? <span class="text-muted">Haslo.</span></h2>
          <p class="lead">Entonces, ¿qué esperas? Publica, evalúa y contrata.</p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <img class="featurette-image img-responsive" src="assets/img/4.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
<?php 
require ('popup_empresa.php');  //LLAMA AL BOTON REGISTRO  
require ('popup_postulante.php');  //LLAMA AL BOTON POSTULAR  
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
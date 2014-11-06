<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap Tutorial</title>
    <meta name="description" content="Bootstrap Tab + Fixed Sidebar Tutorial with HTML5 / CSS3 / JavaScript">
    <meta name="author" content="Untame.net">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
        body { background: url(assets/bglight.png); }
        .hero-unit { background-color: #fff; }
        .center { display: block; margin: 0 auto; }
    </style>
</head>

<body>

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand">PHP Signup + Bootstrap Example</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li><a href="index.php">Return Home</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!----------------------------------------------------------------------------------------------------------->
<div   class="modal fade" id="cinfopersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" id="popupregistro">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel" align="center">Ingrese  Datos   Personales</h4>
                    </div>
                    
<!--------------------------------------------------------------------------------------->
<div class="modal-body">
    <p>Todos los campos son importantes.</p> 
        <form role="form">
                                           
<!-----------------------------------------------------------------------> 
                            
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         Nombre
                <div class="form-group">
<input type="text" name="name" id="name" class="form-control input-lg"  tabindex="6">
                </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
        Fecha de Nacimiento
                <div class="form-group">
<input type="text" name="fecnaci" id="fecnaci" class="form-control input-lg" placeholder="DD/MM/AAAA" tabindex="6">
                </div>
        </div>
</div> 
                            
<!----------------------------------------------------------------------->                            
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         Apellido Paterno
                <div class="form-group">
<input type="text" name="apepa" id="apepa" class="form-control input-lg"  tabindex="6">
                </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
         Apellido Materno
                <div class="form-group">
<input type="text" name="apema" id="apema" class="form-control input-lg" tabindex="6">
                </div>
        </div>
</div>                                    
                            
<!----------------------------------------------------------------------->  
                            
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">                            
<div class="dropdown">
    Estado Civil
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:265px; height:45px;">
    
    <span class="caret"></span>
        </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Soltero</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Casado</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Divorciado</a></li>
    <!--<li role="presentation" class="divider"></li>-->
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Viudo</a></li>
  </ul>
</div>
        </div>
    
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="dropdown">
    Sexo
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:265px; height:45px;">
    
    <span class="caret"></span>
        </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Masculino</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Femenino</a></li>
  </ul>
            </div>
        </div>
</div>
                            
<!----------------------------------------------------------------------->
  
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">                            
<div class="dropdown">
    Tipo de Documento
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:265px; height:45px;">
    
    <span class="caret"></span>
        </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DNI</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Carne de extranjeria</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pasaporte</a></li>
    <!--<li role="presentation" class="divider"></li>-->
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Otros</a></li>
  </ul>
</div>
        </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        Documento
                    <div class="form-group">
                        <input type="text" name="doc" id="doc" class="form-control input-lg"  tabindex="6">
                    </div>
    </div>
</div> 
                            
<!----------------------------------------------------------------------->                            
                            
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">                            
<div class="dropdown">
    País
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:265px; height:45px;">
    
    <span class="caret"></span>
        </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Perú</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bolivia</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brazil</a></li>
    <!--<li role="presentation" class="divider"></li>-->
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Uruguay</a></li>
  </ul>
</div>
        </div>
    
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="dropdown">
    Departamento
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:265px; height:45px;">
    
    <span class="caret"></span>
        </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lima</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Piura</a></li>
  </ul>
            </div>
        </div>
</div>
                            
<!----------------------------------------------------------------------->  
                            
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         Teléfono
                <div class="form-group">
<input type="text" name="telefono" id="telefono" class="form-control input-lg"  tabindex="6">
                </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
        Celular
                <div class="form-group">
<input type="text" name="celular" id="celular" class="form-control input-lg" tabindex="6">
                </div>
        </div>
</div>                             

<!----------------------------------------------------------------------->

<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
         Dirección
                <div class="form-group">
<input type="text" name="password_confirmation" id="direccion" class="form-control input-lg"  tabindex="6" style="width:568px;">
                </div>
        </div>

</div>

<!----------------------------------------------------------------------->
            
<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">                            
<div class="dropdown">
    País de Nacimiento
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="width:265px; height:45px;">
    
    <span class="caret"></span>
        </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Perú</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bolivia</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Brazil</a></li>
    <!--<li role="presentation" class="divider"></li>-->
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Uruguay</a></li>
  </ul>
</div>
        </div>            

</div>   
            
<!----------------------------------------------------------------------->            
</div>
<!---------------------------------------------------------------------------------------->
    
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <span class="button-checkbox">
            <label class="checkbox" for="checkbox1">
<input type="checkbox" value=""  tabindex="7" id="checkbox1" data-toggle="checkbox" class="custom-checkbox"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
Acepto los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y condiciones</a> de este sitio de búsqueda de trabajo.
            </label>
        </span>
    </div>
</div>
    
<!---------------------------------------------------------------------------------------->
                            
<div class="row">
</div>
</form>
</div>
<!---------------------------------------------------------------------------------------->
                
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Limpiar</button>
<button id="guardar" type="submit"  value="Register" class="btn btn-primary" tabindex="7">Guardar</button>
<button id="cancelar" type="submit"  value="Register" class="btn btn-primary" tabindex="7">Cancelar</button>
</div>
                </div>
            </div>
        </div>    
<!----------------------------------------------------------------------------------------------------------->
</body>
</html>
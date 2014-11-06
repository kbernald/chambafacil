<!--   navbar --> 
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="container-fluid">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" width="150"></a>

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
                            
                        </li>
                        <li class="dropdown">
                            <!-- Button trigger modal -->
                            <div class="btn-group">
  <button class="btn btn-inverse navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user">&nbsp;</i>
   <?php echo htmlentities($_SESSION['user']['Email_usr'], ENT_QUOTES, 'UTF-8'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-menu-inverse" role="menu">
    <li><a href="#">Editar Perfil</a></li>
    <li><a href="#">Configuracion</a></li>
    <li class="divider"></li>
    <li><a href="logout.php"  class="dropdown-toggle"><i class="fa fa-sign-out">&nbsp;</i>Cerrar Sesión</a></li>
  </ul>
</div>
                            </button>
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
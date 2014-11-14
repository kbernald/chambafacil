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
                <p class="navbar-text">Panel de Empresa</p>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <!-- Button trigger modal -->
                            <div class="btn-group">
  <button class="btn btn-danger navbar-btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-building">&nbsp;</i>
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
                <li>&nbsp;</li>
                    </ul>
                    
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
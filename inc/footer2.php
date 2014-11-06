   <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>Ubícanos</h3>
                            <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Social</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Acerca</h3>
                            <p>Furabitur aliquet quam id dui posuere blandit. Furabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Todos los derechos reservados &copy; ChambaFacil 2014
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<?php
if (isset($page) && !empty($page)) {
if($page == "home") {
?>
        <!-- Popup Registro -->
        <div   class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" id="popupregistro">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Registrate</h4>
                    </div>
                    <div class="modal-body">
                        <p>Para poder registrarte debes llenar todos los campos.</p> 
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Nombres" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Apellidos" tabindex="2">
                                    </div>
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="ID de usuario" tabindex="3">
                            </div>-->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electronico" tabindex="4">
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña" tabindex="5">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Repetir contraseña" tabindex="6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <span class="button-checkbox">
                                        <label class="checkbox" for="checkbox1">
                                            <input type="checkbox" value=""  tabindex="7" id="checkbox1" data-toggle="checkbox" class="custom-checkbox"><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
                                            Acepto los <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terminos y condiciones</a> de este sitio, incluido el uso de cookies.
                                        </label>


                                    </span>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Limpiar</button>
                        <button id="registrar" type="submit"  value="Register" class="btn btn-primary" tabindex="7">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->     

        <!-- Popup Login -->        

        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
                    </div>
                    <div class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control login-field" value="" placeholder="Ingresa tu correo" id="login-name">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control login-field" value="" placeholder="Contraseña" id="login-pass">
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>

                        <a id="ingresar_login" class="btn btn-primary btn-lg btn-block" >Ingresar</a>
                        <a class="login-link" href="#">¿Olvidaste tu contraseña?</a>
                    </div>        
                </div>
            </div>
        </div>
        <!-- -->      
        <!-- /.container -->
        <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/flat-ui.min.js"></script>   
<?php
}
else{}
}
else {}
?>
    </body>
</html>
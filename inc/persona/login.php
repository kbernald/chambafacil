<!-- Popup Login -->        

        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
                    </div>
                    <form action="index.php" method="post">
                    <div class="login-form">
                        <div class="form-group">
                            <input name="email" type="text" class="form-control login-field" value="<?php echo $submitted_email; ?>" placeholder="Ingresa tu correo" id="login-name">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="form-group">
                            <input name="password" type="password" class="form-control login-field" value="" placeholder="Contraseña" id="login-pass">
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>

                        <input type="submit" class="btn btn-info" value="Login" /> 
                        <a class="login-link" href="#">¿Olvidaste tu contraseña?</a>
                    </div>    
                    </form>
                </div>
            </div>
        </div>
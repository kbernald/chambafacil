<?php 
    require_once ("config.php");
    if(!empty($_POST)) 
    { 
        // Ensure that the user fills out fields 
        if(empty($_POST['password'])) 
        { die("Please enter a password."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { die("Invalid E-Mail Address"); } 
         
        // Check if the username is already taken
        $query = " 
          SELECT 
                1 
            FROM usuario_usr 
            WHERE 
                Email_usr = :email 
        "; 
        $query_params = array( ':email' => $_POST['email'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("This username is already in use"); } 
        $query = " 
            SELECT 
                1 
            FROM usuario_usr 
            WHERE 
                Email_usr = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This email address is already registered"); } 
         
        // Add row to database 
        $query = " 
            INSERT INTO usuario_usr ( 
                Pass_usr, 
                semilla, 
                Email_usr,
				id_tip				
            ) VALUES ( 
                :password, 
                :salt, 
                :email,
				:id_tip
            ) 
        "; 
         
        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt);
		$idtip=3;
        for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
        $query_params = array( 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] ,
			':id_tip'=>$idtip
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
					$subject = "Bienvenido a Chambafacil";
		$headers = "From: info@chambafacil.com \r\n";
		$headers.= "Reply-to: info@chambafacil.com \r\n";
		$headers.= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$headers.= "Mime-Version: 1.0 \r\n";
		$headers.= "Content-Type: text/html";
		$email_user = $_POST['email'];
		$password = $_POST['password'];
		$EMailMensaje= 'Gracias por Registrarte en <strong>chambafacil.com</strong>  <br/>';
		$EMailMensaje= 'Usted ingreso los siguientes datos:  <br/>';
		$EMailMensaje.='<strong>Usuario: </strong>'.$email_user.'<br/>';
		$EMailMensaje.='<strong>Contraseña: </strong>: '.$password.'<br/>';
		mail($email_user, $subject, $EMailMensaje, $headers);
        
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
         header("Location: confirmacion.php"); 
        die("Redirecting to confirmacion.php"); 
        
    } 
       
?>  
<!-- Popup Registro -->
        <div class="modal fade" id="pop-empresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Empresa</h4>
                    </div>
                    <div class="modal-body">
                       
<!-------->
                        
                        
<!-- Nav tabs -->
<ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">Iniciar Sesión</a></li>
  <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">Registrarte</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
  

      
            
                <form action="index.php"  class="tab-pane" method="post">
                    <div class="login-form">
                        <div class="form-group">
                            <input name="email" type="text" class="form-control login-field" value="" placeholder="Ingresa tu correo" id="login-name">
                            <label class="login-field-icon fui-user" for="login-name"></label>
                        </div>

                        <div class="form-group">
                            <input name="password" type="password" class="form-control login-field" value="" placeholder="Contraseña" id="login-pass">
							<input type="hidden" name="pass" value=""/>
                            <label class="login-field-icon fui-lock" for="login-pass"></label>
                        </div>
                        
                         
                        <a class="login-link" href="#">¿Olvidaste tu contraseña?</a>
                         <div class="modal-footer">
                        <input type="submit" id="logeo" class="btn btn-info" value="Iniciar"/>
                    </div>
                    </div>
               </form>

      
      
  </div>
</div>                   
                        
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- -->   
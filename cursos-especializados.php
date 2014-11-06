<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>
<?php
$page = "home";  // NOMBRE DEL PHP
$title = "Chambafacil"; //TITULO DE LA PAGINA
$metaD = "¿Buscas trabajo? aqui es muy facil"; //DESCRIPCION DE LA PAGINA
?>
<?php 
require ('inc/header.php'); //LLAMA A LA CABEZERA HTML HEAD Y BODY 
include ('inc/menu.php');  //LLAMA AL MENU DE LA PAGINA
?>

<!-- Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
           <?php require ('inc/sidebar.php'); ?> <!-- LLAMA A LA BARRA IZQUIRDA MENU SIDEBAR -->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
         
        
            <h3 class="footer-title">Cursos de Especialización</h3>
<form action="curso_especializado_bernal.php" method="get">		
Tipo de Estudio
    <SELECT NAME="tipo" SIZE=1> 
<OPTION VALUE="Especializado">Especializado</OPTION>
<OPTION VALUE="Maestria">Maestria y Postgrado</OPTION>
</SELECT><br><br>
    
Pais
<SELECT NAME="pais" SIZE=1>     
<optgroup label="---------------------"></optgroup>       
<option value="Argentina">Argentina</option>          
<option value="Bolivia">Bolivia</option>   
<option value="Chile">Chile</option>   
<option value="Colombia">Colombia</option>   
<option value="Costa">Costa Rica</option>   
<option value="Ecuador">Ecuador</option>   
<option value="Mexico">Mexico</option>   
<option value="Panama">Panama</option>   
<option value="Republica">Republica Dominicana</option>   
<option value="Urugu}ay">Uruguay</option>   
<option value="Vnezuela">Venezuela</option>   
<option value="Alemania">Alemania</option>   
<option value="Australia">Australia</option>   
<option value="Austria">Austria</option>   
<option value="Brasil">Brasil</option>   
<option value="Bulgaria">Bulgaria</option>   
<option value="Belgica">Bélgica</option>   
<option value="Canada">Canada</option>   
<option value="China">China</option>   
<option value="Corea">Corea</option>   
<option value="Croacia">Croacia</option>   
<option value="Cuba">Cuba</option>   
<option value="Dinamarca">Dinamarca</option>   
<option value="Salvador">El Salvador</option>   
<option value="Emiratos">Emiratos Arabes</option>   
<option value="Escocia">Escocia</option>   
<option value="Eslovaquia">Eslovaquia</option>   
<option value="Eslovenia">Eslovenia</option>   
<option value="España">Espana</option>   
<option value="Eeuu">Estados Unidos</option>   
<option value="Estonia">Estonia</option>   
<option value="Finalndia">Finlandia</option>   
<option value="Francia">Francia</option>   
<option value="Grecia">Grecia</option>   
<option value="Gutemala">Guatemala</option>   
<option value="Haiti">Haiti</option>   
<option value="Holanda">Holanda</option>   
<option value="Honduras">Honduras</option>   
<option value="Hungria">Hungria</option>   
<option value="India">India</option>   
<option value="Inglaterra">Inglaterra</option>   
<option value="1000">Internacional</option>   
<option value="Irak">Irak</option>   
<option value="Irlanda">Irlanda</option>   
<option value="Israel">Israel</option>   
<option value="Italia">Italia</option>   
<option value="Japon">Japon</option>   
<option value="Letonia">Letonia</option>   
<option value="lituania">Lituania</option>   
<option value="Malasia">Malasia</option>   
<option value="Nicaragua">Nicaragua</option>   
<option value="Noruega">Noruega</option>   
<option value="Zelanda">Nueva Zelanda</option>   
<option value="Paraguay">Paraguay</option>   
<option value="Polonia">Polonia</option>   
<option value="Portugal">Portugal</option>   
<option value="Puerto">Puerto Rico</option>   
<option value="Checa">Republica Checa</option> 
<option value="Malta">República de Malta</option>   
<option value="Rumania">Rumania</option>   
<option value="Rusia">Rusia</option>   
<option value="Singapur">Singapur</option>   
<option value="Suecia">Suecia</option>   
<option value="Suiza">Suiza</option> 
    </SELECT><br><br>
Institucion <input type="text" name="institucion" /><br><br>
Carrera <input type="text" name="carrera" /><br><br>
Anio de Ingreso <input type="text" name="anio" /><br><br>
Ciclo <input type="text" name="ciclo" /><br><br>
Comentarios <textarea name="comentario" /></textarea><br><br>    
<div id="boton" >
 <button class="btn btn-info" name="btn_aceptar" type="button">Aceptar</button>

<button class="btn btn-info" name="btn_sig" type="submit" onClick="Referencias.html">Siguiente</button>       
  </div> <br>
		
Cargue archivo que complemente lo que ha colocado en los campos<input type="file" name="examinar" id="fileField"  />
 </form>   
            
            
            
        </div>
      </div>
    </div>
        <!-- -->
<?php
require ('inc/footer.php');
?>

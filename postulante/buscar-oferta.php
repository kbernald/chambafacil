<?php 
require('inc/header.php'); 
require_once('../config.php');
$_SESSION['clave']=$_COOKIE['pass'];
?>
      <?php
require_once '../database.php';
    $result;
 
    $conn = dbConnect();
    // Create the query
    $sql = 'SELECT * FROM empresa_emp';
    // Create the query and asign the result to a variable call $result
    $result = $conn->query($sql);        
    // Extract the values from $result
    $rows = $result->fetchAll();
?>
<!-- CONTENIDO -->
 
            <h3>Busqueda de Oferta de Trabajo</h3>  
               <form method="post" action="">
       
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Lugar:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 --><div class="col-lg-6">
      <label class="title">Categoria:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     <div class="row">
  <div class="col-lg-6">
      <label class="title">Fecha:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 --><div class="col-lg-6">
      <label class="title">Tipo de Horario:</label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
   <div class="row">
    <div class="col-lg-6">
        <label class="title">Ingrese una palabra clave:</label>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Buscar</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.form-group -->
        </div>
       </div>
   </form>
     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Resultados de Oferta de Trabajo </div> 
      <!-- Table -->
    <table class="table">
        <thead>
            <tr> 
                <th>LOGO</th>
                <th>ID</th>
                <th>RUC</th>
                <th>NOMBRE DE LA EMPRESA</th>
                <th>RUBRO</th>
                <th>DIRECCION</th>
                <th>TRAYECTORIA</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($rows as $row) {   
        ?>
            <tr>
             <td><img src="holder.js/50x50/text:Logo"></td>
                <td><?php echo $row['id_emp']; ?></td>
                <td><?php echo $row['ruc_emp']; ?></td>
                <td><?php echo $row['Nombre_emp']; ?></td>
                <td><?php echo $row['Rubro_emp']; ?></td>
                <td><?php echo $row['dir_emp']; ?></td>
                <td><?php echo $row['Tray_emp']; ?></td>
                 <td><button class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td>  
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>  
            
         <!-- <h1 class="page-header">Busca oferta de trabajo</h1>

          <div class="row ">
            <div class="col-xs-6 col-sm-3">
            
              <h4>Lugar</h4>
              <select class="selectpicker">
                  <option value="">Cualquiera</option>
                  <option value="+ST900" >Todo el país</option>
            <option value="+ST000">Extranjero</option>
            <option value="+ST001">Amazonas</option>
            <option value="+ST002">Ancash</option>
            <option value="+ST003">Apurímac</option>
            <option value="+ST004">Arequipa</option>
            <option value="+ST005">Ayacucho</option>
            <option value="+ST006">Cajamarca</option>
            <option value="+ST007">Callao</option>
            <option value="+ST008">Cusco</option>
            <option value="+ST009">Huancavelica</option>
            <option value="+ST010">Huánuco</option>
            <option value="+ST011">Ica</option>
            <option value="+ST012">Junín</option>
            <option value="+ST013">Lambayeque</option>
            <option value="+ST014">La Libertad</option>
            <option value="+ST015">Lima</option>
            <option value="+ST016">Loreto</option>
            <option value="+ST017">Madre de Dios</option>
            <option value="+ST018">Moquegua</option>
            <option value="+ST019">Pasco</option>
            <option value="+ST020">Piura</option>
            <option value="+ST021">Puno</option>
            <option value="+ST022">San Martín</option>
            <option value="+ST023">Tacna</option>
            <option value="+ST024">Tumbes</option>
            <option value="+ST025">Ucayali</option>
      </select>

  </select>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h4>Categoria</h4>
              <select class="selectpicker">
                          <option value="">Cualquiera
                          </option><option value="+SC000">Administración/Oficina
                </option><option value="+SC001">Arte/Diseño/Medios
                </option><option value="+SC002">Científico/Investigación
                </option><option value="+SC003">Informática/Telecom.
                </option><option value="+SC004">Dirección/Gerencia
                </option><option value="+SC005">Economía/Contabilidad
                </option><option value="+SC006">Educación/Universidad
                </option><option value="+SC007">Hostelería/Turismo
                </option><option value="+SC008">Ingeniería/Técnico
                </option><option value="+SC009">Legal/Asesoría
                </option><option value="+SC010">Márketing/Ventas
                </option><option value="+SC011">Medicina/Salud
                </option><option value="+SC012">Recursos Humanos
                </option><option value="+SC013">Otros                   

                        </option>
  </select>
            </div>
            <div class="col-xs-6 col-sm-3 placeholderceholder">
              <h4>Fecha</h4>
              <select class="selectpicker">
                          <option value="">Cualquiera
                          </option><option value="+TM001">Hoy y ayer
                          </option><option value="+TM003">Ultimos 3 días
                          </option><option value="+TM007">Ultimos 7 días
                          </option><option value="+TM014">Ultimos 14 días
                          </option><option value="+TM021">Ultimos 21 días
                          </option><option value="+TM031">Ultimos 31 días
                        </option></select>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <h4>Tipo de Horario</h4>
              <select class="selectpicker">
                          <option value="">Cualquiera
                          </option><option value="+TE000">Tiempo Completo
            </option><option value="+TE001">Medio Tiempo
            </option><option value="+TE002">Por Horas
            </option><option value="+TE003">Temporal
            </option><option value="+TE004">Beca/Prácticas
            </option><option value="+TE005">Desde Casa

              </select>
                        </div>


                


                       <div class="row">
                        <div class="col-xs-6 col-sm-6">

                          <h4>Por palabras</h4>
                           <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" id="search-query-3">
              <span class="input-group-btn">
                <button type="submit submit-bold" class="btn"><span class="fui-search"></span></button>
              </span>
            </div>
       </div>  
            </div>
            
            
          </div>
          <h2 class="sub-header">Resultado</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre de la Empresa</th>
                  <th>Fecha</th>
                  <th>Cargo</th>
                  <th>Lugar</th>
                  <th>Tipo</th>
                  <th>Categoria</th>
                    <th>Postular</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  
                </tr>
                  <tr>
                  <td>Pacifico Seguros</td>
                  <td>12/10/2014</td>
                  <td>Senior PHP</td>
                  <td>Ica</td>
                  <td>Part Time</td>
                  <td>Servicios</td>
                  <td><button class="btn btn-navbar btn-danger" data-toggle="modal" data-target="#postular">Postular</button></td> 
                </tr>
              </tbody>
            </table>
          </div>-->
    
<!-- -->
<?php
require_once 'inc/footer.php';
?>

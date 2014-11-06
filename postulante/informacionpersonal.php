<?php 
require('inc/header.php'); 
require_once('../config.php');
$_SESSION['clave']=$_COOKIE['pass'];
?>
<!--CONTENIDO-->
    
     <form method="post" action="ajax_php/ajax_guarda_informacionpersonal.php">
     <h3>Informaci&oacute;n Personal</h3> 
   <div class="row">
   <div class="col-lg-6">
       <div class="foto-perfil">
        <img data-src="holder.js/400x400" class="img-thumbnail" alt="400x400" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjEwMCIgeT0iMTAwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEzcHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MjAweDIwMDwvdGV4dD48L3N2Zz4=" style="width: 450px; height: 300px;">
       </div>
              <div class="form-group">
                  
              <label for="exampleInputFile">Foto de Perfil</label>
              <input type="file" id="exampleInputFile">
              <p class="help-block">Tama&nacute;o de la imagen (Max. 300 x 300 px).</p>
            </div>
  </div><!-- /.col-lg-6 -->
       
        <div class="col-lg-6">
      <label class="title">Nombres:<span class="required">*</span></label>
        <input id='nombre' name='nombre'type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
      <label class="title">Apellido Paterno:<span class="required">*</span></label>
        <input id='ape_pat' name='ape_pat' type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Apellido Materno:<span class="required">*</span></label>
        <input id='ape_mat' name='ape_mat' type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 --> 
    <div class="col-lg-6">
       <label class="title">Fecha de Nacimiento:<span class="required">*</span></label>
        <input type="text" class="form-control" value="02/16/12" data-date-format="mm/dd/yy" name='dp2' id="dp2">
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
       
           
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Estado Civil:<span class="required">*</span></label>
        <div class="form-group">
        <select id='est_civil' name='est_civil' data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
    <option value="1">Soltero</option>
    <option value="2">Casado</option>
    <option value="3">Viudo</option>
    <option value="4">Divorciado</option>
        </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Sexo:<span class="required">*</span></label>
        <div class="form-group">
            <select id='sexo' name='sexo' data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  <div class="col-lg-6">
      <label class="title">Tipo de Documento:<span class="required">*</span></label>
        <div class="form-group">
            <select name='tip_doc' id='tip_doc' data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
    <option value="1">DNI</option>
    <option value="2">Carnet Universitario</option>
    <option value="3">Libreta Militar</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Nro. de Documento:<span class="required">*</span></label>
        <input id='nro_doc' name='nro_doc' type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->   
         <div class="row">
   <div class="col-lg-6">
       <label class="title">Pais:<span class="required">*</span></label>
        <div class="form-group">
            <select id="cbo_pais" onchange="javascript:habilitarCboDepartamento();" data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
                <?php 
                $sql = "SELECT * FROM pais_pai";
                $stmt = $db->prepare($sql);
                $result = $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
                foreach ($data as $k => $v) {
                    printf('<option value="%d">%s</option>', $k, $v);
                }
                ?>
            </select>
          </div>
       <script type="text/javascript">
           function habilitarCboDepartamento(){
                $('#cbo_departamento').removeAttr("disabled");

           }
       </script>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <label class="title">Departamento:<span class="required">*</span></label>
        <div class="form-group">
            <select id="cbo_departamento" name='cbo_departamento' onchange="javascript:habilitarCboProvincia();"disabled="true" data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
                <?php 
                $sql = "SELECT id_dep,nom_dep FROM Departamento_dep";
                $stmt = $db->prepare($sql);
                $result = $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
                foreach ($data as $k => $v) {
                    printf('<option value="%d">%s</option>', $k, $v);
                }
                ?>
            </select>
            <script type="text/javascript">
            function habilitarCboDistrito(){
	           idpais = $("#cbo_pais option:selected").attr("value");


	           //pagina.IndexCboDistritos(iddepartamento)
	           $('#cbo_departamento').removeAttr("disabled");
            }
            
            </script>

          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
         <div class="row">
   <div class="col-lg-6">
       <label class="title">Provincia:<span class="required">*</span></label>
        <div class="form-group">
            <select id='cbo_provincia' name='cbo_provincia' onchange="javascript:habilitarCboDistrito();" disabled="true" data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
                <option value="1">Barranca</option>
                <option value="2">Huacho</option>
            </select>
            <script type="text/javascript">
                function habilitarCboProvincia(){
	           iddepartamento = $("#cbo_departamento option:selected").attr("value");


	           //pagina.IndexCboDistritos(iddepartamento)
	           $('#cbo_provincia').removeAttr("disabled");
            }
            
            </script>
          </div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <label class="title">Distrito:<span class="required">*</span></label>
        <div class="form-group">
            <select id='cbo_distrito' name='cbo_distrito' disabled="true" data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
    <option value="1">Lima</option>
    <option value="2">Callao</option>
            </select>
            <script type="text/javascript">
                function habilitarCboDistrito(){
	           idprovincia = $("#cbo_provincia option:selected").attr("value");


	           //pagina.IndexCboDistritos(iddepartamento)
	           $('#cbo_distrito').removeAttr("disabled");
            }
            
            </script>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
          <div class="row">
  <div class="col-lg-12">
      <label class="title">Direcci&oacute;n:<span class="required">*</span></label>
        <input id='direccion' name='direccion' type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
                <div class="row">
  <div class="col-lg-6">
      <label class="title">Telefono Celular:<span class="required">*</span></label>
        <input id='tel_celular' name='tel_celular' type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
       <label class="title">Telefono Fijo:<span class="required">*</span></label>
        <input id='tel_fijo' name='tel_fijo' type="text" placeholder="..." class="form-control" />
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
  
                <div class="row">
  <div class="col-lg-6">
      <label class="title">Situacion Actual:<span class="required">*</span></label>
        <div class="form-group">
            <select id='sit_actual' name='sit_actual' data-toggle="select" class="form-control select select-default">
    <option value="0">Seleccionar</option>
    <option value="1">Trabajador Dependiente</option>
    <option value="2">Trabajador Independiente</option>
    <option value="3">Desempleado</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
   <div class="col-lg-6">
             <label class="title">Pais de Nacimiento:<span class="required">*</span></label>
        <div class="form-group">
            <select id='pais_nac' name='pais_nac' data-toggle="select" class="form-control select select-default">
                <option value="0">--SELECCIONAR--</option>
                 <?php 
                $sql = "SELECT * FROM pais_pai";
                $stmt = $db->prepare($sql);
                $result = $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
                foreach ($data as $k => $v) {
                    printf('<option value="%d">%s</option>', $k, $v);
                }
                ?>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
         <button  type="submit" id='save_datos' name='save_datos' class="btn btn-success">Guardar</button>
   </form>
</div>
</div>
</div>
<!--FIN CONTENIDO-->
<?php 
require('inc/footer.php');  
?>
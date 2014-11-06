<?php 
require('inc/header.php'); 
require('inc/menu.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
?>

 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
<?php require("inc/sidebar.php"); ?>
          </div>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
     <form method="post" action="">
     <center><h3>Nueva Oferta</h3> </center>
     <div class="row">
  <div class="col-lg-6">
      <label class="title">Descripcion de Informe:<span class="required"></span></label>
    <input type="text" placeholder="..." class="form-control" />
      
    </div><!-- /.col-lg-6 -->
       
        <div class="col-lg-6">   
       <label class="title">Fecha de Inicio:<span class="required"></span></label>
     <input type="text" class="form-control" value="MM/DD/AA" data-date-format="mm/dd/yy">
    </div><!-- /.col-lg-6 -->  
         
         
<div class="col-lg-6">
       <label class="title">Fecha de Fin:<span class="required"></span></label>
        <input type="text" class="form-control" value="MM/DD/AA" data-date-format="mm/dd/yy">
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->  
         
         
         
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Departamento:<span class="required"></span></label>
       <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
      
</div><!-- /.col-lg-6 -->
             
   <div class="col-lg-6">
       <label class="title">Provincia:<span class="required"></span></label>
        <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->    
     
         <div class="row">
  <div class="col-lg-6">
      <label class="title">Distrito:<span class="required"></span></label>
           <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <label class="title">Dirección:<span class="required"></span></label>
    <input type="text" placeholder="..." class="form-control" />
      
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->     
      <div class="row">
  
    <div class="col-lg-6">
      <label class="title">Categoria:<span class="required"></span></label>
           <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <label class="title">Horario:<span class="required"></span></label>
      <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
    </div><!-- /.col-lg-6 -->
          
          </div><!-- /.row -->
      
        
         
         
         
        <div class="row"> 
         <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-6 column">
					<h3 class="text-primary">
						Seleccionar uno o mas perfiles:
					</h3>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								Perfiles:
							</h3>
						</div>
						<div class="panel-body">
							Perfil 1
						</div>
						<div class="panel-footer">
							Perfil 2
						</div>
					</div>
				</div>
				<div class="col-md-6 column">
					<h3 class="text-primary">
						Funciones:
					</h3>
                       <div class="col-lg-6">
                    
                    <div class="form-group">
					<p  class="text-justify">
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. 
In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit.
Nam purus nibh, lacinia non faucibus et, pharetra in dolor. 
Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales.</small>
					</p> </div>   </div><!-- /.col-lg-6 -->
				</div>
			</div>
		</div>
	</div>
</div>
          
                     
          
</div><!-- /.row -->
         
         
         
         <div class="row"> 
             
         <div class="col-lg-6">
      <label class="title">Seleccionar cargo:<span class="required"></span></label>
           <div class="form-group">
            <select data-toggle="select" class="form-control select select-default">
    <option value="0">--SELECCIONAR--</option>
            </select>
          </div>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <label class="title">Cargo no esta en lista:<span class="required"></span></label>
    <input type="text" placeholder="..." class="form-control" />
      
    </div><!-- /.col-lg-6 -->
         
             
          </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
      <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="submit">Agregar <span class="caret"></span></button>
      
    </div><!-- /.col-lg-6 -->  <br> 
             
             
             
         
         
        
        
       
         <div class="col-lg-6">
        <center>
     
			<table class="table" >
				<thead>
					<tr>
						<th>
						 <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="submit">Grabar         <span class="caret"></span></button>
						</th>
						<th>
							<button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="submit">Publicar         <span class="caret"></span></button>
						</th>
						
					</tr>
				</thead>
			</table>
	
     </center>
     
     
      </div><!-- /.col-lg-6 -->   
     </div><!-- /.row -->
         
     
         
    <p>&nbsp;</p>
   
   </form>
     <p>&nbsp;</p>
     <div class="panel panel-default">
      <!-- Default panel contents -->
     
</div>
</div>
</div>
<?php 
require('inc/footer.php');  
?>
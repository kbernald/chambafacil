<?php
require("../config.php");
if(empty($_SESSION['user'])) 
{
header("Location: ../index.php");
die("Redirecting to index.php"); 
}
require('inc/header.php'); 
$_SESSION['clave']=$_COOKIE['pass'];
$_SESSION['id_usr']=$_SESSION['user']['id_usr'];
?>
<!-- CONTENIDO -->
         <div class="row">
                    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-primary">
				Ofertas Recomendadas
			</h3>
		</div>
	</div>
</div>
                    <p class="clearfix">
                    
                     </p><div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
				<table class="table table-striped">
				<thead>
					<tr>
						<th>
							Puesto
						</th>
						<th>
							Tipo de Horario
						</th>
						<th>
							Salario
						</th>
						<th>
							Distrito						</th>
                        <th>
							Base de Oferta
						</th>
                        <th>
							Fecha de Oferta
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Analista
						</td>
						<td>
							Full time
						</td>
						<td>
							$ 5000.00
						</td>
						<td>
							Los Olivos
						</td>
                        
                       <td>
							<a href="seguimiento_ofert.html" target="x">Base de oferta</a>
						</td>
                        <td>
							10/12/2014
						</td>
							
					</tr>
					<tr class="active">
						<td>
							Programador
						</td>
						<td>
							Part time
						</td>
						<td>
							<span>$ 5000.00</span>
						</td>
						<td>
							Comas
						</td>
                    
                        <td>
							<a href="seguimiento_ofert.html" target="x">Base de oferta</a>
						</td>
                        <td>
							10/12/2014
						</td>
                        </tr>
                    <tr class="active">
                        
<td>
							Consultor						</td>
						<td>
							Full time
						</td>
						<td>
							<span>$ 10000.00</span>
						</td>
						<td>
							Surco						</td>
                    
                        <td>
							<a href="seguimiento_ofert.html" target="x">Base de oferta</a>
						</td>
                        <td>
							12/12/2014
						</td>					</tr>
					<tr class="success">
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
						<td>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
	<div class="row clearfix">
			 <button type="button" class="btn btn-primary active btn-block btn-lg">Limpiar</button> <button type="button" class="btn btn-primary btn-block btn-lg active">Volver</button>
	</div>
</div>          
                    
                    
                    <p></p>
                </div>
            
        </div>
      </div>
    </div>
        <!-- -->
<?php
require ('inc/footer.php');
?>

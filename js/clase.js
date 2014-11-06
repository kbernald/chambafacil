pagina={
item:0,
item_funcion:"",
item_selected:0,

idrubro:0,
iddepartamento:0,
iddistrito:0,
desc_empresa:"",
empresa_selected:0,
total_paginacion:0,
correo:"",





IndexCboDepartamento:function(){




var html_list_departamento="";
var ruta='../img/empresas/logos/';
$.getJSON("php/clases.php?funcion=nListarCboDeparmento", function(json) {
		cont = 1;
		
		
		$.each(json.data, function(idItem, valItem) {
		


		iddepartamento = valItem.iddepartamento;
		desc_departamento= valItem.desc_departamento;
	if(cont==1){
html_list_departamento+="<option value='0'>Seleccione Departamento</option>";

}

							
	html_list_departamento+="<option value="+iddepartamento+">"+desc_departamento+"</option>";
		
		
		
		
			cont++;


			
		
		
		
		
		});


		
		$("#cbo_departamento").empty();
		$("#cbo_departamento").append(html_list_departamento); 
		









	})


},
IndexCboDistritos:function(iddepartamento){




var html_list_distritos="";
var ruta='../img/empresas/logos/';
$.getJSON("php/clases.php?funcion=nListarCboDistrito&iddepartamento="+iddepartamento, function(json) {
		cont = 1;
		
		
		$.each(json.data, function(idItem, valItem) {
		


		iddistrito = valItem.iddistrito;
		desc_distrito= valItem.desc_distrito;
	

			
if(cont==1){
html_list_distritos+="<option value='0'>Seleccione Distrito</option>";

}


	html_list_distritos+="<option value="+iddistrito+">"+desc_distrito+"</option>";
		
		
		
		
		cont++;	


			
		
		
		
		
		});


		
		$("#cbo_distrito").empty();
		$("#cbo_distrito").append(html_list_distritos); 
		









	})


}


}
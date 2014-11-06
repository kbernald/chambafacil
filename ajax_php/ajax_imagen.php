<?php
	$uploaddir = '../img/empresas/logos/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	echo ($_FILES['userfile']['name']);
	}
	else 
	{
	echo "No se pudo cargar el archivo.";
	}

?>
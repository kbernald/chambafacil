<!DOCTYPE html>
<html>
    <head>
 <meta charset="utf-8">   
    <meta name="description" content="<?php error_reporting(0);if(isset($metaD) && !empty($metaD)) {
echo $metaD;
}
else {
 echo "Bolsa de trabajo virtual de Perú";
} ?>" />

    <title><?php if(isset($title) && !empty($title)) {
echo $title;
}
else {
echo "Chambafacil | Buscar trabajo nunca fue tan facil";
} ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Loading Bootstrap -->
        <link href="../assets/css/vendor/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/datepicker.css" rel="stylesheet">
        <!-- Loading Flat UI -->
        <link href="../assets/css/flat-ui.css" rel="stylesheet">
        <link rel="shortcut icon" href="../assets/img/favicon.ico">
        <!-- Loading Font-Awesome -->
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Loading Estilo Chambafacil -->
        <link href="../assets/css/style.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="assets/js/vendor/html5shiv.js"></script>
          <script src="assets/js/vendor/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>                
        <script type="text/javascript" src="../js/jquery-1.4.4.js"></script>
               <script type="text/javascript">
$(document).ready(function () {
	$('#logeo').click(function(){
		password= $('#login-pass').val();
		document.cookie="pass="+password;

	});
            
});
        
        </script>
	
	</head>
<body>  

<?php include("inc/menu.php"); ?>
 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
<?php include("inc/sidebar.php"); ?>
          </div>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">   
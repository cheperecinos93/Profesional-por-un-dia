<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link href="../dist/img/logo.ico" rel="shortcut icon"  type="image/ico"/>
    <link rel="stylesheet" type="text/css" href="../dist/css/barFloat.css"/>
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/checkbox-radio-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/style-custom.css">
    <script src="../dist/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>        
    <script type="text/javascript" src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../dist/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../dist/js/barFloat.js"></script>
    <title>Profesional por un día</title>
</head>
<body style="background-color: #222d32;">
	<div class="contenedorFloat bar-close">
	    <div class="contentFloat">
	    <center>
	        <h4 id="textoanimado" style="color:white;"></h4>
	        <a href="#" id="continuar" class="btn btn-sm btn-warning" style="color:#FFF;"></a>
	    </center>
	    </div>
	</div>
	<script type="text/javascript">
		 $(document).ready(function(){
            barFloatshow("<center><img src='../dist/img/logo.png' width='60' height='60'> <br><br>  HOLA NUEVAMENTE <br> AHORA SELECCIONA UNA CARRERA <br><br></center>","CONTINUAR");
        });    
	</script> 
	<div class="container-fluid bar-close" id="contenedorbody">
		 <div class="row">
		 	<div class="col-lg-6 col-md-6 col-sm-6 col-sm-offset-3 col-lg-offset-3 col-md-offset-3" id="elegircarrera">
		 		<div class="well" style="margin-top:25%;">
		 			 <div class="row">
		 			 	<div class="col-lg-12 col-md-12 col-sm-12"><center><img src='../dist/img/logo.png' width='60' height='60'><h4><b>SELECCION DE CARRERAS</b></h4></center></div>
		 			 	<div class="col-lg-12 col-md-12 col-sm-12"><h5><i class="fa fa-university"></i>&nbsp;&nbsp;&nbsp;FACULTAD DE INGENIERIA</h5></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing1"><label for="ing1" style="color:#FFF !important;">Ingenier&iacute;a en Ciencias de la Computaci&oacute;n</label></div></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing2"><label for="ing2" style="color:#FFF !important;">Ingenier&iacute;a Industrial</label></div></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing3"><label for="ing3" style="color:#FFF !important;">Ingenier&iacute;a Mecatr&oacute;nica</label></div></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing4"><label for="ing4" style="color:#FFF !important;">Ingenier&iacute;a Mec&aacute;nica</label></div></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing5"><label for="ing5" style="color:#FFF !important;">Ingenier&iacute;a Electr&oacute;nica</label></div></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing6"><label for="ing6" style="color:#FFF !important;">Ingenier&iacute;a El&eacute;ctrica</label></div></div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle"><input type="radio" name="carreradio" class="styled" id="ing7"><label for="ing7" style="color:#FFF !important;">Ingenier&iacute;a Biom&eacute;dica</label></div></div>
                    	<div class="col-lg-12 col-md-12 col-sm-12"><center><a href="../user/" class="btn btn-sm btn-warning">INICIAR PROFESI&Oacute;N</a></center></div>
                    </div>
		 		</div>
		 	</div>
		 </div>
	</div>
	<script type="text/javascript">
    $(document).ready(function(){
        //ENTRAR A ELECCION DE CARRERA
        $("#continuar").click(function(){
            $("#contenedorbody").show('fade', 1000).removeClass("bar-close").addClass("bar-open");
        });
    });
    </script>
</body>
</html>
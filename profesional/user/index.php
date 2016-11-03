<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link href="../dist/img/logo.ico" rel="shortcut icon"  type="image/ico"/>
    <link rel="stylesheet" type="text/css" href="../dist/css/barFloat.css"/>
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/simple-sidebar.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/checkbox-radio-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap/css/style-custom.css">
    <link rel="stylesheet" type="text/css" href="../framework/bootstrap-select/bootstrap-select.min.css">
    <script src="../dist/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>        
    <script type="text/javascript" src="../framework/bootstrap/js/bootstrap.min.js"></script>       
    <script type="text/javascript" src="../dist/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../dist/js/barFloat.js"></script>
    <script type="text/javascript" src="../framework/bootstrap-select/bootstrap-select.min.js"></script>
    <title>Profesional por un día</title>
</head>
<body>
<div class="contenedorFloat bar-close">
    <div class="contentFloat">    
        <h4 id="textoanimado" style="color:white;"></h4>
        <center><a href="#" id="continuar" class="btn btn-sm btn-warning" style="color:#FFF;"></a></center>    
    </div>
</div>
<script type="text/javascript">
	 $(document).ready(function(){
        barFloatshow("<center><img src='../dist/img/logo.png' width='60' height='60'><br><br>  HOLA INGENIERO <br> VAMOS A COMENZAR LA EXPERIENCIA PROFESIONAL <br> RECORREREMOS UNA SERIE DE DESAFIOS LOS CUALES TU RESOLUCION ES MUY IMPORTANTE<br><br></center>","COMENZAR");
    });    
</script> 
<div class="container-fluid">
	<nav class='navbar navbar-default navbar-fixed-top navigation' style="background-color:#FBBE01; border-bottom-color:#FBBE01;">
		<div class='container-fluid'>
	    <div class='navbar-header'>
	      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
	        <span class='sr-only'>Toggle navigation</span>
	        <span class='icon-bar' style="background-color:#000 !important;" ></span>
	        <span class='icon-bar' style="background-color:#000 !important;" ></span>
	        <span class='icon-bar' style="background-color:#000 !important;" ></span>
	      </button>
	      <a class='navbar-brand' style="color: #000 !important;" id="menu-toggle" href="#menu-toggle"><i class="fa fa-bars"></i>&nbsp;&nbsp;</a><b class='navbar-brand' style="color: #000 !important;">PROFESIONAL POR UN DIA</b>
		</div>
		<!-- OPCIONES DE MENU NAVBAR -->
		<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1' style="color:#000 !important;" >	
		<ul class='nav navbar-nav navbar-right'>	
			<li class='dropdown'>
	          <a href='#' class='dropdown-toggle' data-toggle='dropdown' style="color:#000;"><b> Usuario demo <i class='fa fa-angle-double-down'></i></b></a>
	          <ul class='dropdown-menu'>
				<li><center><img class='img-responsive' src='../dist/img/logo.png' width="100" height="100"/></center></li>
			    <li><p class='text-center'></p></li>
				<li class='divider'></li>
				<li><a href='#' data-toggle='modal' data-target='#miperfil' >Editar perfil <span class='glyphicon glyphicon-cog pull-right'></span></a></li>
	            <li class='divider'></li>
	            <li><a href='#'>Cerrar Sesi&oacute;n<span class='glyphicon glyphicon-log-out pull-right'></span></a></li>
	          </ul>
	        </li>
	        <li><a href='#modalnotificaciones' data-toggle='modal' style="color:#000;" id="ayuda"><span class='fa fa-question-circle'></span></a></li>
	    </ul>
	    </div>
	    </div>
	</nav><br><br>
	<div id="wrapper" class="bar-close">
		<div id="sidebar-wrapper">
	        <ul class="sidebar-nav">
				<li><center><img src='../dist/img/logo.png' width="60" height="60" style="margin-top:8% !important;margin-bottom:5% !important;" /></center></li>
	        	<li style="text-indent: 35px;"><a href="#" style="cursor:default; background-color:#1a2226; color:#4b646f; font-size:14px; box-sizing: border-box;">DESARROLLO DESAFIOS</a></li>
	        	<li>
	        		<a href="javascript:;" data-toggle="collapse" data-target="#desafio1"><span class="fa fa-graduation-cap"></span> DESAFIO 1 </a>
	        		<ul id="desafio1" class="collapse" style="background-color:#2c3b41;">
						<li style="text-indent: 3px; color:#b8c7ce;">GERENCIA INFORMATICA</li>	
						<li style="text-indent: 3px;"><a href="#" id="iniciardesafio1"><span class="fa fa-play"></span> INICIAR</a></li>								
					</ul>
	        	</li>
	        	<li><a href="#"><span class="fa fa-graduation-cap"></span> DESAFIO 2 </a></li>
	        	<li><a href="#"><span class="fa fa-graduation-cap"></span> DESAFIO 3 </a></li>
	        	<li><a href="#"><span class="fa fa-graduation-cap"></span> DESAFIO 4 </a></li>
	        	<li><a href="#"><span class="fa fa-graduation-cap"></span> DESAFIO 5 </a></li>
	        </ul>
	    </div>
	    <div id="page-content-wrapper">
	    	<div class="row">
	    		<div class="col-lg-12 col-md-12 col-sm-12">
	    			<div id="titulodesafio">
	    				
	    			</div>	    			
	    			<div id="areapreguntas">
	    				<center style="margin-top: 12%;">
		    				<img src='../dist/img/logo.png' width="200" height="200">
		    				<h1><b>PROFESIONAL POR UN DIA</b></h1>
	    				</center>
	    			</div>	    			
	    		</div>
	    	</div>
	    </div>
    </div>
    <script>
    	$(document).ready(function(){
    		var flagdesafio1=false;
	        //ACCEDER A DESAFIOS
	        $("#continuar").click(function(){
	            $("#wrapper").show('fade', 1000).removeClass("bar-close").addClass("bar-open");
	        });
	        //OCULTAR Y MOSTRAR BARRA
	        $("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
			//INICIO DE DESAFIO 1
			$("#iniciardesafio1").click(function(){
				if(flagdesafio1==false){
					barFloatshow("<br> INGENIERO, USTED ES EL GERENTE DEL DEPARTAMENTO DE TI DE UNA COMPAÑÍA QUE HACE Y VENDE ZAPATOS. EL JEFE DE LA COMPAÑÍA A MITAD DE AÑO LE HA CONFIADO EL PUESTO DE GERENTE DE TECNOLOGÍAS DE INFORMACIÓN POR VER EN USTED CARACTERÍSTICAS INNOVADORAS QUE NO POSEÍA SU PREDECESOR.<br>USTED HA ESTADO TRABAJANDO EN EL DEPARTAMENTO DE TECNOLOGÍAS DE INFORMACIÓN ALREDEDOR DE CINCO AÑOS Y ACEPTA EL CARGO CON GUSTO.<br>DENTRO DE SUS OBLIGACIONES ESTARÁ LA DE RECUPERAR LA INNOVACIÓN QUE LE HACE FALTA A COMPAÑÍA DESDE HACE UN PAR DE AÑOS.<br> <b>BUENA SUERTE</b>.<br>","COMENZAR");
					flagdesafio1=true;
					pregunta1();
				}
				else{
					barFloatshow("<center><img src='../dist/img/logo.png' width='60' height='60'><br><br>INGENIERO, YA HAS INICIADO ESTE DESAFIO<br><br></center>","CONTINUAR");
				}
			});
	    });
	    function pregunta1(){
	    	$("#areapreguntas").hide("fade", 1500,function(){
	    		$("#titulodesafio").html("<h4>GERENCIA INFORMATICA</h4><hr>");
	    		$("#areapreguntas").html("");
	    		//PREGUNTA
	    		$("#areapreguntas").append("<br><p><i class='fa fa-cog'></i> Después de acomodarse en su nuevo puesto de trabajo, debe organizar a su departamento para que tenga una mejor distribución del personal y utilizar así mejor las habilidades de cada empleado.<br>Debe distribuir el total de empleados en tres grupos: mantenimiento, desarrollo y soporte. Actualmente usted sabe que debe empezar a desarrollar soluciones que ayuden a generar más ganancias en compañía pero además debe de lidiar con los problemas que surgen en los sistemas que ya est&aacute;n al borde de la obsolescencia.<br> ¿C&oacute;mo ser&aacute; su distribuci&oacute;n de las 10 personas a su cargo personal? Antes de decidir recuerda que actualmente la sección de mantenimiento pasa ocupada la mayor parte de tiempo y que la sección de soporte posee tiempo libre la mayor parte del día.<br> La distribución actual es: 2 en desarrollo, 4 en mantenimiento y 4 en soporte</p>").show("fade",1000);
	    		//RESPUESTAS
	    		$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p1r1" name="respuesta1"><label for="p1r1">Enfatizar la innovación, segundo plano el mantenimiento y tercer plano soporte. 5 hacia desarrollo, 3 hacia mantenimiento, 2 soporte.</label></div>');
	    		$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p1r2" name="respuesta1"><label for="p1r2">Primer plano mantenimiento, igual importancia a mantenimiento y soporte.  4 hacia desarrollo, 3 hacia mantenimiento y 3 a soporte.</label></div>');
	    		$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p1r3" name="respuesta1"><label for="p1r3">Segundo plano desarrollo, enfatizar mantenimiento y tercer plano a soporte. 3 hacia desarrollo, 5 hacia mantenimiento y 3 a soporte.</label></div>');
	    		$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p1r4" name="respuesta1"><label for="p1r4">Mayor importancia a desarrollo, igual importancia a mantenimiento y a soporte. 6 hacia desarrollo, 2 hacia mantenimiento y 2 hacia soporte.</label></div>');
	    		$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p1r5" name="respuesta1"><label for="p1r5">Igual importancia a desarrollo y mantenimiento, segundo plano a soporte. 4 hacia desarrollo, 4 hacia mantenimiento, 2 hacia soporte.</label></div>');
	    		//SCRIPT DE CAMINOS
	    		$("#areapreguntas").append("<center><a href='#' id='continuarp1' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");	    		
	    		$("#areapreguntas").append("<script>$('#continuarp1').click(function(){ $('#continuarp1').hide(); pregunta2(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");	    		
	    	});	    	
	    }
	    function pregunta2(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Su decisión parece ser lógica y después de una semana con esta distribución los proyectos que tiene avanzan como nunca antes, mantenimiento parece estar por periodos de tiempo contra las cuerdas y el tiempo libre de soporte es casi inexistente. A pesar de tener ciertos problemas en los sistemas de la empresa decide que es buen momento para enfocarse en la creación de un nuevo sistema que permita generar mayores ganancias en la compañía.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p2r1" name="respuesta2"><label for="p2r1">Empezar con la planeación de una app móvil que permita a los clientes ver el catálogo de zapatos de compañía y que puedan ver puntos de venta cerca de ellos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p2r2" name="respuesta2"><label for="p2r2">Empezar con la planeación de una app web que permita los clientes poder personalizar sus pedidos de zapatos, pagarlos y que estos sean enviados a una de las sucursales.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p2r3" name="respuesta2"><label for="p2r3">Empezar con la planeación de una aplicación web que permita controlar mejor el uso de recursos que se utilizan en la fabricación de zapatos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p2r4" name="respuesta2"><label for="p2r4">Empezar con la planeación de una aplicación web que permita a los clientes ver el catálogo de zapatos.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp2' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp2').click(function(){ $('#continuarp2').hide(); pregunta3(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");	
	    	$("#areapreguntas").hide().show('fade',500);
	    }		
	    function pregunta3(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Su decisión ha ocasionado que el desarrollo de los proyectos avance de manera rápida, en la sección de mantenimiento, los integrantes por periodos de tiempo parecen estar contra las cuerdas en lo que respecta a sus obligaciones. En la sección de soporte los integrantes parecen ocupados ciertas veces. A pesar de tener ciertos problemas en los sistemas de la empresa y de que el personal de mantenimiento desee estar en la sección de soporte, decide que es buen momento para enfocarse en la creación de un nuevo sistema que permita generar mayores ganancias en la compañía.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p3r1" name="respuesta3"><label for="p3r1">Empezar con la planeación de una app móvil que permita a los clientes ver el catálogo de zapatos de compañía y que puedan ver puntos de venta cerca de ellos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p3r2" name="respuesta3"><label for="p3r2">Empezar con la planeación de una app web que permita los clientes poder personalizar sus pedidos de zapatos, pagarlos y que estos sean enviados a una de las sucursales.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p3r3" name="respuesta3"><label for="p3r3">Empezar con la planeación de una aplicación web que permita controlar mejor el uso de recursos que se utilizan en la fabricación de zapatos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p3r4" name="respuesta3"><label for="p3r4">Empezar con la planeación de una aplicación web que permita a los clientes ver el catálogo de zapatos.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp3' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp3').click(function(){ $('#continuarp3').hide(); pregunta4(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");	
	    	$("#areapreguntas").hide().show('fade',500);
	    }		
	    function pregunta4(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Su decisión ha ocasionado que los proyectos avancen un poco más rápido, en la sección de mantenimiento se nota que los integrantes tienen tiempo libre, algunas veces,  y no parece haber tantos problemas con los sistemas como lo había antes.  Los integrantes de soporte parecen ocupados ciertas veces. Su jefe al ver el avance logrado le dice: “La compañía necesita proyectos como la selecta necesita delanteros, debe tomar acciones, coach”.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p4r1" name="respuesta4"><label for="p4r1">Aumentar las personas en desarrollo, segundo plano a mantenimiento y tercer plano a soporte. 5 hacia desarrollo, 3 hacia mantenimiento, 2 soporte.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p4r2" name="respuesta4"><label for="p4r2">Aumentar las personas en desarrollo,  igual importancia a mantenimiento y soporte.  4 hacia desarrollo, 3 hacia mantenimiento y 3 a soporte.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p4r3" name="respuesta4"><label for="p4r3">Aumentar personal en desarrollo para darle igual importancia a desarrollo y mantenimiento, segundo plano a soporte. 4 hacia desarrollo, 4 hacia mantenimiento, 2 hacia soporte.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp4' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp4').click(function(){ $('#continuarp4').hide(); pregunta5(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");
	    	$("#areapreguntas").hide().show('fade',500);
	    }
	    function pregunta5(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Su decisión ha ocasionado que los proyectos que posee avancen de manera caótica, al parecer la gran cantidad de integrantes ha ocasionado que haya descoordinación en los proyectos, el PM no está acostumbrado a tener a tantos subalternos y no puede hacer uso eficiente de su tiempo. En la sección de mantenimiento han empezado a amenazar con renunciar, argumentan que no les pagan suficiente por el trabajo asignado y se quejan de tener que salir mucho más tarde de sus turnos de trabajo para conseguir terminar sus obligaciones. En el departamento de soporte el tiempo libre es casi inexistente. A su jefe le han notificado de otras áreas el surgimiento de problemas en los sistemas y su reacción de enojo es natural para alguien de su carácter. Después de llamarle la atención le obliga a cambiar su decisión. Cómo será la nueva distribución de personal para corregir el rumbo actual del área de TI.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p5r1" name="respuesta5"><label for="p5r1">Reducir las personas en desarrollo, segundo plano a mantenimiento y tercer plano a soporte. 5 hacia desarrollo, 3 hacia mantenimiento, 2 soporte.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p5r2" name="respuesta5"><label for="p5r2">Reducir las personas en desarrollo,  igual importancia a mantenimiento y soporte.  4 hacia desarrollo, 3 hacia mantenimiento y 3 a soporte.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p5r3" name="respuesta5"><label for="p5r3">Reducir a la mitad las personas en desarrollo, enfatizar mantenimiento y tercer plano a soporte. 3 hacia desarrollo, 5 hacia mantenimiento y 3 a soporte.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p5r4" name="respuesta5"><label for="p5r4">Reducir personal en desarrollo para darle igual importancia a desarrollo y mantenimiento, segundo plano a soporte. 4 hacia desarrollo, 4 hacia mantenimiento, 2 hacia soporte.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp5' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp5').click(function(){ $('#continuarp5').hide(); pregunta6(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");
	    	$("#areapreguntas").show('fade',500);
	    }	
	    function pregunta6(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Su decisión ha ocasionado que el desarrollo de los proyectos avance de manera rápida, en la sección de mantenimiento pueden lidiar con los problemas que surgen en los sistemas con rapidez. En la sección de soporte el tiempo libre de soporte es casi inexistente. El rumbo del área de ti parece ir bien. En seguida, debe enfocarse en la creación de un nuevo sistema que permita generar mayores ganancias en la compañía.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p6r1" name="respuesta6"><label for="p6r1">Empezar con la planeación de una app móvil que permita a los clientes ver el catálogo de zapatos de la compañía y que puedan ver puntos de venta cerca de ellos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p6r2" name="respuesta6"><label for="p6r2">Empezar con la planeación de una aplicación web que permita los clientes poder personalizar sus pedidos de zapatos, pagarlos y que estos sean enviados a una de las sucursales.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p6r3" name="respuesta6"><label for="p6r3">Empezar con la planeación de una aplicación web que permita controlar mejor el uso de recursos que se utilizan en la fabricación de zapatos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p6r4" name="respuesta6"><label for="p6r4">Empezar con la planeación de una aplicación web que permita a los clientes ver el catálogo de zapatos.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp6' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp6').click(function(){ $('#continuarp6').hide(); pregunta7(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");
	   		$("#areapreguntas").hide().show('fade',500);
	    }	
	    function pregunta7(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Al planear la app móvil se da cuenta que necesita tener a un desarrollador que posea conocimientos de programación de aplicaciones móviles. Para solventar su necesidad usted decide.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p7r1" name="respuesta7"><label for="p7r1">Solicitar a su jefe que envíe a uno de sus empleados a una capacitación sobre programación de aplicaciones móviles</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p7r2" name="respuesta7"><label for="p7r2">Solicitar a su jefe la contratación de alguien que ya posea los conocimientos de programación de aplicaciones móviles.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p7r3" name="respuesta7"><label for="p7r3">Solicitar a su jefe que envíe al empleado con menos responsabilidades a una capacitación sobre programación de aplicaciones móviles</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p7r4" name="respuesta7"><label for="p7r4">Solicitar a su jefe que envíe a su mejor programador a una capacitación sobre programación de aplicaciones móviles</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp7' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp7').click(function(){ $('#continuarp7').hide(); pregunta8(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");
	    	$("#areapreguntas").hide().show('fade',500);
	    }	
	    function pregunta8(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Al planear la aplicación web se da cuenta que necesita tener a un desarrollador que posea conocimientos de seguridad web y cobros en línea. Para solventar su necesidad usted decide.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p8r1" name="respuesta8"><label for="p8r1">Solicitar a su jefe que envíe a uno de sus empleados a una capacitación sobre cobros en línea y seguridad web.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p8r2" name="respuesta8"><label for="p8r2">Solicitar a su jefe la contratación de alguien que ya posea los conocimientos sobre cobros en línea y seguridad web.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p8r3" name="respuesta8"><label for="p8r3">Solicitar a su jefe que envíe al empleado con menos responsabilidades a una capacitación sobre cobros en línea y seguridad web.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p8r4" name="respuesta8"><label for="p8r4">Solicitar a su jefe que envíe a su mejor programador a una capacitación sobre cobros en línea y seguridad web.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp8' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp8').click(function(){ $('#continuarp8').hide(); pregunta9(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");
	    	$("#areapreguntas").hide().show('fade',500);
	    }	
	    function pregunta9(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> Durante su segundo día de planeación de la aplicación web para optimizar el uso de recursos es interrumpido por uno de sus desarrolladores, le dice que escucho al director de la compañía decir que espera que los proyectos sean enfatizados hacia la relación con el cliente y  no hacia los elementos de producción. Al escuchar esto, archiva la idea para un futuro y decide planificar una de las siguientes aplicaciones.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p9r1" name="respuesta9"><label for="p9r1">Empezar con la planeación de una app móvil que permita a los clientes ver el catálogo de zapatos de la compañía y que puedan ver puntos de venta cerca de ellos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p9r2" name="respuesta9"><label for="p9r2">Empezar con la planeación de una aplicación web que permita los clientes poder personalizar sus pedidos de zapatos, pagarlos y que estos sean enviados a una de las sucursales.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p9r3" name="respuesta9"><label for="p9r3">Empezar con la planeación de una aplicación web que permita a los clientes ver el catálogo de zapatos.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp9' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp9').click(function(){ $('#continuarp9').hide(); pregunta10(); $('html, body').animate({ scrollTop: $(document).height()-$(window).height() },1000); });\<\/\script\>");
	    	$("#areapreguntas").hide().show('fade',500);
	    }	
	    function pregunta10(){
	    	$("#areapreguntas").hide('fade',500);
	    	$("#areapreguntas").html("");
	    	//PREGUNTA
	    	$("#areapreguntas").append('<br><p><i class="fa fa-cog"></i> La planeación de la aplicación no tiene problemas al principio, pero al ver el retorno de la inversión se da cuenta que la aplicación no aportara ganancias perceptibles a la empresa y que generara un desperdicio de tiempo la implementación del mismo. Ante esto decide descartar la implementación del proyecto y para no perder más tiempo decide elegir otro proyecto de los anteriormente pensados.</p>');
	    	//RESPUESTAS
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p10r1" name="respuesta10"><label for="p10r1">Empezar con la planeación de una app móvil que permita a los clientes ver el catálogo de zapatos de la compañía y que puedan ver puntos de venta cerca de ellos.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p10r2" name="respuesta10"><label for="p10r2">Empezar con la planeación de una aplicación web que permita los clientes poder personalizar sus pedidos de zapatos, pagarlos y que estos sean enviados a una de las sucursales.</label></div>');
	    	$("#areapreguntas").append('<div class="checkbox checkbox-warning checkbox-circle"><input type="radio" class="styled" id="p10r3" name="respuesta10"><label for="p10r3">Empezar con la planeación de una aplicación web que permita controlar mejor el uso de recursos que se utilizan en la fabricación de zapatos.</label></div>');
	    	//SCRIPT DE CAMINOS
	    	$("#areapreguntas").append("<center><a href='#' id='continuarp10' class='btn btn-warning btn-sm'>CONTINUAR</a></center>");
	    	$("#areapreguntas").append("<script>$('#continuarp10').click(function(){ $('#continuarp10').hide();}); barFloatshow('<center><img src='../dist/img/logo.png' width='60' height='60'><br><br>INGENIERO HA COMPLETADO EL PRIMER DESAFIO <br> ES TIEMPO DE INICIAR EL SEGUNDO <br><br></center>','CONTINUAR'); \<\/\script\>");
	    	$("#areapreguntas").hide().show('fade',500);
	    }					
	</script>
</div>
</body>
</html>
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
        <link href="dist/img/logo.ico" rel="shortcut icon"  type="image/ico"/>
        <link rel="stylesheet" type="text/css" href="dist/css/barFloat.css"/>
        <link rel="stylesheet" type="text/css" href="framework/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="framework/bootstrap/css/checkbox-radio-bootstrap.css">
        <link rel="stylesheet" type="text/css" href="framework/bootstrap/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="framework/bootstrap/css/style-custom.css">
        <link rel="stylesheet" type="text/css" href="framework/bootstrap-select/bootstrap-select.min.css">
        <script src="dist/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>        
        <script type="text/javascript" src="framework/bootstrap/js/bootstrap.min.js"></script>       
        <script type="text/javascript" src="dist/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="dist/js/barFloat.js"></script>
        <script type="text/javascript" src="framework/bootstrap-select/bootstrap-select.min.js"></script>
        <title>Profesional por un día</title>
    </head>
    <body style="background-color:#222d32;">
        <div class="contenedorFloat bar-close">
            <div class="contentFloat">
            <center>
                <h4 id="textoanimado" style="color:white;"></h4>
                <a href="#" id="continuar" class="btn btn-sm btn-warning" style="color:#FFF;"></a>
            </center>
            </div>
        </div> 
        <script>
        <?php 
            if(isset($_GET["err"])){
                if($_GET["err"]==1)
                {
        ?>
                $(document).ready(function(){
                    barFloatshow("<center><img src='dist/img/logo.png' width='60' height='60'> <br><br> :( OPPS OCURRIO UN ERROR DE<br> INICIO DE SESION  <br><br></center>","INTENTAR NUEVAMENTE");
                });    
        <?php
                }
            }
            else{
        ?>
                $(document).ready(function(){
                    barFloatshow("<center><img src='dist/img/logo.png' width='60' height='60'> <br><br> HOLA, NOS ALEGRA TENERTE AQUI <br> VAMOS A COMENZAR <br> INICIA SESION O REGISTRATE <br><br></center>","CONTINUAR");
                });    
        <?php

            } 
        ?>
                    
        </script>
        <div class="container-fluid bar-close" id="contenedorbody">
            <div class="row">
                <!-- LOGIN -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-sm-offset-4 col-lg-offset-4 col-md-offset-4 bar-open" id="login">
                    <div class="well" style="margin-top:35%;">
                        <center>
                            <img src='dist/img/logo.png' width='60' height='60'>
                            <h4><b>PROFESIONAL POR UN D&Iacute;A</b></h4>
                        </center><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>Usuario:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="text" class="form-control input-sm" name="usuario"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>Contrase&ntilde;a:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="password" class="form-control input-sm" name="pass"></div>
                        </div><br>
                        <center><a href="carreras/" class="btn btn-sm btn-warning">Iniciar sesi&oacute;n</a></center>
                        <a href="#" style="text-align:right;" id="linkregistro">REGISTRASE</a>
                    </div>
                </div>
                <!-- /LOGIN -->
                <!-- REGISTRO -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-offset-3 col-lg-offset-3 col-md-offset-3< bar-close" id="registro">
                    <div class="well" style="margin-top:15%;">
                        <center>
                            <img src='dist/img/logo.png' width='60' height='60'>
                            <h4><b>REGISTRO PROFESIONAL POR UN D&Iacute;A</b></h4>
                        </center><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>Nombre:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="text" class="form-control input-sm" name=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>Usuario:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="text" class="form-control input-sm" name=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>Contrase&ntilde;a:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="password" class="form-control input-sm" name=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>Correo:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="email" class="form-control input-sm" name=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12"><h5><b>C&oacute;digo de registro:</b></h5></div>
                            <div class="col-lg-8 col-md-8 col-sm-12"><input type="text" class="form-control input-sm" name=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12"><div class="checkbox checkbox-warning checkbox-circle pull-right"><input type="checkbox" class="styled" id="resultpru"><label for="resultpru" style="color:#FFF !important;">UTILIZAR VERSION FREEMIUM</label></div></div>
                        </div><br>
                        <center><button type="submit" class="btn btn-sm btn-warning">Registrarse</button></center>
                        <a href="#" id="linklogin">REGRESAR</a>
                    </div>
                </div>
                <!-- /REGISTRO -->                
            </div>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            //ENTRAR AL LOGIN DE USUARIO
            $("#continuar").click(function(){
                $("#contenedorbody").show('fade', 1000).removeClass("bar-close").addClass("bar-open");
            });
            //ENTRAR AL REGISTRO
            $("#linkregistro").click(function(){
                $("#login").hide('fade',500,function(){
                    $("#registro").show('fade', 500).removeClass("bar-close").addClass("bar-open");
                }).removeClass("bar-open").addClass("bar-close");                  
            });
            //REGRESAL AL LOGIN
            $("#linklogin").click(function(){
                $("#registro").hide('fade', 500,function(){
                    $("#login").show('fade', 500).removeClass("bar-close").addClass("bar-open");
                }).removeClass("bar-open").addClass("bar-close");                               
            });
        });
        </script>
    </body>
</html>
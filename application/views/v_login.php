<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bienvenido a SIBDA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="icon" type="image/png" href="?>image/favicon.png" />--> 
        <meta name="author" content="">
        <!-- Los estilos -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/signin.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/sticky-footer-navbar.css" rel="stylesheet">     
        <style>
            body{
                background-image: url("<?php echo base_url(); ?>assets/image/bg.jpg");
                font-family: 'Montserrat', Arial;
                font-size: 1em;
            }
            .ribbon{
                background: rgba(200,200,200,.5);
                width: 50px;
                height: 70px;
                margin: 0 auto;
                position: relative;
                top: 19px;
                border: 1px solid rgba(255,255,255,.3);
                border-top: 2px solid rgba(255,255,255,.5);
                border-bottom: 0;  
                border-radius: 5px 5px 0 0;
                box-shadow: 0 0 3px rgba(0,0,0,.7); 
            }
            .ribbon:before{
                content:"";
                display: block;
                width: 15px;
                height: 15px;
                background: #4E535B;
                border: 4px solid #cfd0d1;
                margin: 18px auto;
                box-shadow: inset 0 0 5px #000, 0 0 2px #000, 0 1px 1px 1px #A7A8AB;
                border-radius: 100%;
            }

        </style>
        <style type="text/css">
            #nota-informativa {
                padding:5px; /*Espaciado interno*/
                width:200px; /*Ancho del contenedor*/
                height: 200px;
                text-align:center; /*Alineaci&oacute;n del texto*/
                background-color:#FFEE88; /*Color de fondo*/
                position:fixed; /*Permite que se mantenga estático*/
                display:none; /*Oculta el contenedor*/
                left:43%; /*Separaci&oacute;n del borde izquierdo*/
                bottom:80px; /*Separaci&oacute;n inferior del borde*/
                box-shadow:0 0 5px #555; /*Sombras CSS3*/
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="row" style="opacity: 0.9;margin-top:55px;">
                <center><h1 style="color:#ffffff;font-family: arial">SISTEMA SIBDA - MYSQL</h1></center>
                <center> <h4 style="color:#ffffff;font-family: arial">Sistema de Gestion de Base de Datos</h4></center>
               
                <div class="col-md-6 col-md-offset-3">
                    <div class="ribbon"></div>
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <div class="panel-title"><h2 style="color: #009999;font-family: fantasy"><center>
                                        <font face="arial,verdana"><b>INGRESO AL SISTEMA</b></font></center></h2>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 separator social-login-box"> 
                                    <img class="img-responsive" src="<?php echo base_url(); ?>image/logo.png" alt="">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 login-box">
                                    <form  method="post">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                            <input type="text" class="form-control" name="inputUsuario" placeholder="Escriba su usuario" required autofocus />
                                        </div><p>

                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" name="inputPass" placeholder="Escriba su contrase&ntilde;a" required>
                                        </div><br>                                         
                                        <button class="btn btn-labeled btn-success" type="submit">
                                            <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span> Ingresar</button>                                            
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <?php
                            if (isset($mensaje)) {
                                echo $mensaje;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    </body>
</html>
<script>
    $(document).ready(function() {
        $('#nota-informativa').html(
        "<i class='icon-info'></i><h2>Nota!</h2><h5>Usted ya registro su hoja de tiempo.<br>\n\
        Se habilitará una nueva de hoja a partir\n\
        de<br> mañana a las 12:00 P.M</h5> ");
        $("#nota-informativa")
        .delay(0) // Tiempo del retraso en milisegundos antes de que aparezca el contenedor
        .show("bounce", {times: 5, distance: 100, direction: 'down'}, 9000) 
        // Uso de .show, espec&iacute;ficamente con bounce y algunos parámetros espec&iacute;ficos de esta animaci&oacute;n.
        .delay(10000000) //Tiempo de duraci&oacute;n del contenedor en la página
        .hide("drop", {direction: "down"}, "slow"); //Uso de .hide, con el efecto drop.
    });
</script>

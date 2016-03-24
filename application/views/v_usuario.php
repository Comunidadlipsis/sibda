<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bienvenido a SIBDA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/sticky-footer-navbar.css" rel="stylesheet">  
        <link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet">
        <style>
            body {
                padding-top: 70px;
                padding-bottom: 20px;
               
            }
        </style>
    </head>
    <body onload="">
        <?php $this->load->view('v_menu'); ?>  
        <div id="wrap" class="container">
    
            <div class="panel panel-primary" id="formul">                  
                
                <div class="panel-heading" style=" padding: 1px 10px;">
                  
                    <h5>
                        <div class="row">
                            <div class="col-md-5">
                                 
                                <div class="col-sm-1">
                                    <span class="glyphicon glyphicon-user">
                                    </span>
                                </div>
                               
                                <div class="col-sm-10">
                                    
                                    <!--
                                    <?php echo $_SESSION['LOGIN_VALIDATION'] ?>
                                    -->
                                    GESTION DE USUARIOS
                                </div>
                                
                            </div>
                            
                        </div>
                    </h5>
                   
                </div>
  
            </div>
            

         


        
        <div class="panel-body">
                    <div class="row">

                        <div class="container-fluid">
                            <form class="form-horizontal" action="" method="" role="form">
                                
                                <div class="form-group">

                                    <label for="inputEmail3" class="col-sm-3 control-label">USUARIO:</label>
                                    
                                    <div class="col-sm-2">                                        
                                    <input type="text" name="" id="usuario" class="form-control" value="">                                      
                                    </div>

                                    <label for="inputEmail3" class="col-sm-1 control-label">CLAVE:</label>
                                   
                                    <div class="col-sm-2">                                        
                                    <input type="password" name="" id="clave" class="form-control" value="" placeholder="Escriba la clave">                                
                                    </div>

                                    <div class="col-sm-2">                                        
                                    <input type="password" name="" id="rclave" class="form-control" value="" placeholder="Repita la clave">                                
                                    </div>
                                </div>    
                                <div class="form-group">

                                    <label for="inputEmail3" class="col-sm-3 control-label">NOMBRES:</label>

                                    <div class="col-sm-2">                                        
                                    <input type="text" name="" id="nombres" class="form-control" value="" >                                      
                                    </div>

                                    <label for="inputEmail3" class="col-sm-1 control-label">APELLIDOS:</label>

                                    <div class="col-sm-2">                                        
                                    <input type="text" name="" id="apellidos" class="form-control" value="" >                                
                                    </div>
                               </div>   
                             
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-5 control-label">PERFIL:</label>
                                     <div class="col-sm-2">
                                    <select class="text btn-agendado" type="search" list="misdatos" id="perfil" maxlength="2" onkeypress='return event.charCode'>
         
                                     <datalist id="misdatos">
                                     <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                     <option value="USUARIO" selected="true">USUARIO</option>
                                     </datalist>
                                     </select>
                                    </div> 

                                </div> 

                                <div class="container-fluid" align="center">
                <div class="col-sm-10">
               
                    <button type="button" class=" btn btn-primary" id="Guardar_HT" data-toggle="modal" onclick="">Guardar</button>  
                
                 
                 
                 </div>
                 </div>

                            </form> 

                        </div>
                    </div>         
                </div>

        <div id="footer" style="background-color: #333333">
            <div class="container">
                <div  class="col-md-7 text-left">
                    <a id="" style="color:  white" > &copy; BIENVENIDO USUARIO: <?php echo strtoupper($_SESSION['LOGIN_VALIDATION']); ?></a>
                </div>
                
            </div>
        </div>

    </div>    
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>   
        <script src="<?php echo base_url(); ?>assets/js/bootstrap3-typeahead.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
       <!--
        <script src="<?php echo base_url()?>assets/js/v_hoja_ruta/h_ruta.js"></script>
       -->
       <script src="<?php echo base_url()?>assets/js/v_usuario/usuario.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jCombo.min.js"></script>

    </body>
</html>



    

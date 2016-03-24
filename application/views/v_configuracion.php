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
                                   CONFIGURACION
                                </div>
                                
                            </div>
                            
                        </div>
                    </h5>
                   
                </div>
  
            </div>
            

         


        
        <div class="panel-body">
                    <div class="row">
                    <!--
                        <center><h4><code>Lista de clientes</code></h4></center><br>

                    -->    
                        <div class="container-fluid">
                            
                           
  
               
                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                             <thead>
                                <tr>
                                    <th>NRO</th>
                                   <th>DESCRIPCION</th>
                                   <th>ESTADO</th>
                                    <th>GUARDAR</th>

                            </tr>

                                </thead>

                              <?php

        if (empty($tipificadores)) {
            ?>
            <tr>
                <td colspan="4">No se encontro resultados en la busqueda</td>
            </tr>

            <?php
        } else {
            
            $contador=1;
            foreach ($tipificadores as $item) {
                //print_r($item);
                // echo "---".$item->pk_cli_char_dni."---";
                ?>
                <form class="form-horizontal" action="<?php echo site_url('index.php/c_configuracion/Actualizar_vista_tipificacion'); ?>" method="post" role="form">
                <tr>
                    <input type="hidden" name="id" id="idcliente" class="form-control" value="<?php echo $item->id;?>"></input>    
                    <td><?php echo $item->id;?></td>
                    <td><?php echo $item->descripcion;?></td> 
                    <td><select id="v_estado_tipificacion" name="v_estado_tipificacion" class="form-control" list="misdatos">
                          <datalist id="misdatos">
                         
                          <!--<option value="<?php echo $item->v_estado;?>"><?php echo $item->v_estado;?></option>-->
                          <!--
                           <option value="
                           <?php  if ($item->v_estado=="Activo") {
                                echo "Inactivo";
                            }if ($item->v_estado=="Inactivo"){ 
                                echo "Activo";
                                }?>">
                            <?php  if ($item->v_estado=="Activo") {
                                echo "Inactivo";
                            }if ($item->v_estado=="Inactivo"){ 
                                echo "Activo";
                                }?>
                        </option>      
                        -->
                        <?php  if ($item->v_estado=="Activo") {?>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                        <?}?>
                        <?php  if ($item->v_estado=="Inactivo") {?>
                        <option value="Inactivo">Inactivo</option>
                        <option value="Activo">Activo</option>
                        <?}?>
                         </datalist>
                     </select>
                 </td> 
       
              
               
                <td>
               <button type="submit" class=" btn btn-primary" id="" data-toggle="modal">Ok</button>
                 </td>
<!--       
             <td><button  onclick="actualizar_v_tipificacion('<?php echo $item->id;?>',$( "#v_estado_tipificacion" ).val());" id="create-userx" type ="button" class="btn btn-primary btn-sm" data-toggle="modal" >Ok</button></td>               
  -->

                </tr>
                </form>
                
                <?php $contador++;
            };
        }
        ?>   
                            </table>

                                                                                         
                            
                        </div>
                    </div>
                    
             <!--<div class="row">-->
      
             <!--</div>-->

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
      

    
    
        
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jCombo.min.js">

     
        </script>

        <script>
/*
                        $("#tipificacion").jCombo(
                                        "<?php echo base_url(); ?>c_principal/cargaTipificacion", {
                                            selected_value:"",
                                            initial_text: "-- SELECCIONE --"
                                        });
*/
        </script>
        
    </body>
</html>

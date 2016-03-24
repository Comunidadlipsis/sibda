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
                                    MIS AGENDADOS
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
                                    <th>DNI</th>
                                    <th>NOMBRES</th>
                                    <th>TELEFONOS</th>
                                    <th>UBICACION</th>
                                    <th>DIRECCION</th>
                                    <th>TARJETAS</th>
                                    <th>COMENTARIO</th>
                                    <th>TIPIFICACION</th>
                                    <th>GUARDAR</th>

                            </tr>

                                </thead>

                              <?php

        if (empty($agendados)) {
            ?>
            <tr>
                <td colspan="15">No se encontro resultados en la busqueda</td>
            </tr>

            <?php
        } else {
            
            $contador=1;
            foreach ($agendados as $item) {
                //print_r($item);
                // echo "---".$item->pk_cli_char_dni."---";
                ?>
                <form class="form-horizontal" action="<?php echo site_url('index.php/c_agenda/grabarRegistro'); ?>" method="post" role="form">
                <tr>
        <!-- <input type="hidden" name="id" id="id" value="<?php //echo $item['0'];           ?>">
                    -->   
                    <td><?php echo $contador; ?></td>
                     <input type="hidden" name="idcliente" id="idcliente" class="form-control" value="<?php echo $item->IDCLIENTES;?>"></input>
                    <td><?php echo $item->DNI; ?></td>
                    <td><?php echo $item->APELLIDONOMBRE; ?></td> 
                    <td><?php echo $item->TELEFONOS; ?></td> 
                    <td><?php echo $item->UBICACION; ?></td>
                    <td><?php echo $item->DIRECCION; ?></td> 
                    <td><?php echo $item->TARJETAS; ?></td> 
                    <td><textarea id="comentario" name="comentario"><?php echo $item->COMENTARIO;?></textarea></td>
              
                <td>
   <select class="text btn-agendado" name="tipificacion" type="search" list="misdatos" id="tipificacion" maxlength="2" onkeypress='return event.charCode'>
         
         <datalist id="misdatos"  >
              <?php foreach ($tipificacion as $item) {?>
                  <option value="<?php echo $item->id;?>"><?php echo $item->descripcion;?></option>
                  <?php }?>
              </datalist>
              </td>

               <td>
       <button type="submit" class=" btn btn-primary" id="Guardar_HTq" data-toggle="modal">Ok</button>
   <script src="<?php echo base_url()?>assets/js/v_agenda/agenda.js"></script>
                 </td>


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
       <!--
        <script src="<?php echo base_url()?>assets/js/v_hoja_ruta/h_ruta.js"></script>
       -->
    
        
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jCombo.min.js">




                                        $("#tipificacion").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_agenda/cargaTipificacion", {
                                          // selected_value:,
                                            initial_text: "-- SELECCIONE --"
                                        });
        </script>
        
    </body>
</html>

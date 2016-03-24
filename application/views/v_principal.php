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
		
		<script>
function validar_texto(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    
    tecla_final = String.fromCharCode(tecla);
    
    return patron.test(tecla_final);
}
		</script>

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
                                    

                                     <?php 
									 
									 
									echo $_SESSION['LOGIN_VALIDATION'] 

									 ?>
									

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
                            <form class="form-horizontal" action="" method="" role="form">
                                
                                <div class="form-group">

                                    <label for="inputEmail3" class="col-sm-1 control-label">TIPO DOC:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="tipdoc" class="form-control" value="<?php echo $item->TIPDOC;?>" >
										<?php }?> 
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">NUMERO DOC:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="numdoc" class="form-control" value="<?php echo $item->NUMDOC;?>" >
										<?php }?> 
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">NACIMIENTO:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="nacimiento" class="form-control" value="<?php echo $item->NACIMIENTO;?>" >
										<?php }?> 
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">EDAD:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="edad" class="form-control" value="<?php echo $item->EDAD;?>" >
										<?php }?> 
                                    </div>
									
                                </div> 

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-1 control-label">NOMBRE 1:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="nombre1" class="form-control" value="<?php echo $item->NOMBRE1;?>" >
										<?php }?>    
                                    </div>
                                    
                                    <label for="inputEmail3" class="col-sm-1 control-label">NOMBRE 2:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="nombre2" class="form-control" value="<?php echo $item->NOMBRE2;?>" >
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">APELLIDO PAT:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="apepaterno" class="form-control" value="<?php echo $item->APEPATERNO;?>" >
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">APELLIDO MAT:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="text" name="" id="apematerno" class="form-control" value="<?php echo $item->APEMATERNO;?>" >
										<?php }?>    
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-1 control-label">TEL MOVIL:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="tlfmovil" class="form-control" maxlength="9" onkeypress="return validar_texto(event)" value="<?php echo $item->TLFMOVIL;?>" >
										<?php }?>    
                                    </div>
                                    
                                    <label for="inputEmail3" class="col-sm-1 control-label">TEL FIJO:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="tlffijo" class="form-control" maxlength="9" onkeypress="return validar_texto(event)" value="<?php echo $item->TLFFIJO;?>" >
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">TEL OFICINA:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="tlfofic" class="form-control" maxlength="9" onkeypress="return validar_texto(event)" value="<?php echo $item->TLFOFIC;?>" >
										<?php }?>    
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-1 control-label">CORREO:</label>
                                    <div class="col-sm-5">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="correo" class="form-control" value="<?php echo $item->CORREO;?>" >
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">ANEXO:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="tlfanex" class="form-control" maxlength="5" onkeypress="return validar_texto(event)" value="<?php echo $item->TLFANEX;?>" >
										<?php }?>    
                                    </div>
                                
								</div> 
								
								<div class="form-group">
                                    <label for="inputEmail3" class="col-sm-1 control-label">DIRECCION:</label>
                                    <div class="col-sm-8">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="direccion" class="form-control" value="<?php echo $item->DIRECCION;?>" >
										<?php }?>    
                                    </div>
									
								</div> 	
									
								<div class="form-group">	
									<label for="inputEmail3" class="col-sm-1 control-label">REFERENCIA:</label>
                                    <div class="col-sm-8">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="referencia" class="form-control" value="<?php echo $item->REFERENCIA;?>" >
										<?php }?>    
                                    </div>

                                </div> 
  
                                <div class="form-group">
									
									<label for="inputEmail3" class="col-sm-1 control-label">DEPARTAMEN:</label>
                                    <div class="col-sm-3">
										<?php foreach ($cliente as $item){ ?>
                                    <select id="departamento" name="" class="form-control" onkeypress="return tabular(event,this)"></select>
										<?php }?>    
                                    </div>

                                    <label for="inputEmail3" class="col-sm-1 control-label">PROVINCIA:</label>
                                    <div class="col-sm-4">
										<?php foreach ($cliente as $item){ ?>
                                    <select id="provincia" name="" class="form-control" onkeypress="return tabular(event,this)"></select>
										<?php }?>    
                                    </div>

                                </div>
								
								<div class="form-group">

									<label for="inputEmail3" class="col-sm-1 control-label">DISTRITO:</label>
                                    <div class="col-sm-3">
										<?php foreach ($cliente as $item){ ?>
                                    <select id="distrito" name="" class="form-control" onkeypress="return tabular(event,this)"></select>
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">TEL CONTACTO:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="tlfcont" class="form-control" maxlength="9" onkeypress="return validar_texto(event)" value="<?php echo $item->TLFCONT;?>" >
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">ANEXO:</label>
                                    <div class="col-sm-1">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="anexo" class="form-control" maxlength="5" onkeypress="return validar_texto(event)" value="<?php echo $item->ANEXO;?>" >
										<?php }?>    
                                    </div>

                                </div>
								
								<div class="form-group">
								
									<label for="inputEmail3" class="col-sm-1 control-label">CORREO CONTACTO:</label>
                                    <div class="col-sm-8">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="text" name="" id="correocont" class="form-control" value="<?php echo $item->CORREOCONT;?>" >
										<?php }?>    
									</div>
								
								</div>
								
								
								<div class="form-group">
                                    <label for="inputEmail3" class="col-sm-1 control-label">FECHA:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input readonly="readonly" type="datetime" name="date" id="fecha" class="form-control" value="<?php echo date("d/m/Y"); ?>" >
										<?php }?>    
                                    </div>
                                    									
                                    <label for="inputEmail3" class="col-sm-1 control-label">HORA:</label>
                                    <div class="col-sm-2">
										<?php foreach ($cliente as $item){ ?>
                                    <input type="time" name="time" id="hora" class="form-control" value="<?php echo date("H:i:s"); ?>" >
										<?php }?>    
                                    </div>
									
									<label for="inputEmail3" class="col-sm-1 control-label">CODIGO INTERNO:</label>
                                    <div class="col-sm-2">
                                        <?php foreach ($cliente as $item){ ?>
                                        <input readonly="readonly" type="text" name="" id="hcid" class="form-control" value="<?php echo $item->HCID;?>" placeholder="HCID">
                                        <?php }?>
									</div>
								
								</div>		
										

                                <div class="form-group">
								
									<label for="inputEmail3" class="col-sm-1 control-label">ACTUALIZADO:</label>
                                    <div class="col-sm-2">
                                         <?php foreach ($cliente as $item){ ?>
										 <select id="actualizado" name="" class="form-control"  onkeypress="return tabular(event,this)"></select>
                                         <?php }?>
                                    </div> 
								

									<label for="inputEmail3" class="col-sm-1 control-label">CORTE FORZADO:</label>
                                    <div class="col-sm-2">
                                         <?php foreach ($cliente as $item){ ?>
										 <select id="corllam" name="" class="form-control"  onkeypress="return tabular(event,this)"></select>
                                         <?php }?>
                                    </div> 
									
									<label for="inputEmail3" class="col-sm-1 control-label">RESULTADO:</label>
									<div class="col-sm-4">
										<?php foreach ($cliente as $item){ ?>
									<select id="rescod" name="" class="form-control"  onkeypress="return tabular(event,this)"></select>
										<?php }?>
									</div>
									
								</div> 
                            
     
                                <div class="container-fluid" align="center">
									<div class="col-sm-12">
								<button type="button" class=" btn btn-primary" id="Guardar_HT" data-toggle="modal" onclick="">Guardar</button>  
									</div>
								</div>
                            
                                                                                         
                            </form>
                        </div>
                    </div>
                    
             <!--<div class="row">-->
      
             <!--</div>-->

        </div>

    </div>    
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>   
        <script src="<?php echo base_url(); ?>assets/js/bootstrap3-typeahead.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
       <script src="<?php echo base_url()?>assets/js/v_principal/principal.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jCombo.min.js"></script>

        <script type="text/javascript">

                                        $("#rescod").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_principal/cargaTipificacion", {
                                            selected_value:"<?php 
                                            foreach ($cliente as $item){
                                            echo  $item->RESCOD; }?>",
                                            initial_text: " SELECCIONAR "
                                        });
        </script>
		
		<script type="text/javascript">

                                        $("#departamento").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_principal/cargaDepartamentos", {
                                            selected_value:"<?php 
                                            foreach ($cliente as $item){
                                            echo  $item->DEPARTAMENTO; }?>",
                                            initial_text: " SELECCIONAR "
                                        });
        </script>
		
		<script type="text/javascript">

                                        $("#provincia").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_principal/cargaProvincias", {
                                            selected_value:"<?php 
                                            foreach ($cliente as $item){
                                            echo  $item->PROVINCIA; }?>",
                                            initial_text: " SELECCIONAR "
                                        });
        </script>
		
		<script type="text/javascript">

                                        $("#distrito").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_principal/cargaDistritos", {
                                            selected_value:"<?php 
                                            foreach ($cliente as $item){
                                            echo  $item->DISTRITO; }?>",
                                            initial_text: " SELECCIONAR "
                                        });
        </script>
		
		<script type="text/javascript">

                                        $("#actualizado").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_principal/cargaActualizado", {
                                            selected_value:"<?php 
                                            foreach ($cliente as $item){
                                            echo  $item->ACTUALIZADO; }?>",
                                            initial_text: " SELECCIONAR "
                                        });
        </script>
		
		<script type="text/javascript">

                                        $("#corllam").jCombo(
                                        "<?php echo base_url(); ?>index.php/c_principal/cargaCorllam", {
                                            selected_value:"<?php 
                                            foreach ($cliente as $item){
                                            echo  $item->CORLLAM; }?>",
                                            initial_text: " SELECCIONAR "
                                        });
        </script>
		
		
    </body>
	
	    <div id="footer" style="background-color: #333333">
            <div class="container">
                <div  class="col-md-7 text-left">
                    <a id="" style="color:  white" > &copy; DESARROLLADO POR EL EQUIPO DE SISTEMAS </a>
                </div>
                
            </div>
        </div>
</html>



    

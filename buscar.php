<!DOCTYPE html>
<?php
include("conexion.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BASE DATOS PRIMA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/sticky-footer-navbar.css" rel="stylesheet" media="screen">

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
<body>
<?php

            //Generales
			$Dni=$_POST["Dni"];
			$VarDni=$_POST["VarDni"];
			$Tel1=$_POST["Tel1"];
			$Tel2=$_POST["Tel2"];
			$Tel3=$_POST["Tel3"];
			$Tel4=$_POST["Tel4"];
			$Tel5=$_POST["Tel5"];
			$Tel6=$_POST["Tel6"];
			$Tel7=$_POST["Tel7"];
			$Tel8=$_POST["Tel8"];
			$Tel9=$_POST["Tel9"];
			$Tel10=$_POST["Tel10"];
			$Tel11=$_POST["Tel11"];
			$Tel12=$_POST["Tel12"];
			$Tel13=$_POST["Tel13"];
			$Tel14=$_POST["Tel14"];
			$Tel15=$_POST["Tel15"];
			$Tel16=$_POST["Tel16"];
			$Tel17=$_POST["Tel17"];
			$Tel18=$_POST["Tel18"];
			$Tel19=$_POST["Tel19"];
			$Tel20=$_POST["Tel20"];
			$Tel21=$_POST["Tel21"];
			$Tel22=$_POST["Tel22"];
			$Tel23=$_POST["Tel23"];
			$Tel24=$_POST["Tel24"];
			$Tel25=$_POST["Tel25"];
			$Tel26=$_POST["Tel26"];

			
 if(isset($_POST["boton"])){
     $VBoton=$_POST["boton"];
	 $bus=$_POST["Dni"];
	 
  if($VBoton=="Buscar"){
		$sql="select * from clientes where NUMDOC='$bus'";
		$cs=mysql_query($sql,$Con);
		while($resul=mysql_fetch_array($cs)){
			$varDni=$resul[0];
			$varCantel=$resul[1];
			$varTel1=$resul[2];
			$varTel2=$resul[3];
			$varTel3=$resul[4];
			$varTel4=$resul[5];
			$varTel5=$resul[6];
			$varTel6=$resul[7];
			$varTel7=$resul[8];
			$varTel8=$resul[9];
			$varTel9=$resul[10];
			$varTel10=$resul[11];
			$varTel11=$resul[12];
			$varTel12=$resul[13];
			$varTel13=$resul[14];
			$varTel14=$resul[15];
			$varTel15=$resul[16];
			$varTel16=$resul[17];
			$varTel17=$resul[18];
			$varTel18=$resul[19];
			$varTel19=$resul[20];
			$varTel20=$resul[21];
			$varTel21=$resul[22];
			$varTel22=$resul[23];
			$varTel23=$resul[24];
			$varTel24=$resul[25];
			$varTel25=$resul[26];
			$varTel26=$resul[27];
			}
			
			if($varTel24=="SI"){
							$varTel24_1="selected";
			}	else   					 {	
							$varTel24_0="selected";
			}
			
			if($varTel26=="SI"){
							$varTel26_1="selected";
			}	else   					 {	
							$varTel26_0="selected";
			}
			
			if($varTel23=="C101"){
							$varTel23_1="selected";
			}	elseif ($varTel23=="C102"){
							$varTel23_2="selected";
			}	elseif ($varTel23=="C201"){
							$varTel23_3="selected";
			}	elseif ($varTel23=="C301"){
							$varTel23_4="selected";
			}	elseif ($varTel23=="C302"){
							$varTel23_5="selected";
			}	elseif ($varTel23=="C303"){
							$varTel23_6="selected";
			}	elseif ($varTel23=="C304"){
							$varTel23_7="selected";
			}	elseif ($varTel23=="C305"){
							$varTel23_8="selected";
			}	elseif ($varTel23=="C401"){
							$varTel23_9="selected";
			}	elseif ($varTel23=="C402"){
							$varTel23_10="selected";
			}	else   					 {	
							$varTel23_0="selected";
			}
			
		

		}
		//Guardar
	  /* if($VBoton=="Guardar"){
			
		$sql="insert into empleado values ('$Id','$APa','$AMa','$Nom','$Sex','$Fec','$Dom','$Ciu','$CP','$Est')";
		$sql1="insert into escolaridad values ('$Id','$Nivel','$Titulo')";
		$sql2="insert into experiencia values ('$Id','$NomEmp','$Puesto','$GiroE','$Dire','$Sueldo','$TiemTra')";
		$sql3="insert into altaemp values ('$Id','$PuestoAsi','$Dpto','$SueldoAlt','$JornadaTr','$HorasTra','$JornadTra')";

		$cs=mysql_query($sql,$Con);
		$cs1=mysql_query($sql1,$Con);
		$cs2=mysql_query($sql2,$Con);
		$cs3=mysql_query($sql3,$Con);
		   echo "<script> alert('Datos Almacenados Correctamente del Empleado');</script>";
		}	 */
		
		//Eliminar
	  /* if($VBoton=="Eliminar"){
		    $Id=$_POST["Emp"];	
			
		$sql="delete from empleado where NumEmplado='$Id'";
		$sql1="delete from escolaridad where NumEmpleado='$Id'";
		$sql2="delete from experiencia where NumEmple='$Id'";
		$sql3="delete from altaemp where NumEmpleado='$Id'";
				
		$cs=mysql_query($sql,$Con);
		$cs1=mysql_query($sql1,$Con);
		$cs2=mysql_query($sql2,$Con);
		$cs3=mysql_query($sql3,$Con);
		echo "<script> alert('Se Elimnino Correctamente al Empleado de Clave '+ $Id);</script>";
		} */
		
		
		//Actualizar
	   if($VBoton=="Actualizar"){
		    		
		$sql="update clientes set 
		HCID='$VarDni',
		NUMDOC='$Tel1',
		NOMBRE1='$Tel2',
		NOMBRE2='$Tel3',
		APEPATERNO='$Tel4',
		APEMATERNO='$Tel5',
		NACIMIENTO='$Tel6',
		CORREO='$Tel7',
		TLFMOVIL='$Tel8',
		TLFFIJO='$Tel9',
		TLFOFIC='$Tel10',
		TLFANEX='$Tel11',
		DIRECCION='$Tel12',
		REFERENCIA='$Tel13',
		DISTRITO='$Tel14',
		PROVINCIA='$Tel15',
		DEPARTAMENTO='$Tel16',
		EDAD='$Tel17',
		FECHA='$Tel18',
		HORA='$Tel19',
		ANEXO='$Tel20',
		TLFCONT='$Tel21',
		CORREOCONT='$Tel22',
		RESCOD='$Tel23',
		ACTUALIZADO='$Tel24',
		CORLLAM='$Tel26'
		where NUMDOC='$Dni'";
		
		$cs=mysql_query($sql,$Con);

		echo "<script> alert('Se actualizo correctamente');</script>";
		}
		
    }

?>
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
									echo "BASE DE DATOS BUSQUEDA DE DNI";
									 ?>
	                            </div>
                            </div>
                        </div>
                    </h5>
                </div>
  
</div>
			
<div class="panel-body">	

<div class="row">

<div class="container-fluid">
	
 <form class="form-horizontal" name="formulario" method="post" action="">
 

<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Buscar DNI:</label>
  <div class="col-sm-2">
  <input class="form-control" type="text" name="Dni" value="<?php echo $varTel1?>" />
  </div>
  <div class="col-sm-1">
  <input type="submit" class="btn btn-primary" name="boton"  value="Buscar"  />
  </div>

</div> 

<div class="form-group">

	<label for="inputEmail3" class="col-sm-2 control-label">CODIGO INTERNO:</label>
    <div class="col-sm-2">
	<input readonly="readonly" class="form-control" type="text" name="VarDni" value="<?php echo $varDni?>" />
	</div>
	
	<label for="inputEmail3" class="col-sm-2 control-label">NUMERO DNI:</label>
	<div class="col-sm-2">
	<input readonly="readonly" class="form-control" type="text" name="Tel1" value="<?php echo $varTel1?>" />
	</div>
	
	<label for="inputEmail3" class="col-sm-2 control-label">NACIMIENTO:</label>
	<div class="col-sm-2">
	<input readonly="readonly" class="form-control" type="text" name="Tel6" value="<?php echo $varTel6?>" />
	</div>
	
</div> 


<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">NOMBRE 1:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel2" value="<?php echo $varTel2?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">NOMBRE 2:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel3" value="<?php echo $varTel3?>" />
</div>

	<label for="inputEmail3" class="col-sm-2 control-label">EDAD:</label>
	<div class="col-sm-2">
	<input readonly="readonly" class="form-control" type="text" name="Tel17" value="<?php echo $varTel17?>" />
	</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">APELLIDO PAT:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel4" value="<?php echo $varTel4?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">APELLIDO MAT:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel5" value="<?php echo $varTel5?>" />
</div>

</div>  



<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TEL MOVIL:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel8" value="<?php echo $varTel8?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TEL FIJO:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel9" value="<?php echo $varTel9?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TEL OFICINA:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel10" value="<?php echo $varTel10?>" />
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">CORREO:</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="Tel7" value="<?php echo $varTel7?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">ANEXO:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel11" value="<?php echo $varTel11?>" />
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">DIRECCION:</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="Tel12" value="<?php echo $varTel12?>" />
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">REFERENCIA:</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="Tel13" value="<?php echo $varTel13?>" />
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">DEPARTAMENTO:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel16" value="<?php echo $varTel16?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">PROVINCIA:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel15" value="<?php echo $varTel15?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">DISTRITO:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel14" value="<?php echo $varTel14?>" />
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TEL CONTACTO:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel21" value="<?php echo $varTel21?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">ANEXO:</label>
<div class="col-sm-2">
<input class="form-control" type="text" name="Tel20" value="<?php echo $varTel20?>" />
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">CORREO CONTACTO:</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="Tel22" value="<?php echo $varTel22?>" />
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">FECHA:</label>
<div class="col-sm-2">
<input class="form-control" type="datetime" name="Tel18" value="<?php echo $varTel18?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">HORA:</label>
<div class="col-sm-2">
<input class="form-control" type="time" name="Tel19" value="<?php echo $varTel19?>" />
</div>

</div>

<div class="form-group">



</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">ACTUALIZADO:</label>
<div class="col-sm-2">
<select class="form-control" name="Tel24" >
<option value="NO" <?php echo $varTel24_0?> >NO</option>
<option value="SI" <?php echo $varTel24_1?> >SI</option>
</select>
</div>

<label for="inputEmail3" class="col-sm-2 control-label">CORTE FORZADO:</label>
<div class="col-sm-2">
<select class="form-control" name="Tel26" >
<option value="NO" <?php echo $varTel26_0?> >NO</option>
<option value="SI" <?php echo $varTel26_1?> >SI</option>
</select>
</div>

<label for="inputEmail3" class="col-sm-2 control-label">RESULTADO:</label>
<div class="col-sm-2">
<select class="form-control" name="Tel23" >
<option value="0" <?php echo $varTel23_0?> >SELECCIONAR</option>
<option value="C101" <?php echo $varTel23_1?> >No se ha intentado aún</option>
<option value="C102" <?php echo $varTel23_2?> >Sin teléfonos</option>
<option value="C201" <?php echo $varTel23_3?> >Teléfonos todos sin contacto</option>
<option value="C301" <?php echo $varTel23_4?> >Persona Fallecida</option>
<option value="C302" <?php echo $varTel23_5?> >Persona de viaje</option>
<option value="C303" <?php echo $varTel23_6?> >No se encuentra</option>
<option value="C304" <?php echo $varTel23_7?> >No disponible / No puede atender</option>
<option value="C305" <?php echo $varTel23_8?> >Agendar / Devolver llamada</option>
<option value="C401" <?php echo $varTel23_9?> >SI acepta envio de EECC</option>
<option value="C402" <?php echo $varTel23_10?> >NO acepta envio de EECC</option>
</select>
</div>

</div> 

  <div class="col-sm-1" >
  <input type="submit" class="btn btn-primary" name="boton" value="Actualizar" />
  </div>
  
</form>

</div>

</div>

</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

	    <div id="footer" style="background-color: #333333">
            <div class="container">
                <div  class="col-md-7 text-left">
                    <a id="" style="color:  white" > &copy; DESARROLLADO POR EL EQUIPO DE SISTEMAS</a>
                </div>
                
            </div>
        </div>

</html>

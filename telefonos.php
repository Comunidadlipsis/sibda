<?php
include("conexion.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
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
			$Cantel=$_POST["Cantel"];
			$Tel1=$_POST["Tel1"];
			$Res1=$_POST["Res1"];
			$Tel2=$_POST["Tel2"];
			$Res2=$_POST["Res2"];
			$Tel3=$_POST["Tel3"];
			$Res3=$_POST["Res3"];
			$Tel4=$_POST["Tel4"];
			$Res4=$_POST["Res4"];
			$Tel5=$_POST["Tel5"];
			$Res5=$_POST["Res5"];
			$Tel6=$_POST["Tel6"];
			$Res6=$_POST["Res6"];
			$Tel7=$_POST["Tel7"];
			$Res7=$_POST["Res7"];
			$Tel8=$_POST["Tel8"];
			$Res8=$_POST["Res8"];
			$Tel9=$_POST["Tel9"];
			$Res9=$_POST["Res9"];
			$Tel10=$_POST["Tel10"];
			$Res10=$_POST["Res10"];
			$Tel11=$_POST["Tel11"];
			$Res11=$_POST["Res11"];
			$Tel12=$_POST["Tel12"];
			$Res12=$_POST["Res12"];
			$Tel13=$_POST["Tel13"];
			$Res13=$_POST["Res13"];
			$Tel14=$_POST["Tel14"];
			$Res14=$_POST["Res14"];
			$Tel15=$_POST["Tel15"];
			$Res15=$_POST["Res15"];
			$Tel16=$_POST["Tel16"];
			$Res16=$_POST["Res16"];
			$Tel17=$_POST["Tel17"];
			$Res17=$_POST["Res17"];
			$Tel18=$_POST["Tel18"];
			$Res18=$_POST["Res18"];
			$Tel19=$_POST["Tel19"];
			$Res19=$_POST["Res19"];
			$Tel20=$_POST["Tel20"];
			$Res20=$_POST["Res20"];
			$Tel21=$_POST["Tel21"];
			$Res21=$_POST["Res21"];
			$Tel22=$_POST["Tel22"];
			$Res22=$_POST["Res22"];
			$Tel23=$_POST["Tel23"];
			$Res23=$_POST["Res23"];
			$Tel24=$_POST["Tel24"];
			$Res24=$_POST["Res24"];
			$Tel25=$_POST["Tel25"];
			$Res25=$_POST["Res25"];
			$Tel26=$_POST["Tel26"];
			$Res26=$_POST["Res26"];
			$Tel27=$_POST["Tel27"];
			$Res27=$_POST["Res27"];
			$Tel28=$_POST["Tel28"];
			$Res28=$_POST["Res28"];
			$Tel29=$_POST["Tel29"];
			$Res29=$_POST["Res29"];
			$Tel30=$_POST["Tel30"];
			$Res30=$_POST["Res30"];
			$Tel31=$_POST["Tel31"];
			$Res31=$_POST["Res31"];
			$Tel32=$_POST["Tel32"];
			$Res32=$_POST["Res32"];
			$Tel33=$_POST["Tel33"];
			$Res33=$_POST["Res33"];

			
 if(isset($_POST["boton"])){
     $VBoton=$_POST["boton"];
	 $bus=$_POST["Dni"];
	 
  if($VBoton=="Buscar"){
		$sql="select * from telefonos where NUMDOC='$bus'";
		$cs=mysql_query($sql,$Con);
		while($resul=mysql_fetch_array($cs)){
			$varDni=$resul[0];
			$varCantel=$resul[1];
			$varTel1=$resul[2];
			$varRes1=$resul[3];
			$varTel2=$resul[4];
			$varRes2=$resul[5];
			$varTel3=$resul[6];
			$varRes3=$resul[7];
			$varTel4=$resul[8];
			$varRes4=$resul[9];
			$varTel5=$resul[10];
			$varRes5=$resul[11];
			$varTel6=$resul[12];
			$varRes6=$resul[13];
			$varTel7=$resul[14];
			$varRes7=$resul[15];
			$varTel8=$resul[16];
			$varRes8=$resul[17];
			$varTel9=$resul[18];
			$varRes9=$resul[19];
			$varTel10=$resul[20];
			$varRes10=$resul[21];
			$varTel11=$resul[22];
			$varRes11=$resul[23];
			$varTel12=$resul[24];
			$varRes12=$resul[25];
			$varTel13=$resul[26];
			$varRes13=$resul[27];
			$varTel14=$resul[28];
			$varRes14=$resul[29];
			$varTel15=$resul[30];
			$varRes15=$resul[31];
			$varTel16=$resul[32];
			$varRes16=$resul[33];
			$varTel17=$resul[34];
			$varRes17=$resul[35];
			$varTel18=$resul[36];
			$varRes18=$resul[37];
			$varTel19=$resul[38];
			$varRes19=$resul[39];
			$varTel20=$resul[40];
			$varRes20=$resul[41];
			$varTel21=$resul[42];
			$varRes21=$resul[43];
			$varTel22=$resul[44];
			$varRes22=$resul[45];
			$varTel23=$resul[46];
			$varRes23=$resul[47];
			$varTel24=$resul[48];
			$varRes24=$resul[49];
			$varTel25=$resul[50];
			$varRes25=$resul[51];
			$varTel26=$resul[52];
			$varRes26=$resul[53];
			$varTel27=$resul[54];
			$varRes27=$resul[55];
			$varTel28=$resul[56];
			$varRes28=$resul[57];
			$varTel29=$resul[58];
			$varRes29=$resul[59];
			$varTel30=$resul[60];
			$varRes30=$resul[61];
			$varTel31=$resul[62];
			$varRes31=$resul[63];
			$varTel32=$resul[64];
			$varRes32=$resul[65];
			$varTel33=$resul[66];
			$varRes33=$resul[67];

			}
			
			if($varRes1=="T101"){
							$varRes1_1="selected";
			}	elseif ($varRes1=="T201"){
							$varRes1_2="selected";
			}	elseif ($varRes1=="T202"){
							$varRes1_3="selected";
			}	elseif ($varRes1=="T203"){
							$varRes1_4="selected";
			}	elseif ($varRes1=="T204"){
							$varRes1_5="selected";
			}	elseif ($varRes1=="T205"){
							$varRes1_6="selected";
			}	elseif ($varRes1=="T206"){
							$varRes1_7="selected";
			}	elseif ($varRes1=="T207"){
							$varRes1_8="selected";
			}	elseif ($varRes1=="T208"){
							$varRes1_9="selected";
			}	elseif ($varRes1=="T301"){
							$varRes1_10="selected";
			}	else   					 {	
							$varRes1_0="selected";
			}
			
			if($varRes2=="T101"){
							$varRes2_1="selected";
			}	elseif ($varRes2=="T201"){
							$varRes2_2="selected";
			}	elseif ($varRes2=="T202"){
							$varRes2_3="selected";
			}	elseif ($varRes2=="T203"){
							$varRes2_4="selected";
			}	elseif ($varRes2=="T204"){
							$varRes2_5="selected";
			}	elseif ($varRes2=="T205"){
							$varRes2_6="selected";
			}	elseif ($varRes2=="T206"){
							$varRes2_7="selected";
			}	elseif ($varRes2=="T207"){
							$varRes2_8="selected";
			}	elseif ($varRes2=="T208"){
							$varRes2_9="selected";
			}	elseif ($varRes2=="T301"){
							$varRes2_10="selected";
			}	else   					 {	
							$varRes2_0="selected";
			}
			
			if($varRes3=="T101"){
							$varRes3_1="selected";
			}	elseif ($varRes3=="T201"){
							$varRes3_2="selected";
			}	elseif ($varRes3=="T202"){
							$varRes3_3="selected";
			}	elseif ($varRes3=="T203"){
							$varRes3_4="selected";
			}	elseif ($varRes3=="T204"){
							$varRes3_5="selected";
			}	elseif ($varRes3=="T205"){
							$varRes3_6="selected";
			}	elseif ($varRes3=="T206"){
							$varRes3_7="selected";
			}	elseif ($varRes3=="T207"){
							$varRes3_8="selected";
			}	elseif ($varRes3=="T208"){
							$varRes3_9="selected";
			}	elseif ($varRes3=="T301"){
							$varRes3_10="selected";
			}	else   					 {	
							$varRes3_0="selected";
			}
			
			if($varRes4=="T101"){
							$varRes4_1="selected";
			}	elseif ($varRes4=="T201"){
							$varRes4_2="selected";
			}	elseif ($varRes4=="T202"){
							$varRes4_3="selected";
			}	elseif ($varRes4=="T203"){
							$varRes4_4="selected";
			}	elseif ($varRes4=="T204"){
							$varRes4_5="selected";
			}	elseif ($varRes4=="T205"){
							$varRes4_6="selected";
			}	elseif ($varRes4=="T206"){
							$varRes4_7="selected";
			}	elseif ($varRes4=="T207"){
							$varRes4_8="selected";
			}	elseif ($varRes4=="T208"){
							$varRes4_9="selected";
			}	elseif ($varRes4=="T301"){
							$varRes4_10="selected";
			}	else   					 {	
							$varRes4_0="selected";
			}
			
			if($varRes5=="T101"){
							$varRes5_1="selected";
			}	elseif ($varRes5=="T201"){
							$varRes5_2="selected";
			}	elseif ($varRes5=="T202"){
							$varRes5_3="selected";
			}	elseif ($varRes5=="T203"){
							$varRes5_4="selected";
			}	elseif ($varRes5=="T204"){
							$varRes5_5="selected";
			}	elseif ($varRes5=="T205"){
							$varRes5_6="selected";
			}	elseif ($varRes5=="T206"){
							$varRes5_7="selected";
			}	elseif ($varRes5=="T207"){
							$varRes5_8="selected";
			}	elseif ($varRes5=="T208"){
							$varRes5_9="selected";
			}	elseif ($varRes5=="T301"){
							$varRes5_10="selected";
			}	else   					 {	
							$varRes5_0="selected";
			}
			
			if($varRes6=="T101"){
							$varRes6_1="selected";
			}	elseif ($varRes6=="T201"){
							$varRes6_2="selected";
			}	elseif ($varRes6=="T202"){
							$varRes6_3="selected";
			}	elseif ($varRes6=="T203"){
							$varRes6_4="selected";
			}	elseif ($varRes6=="T204"){
							$varRes6_5="selected";
			}	elseif ($varRes6=="T205"){
							$varRes6_6="selected";
			}	elseif ($varRes6=="T206"){
							$varRes6_7="selected";
			}	elseif ($varRes6=="T207"){
							$varRes6_8="selected";
			}	elseif ($varRes6=="T208"){
							$varRes6_9="selected";
			}	elseif ($varRes6=="T301"){
							$varRes6_10="selected";
			}	else   					 {	
							$varRes6_0="selected";
			}
			
			if($varRes7=="T101"){
							$varRes7_1="selected";
			}	elseif ($varRes7=="T201"){
							$varRes7_2="selected";
			}	elseif ($varRes7=="T202"){
							$varRes7_3="selected";
			}	elseif ($varRes7=="T203"){
							$varRes7_4="selected";
			}	elseif ($varRes7=="T204"){
							$varRes7_5="selected";
			}	elseif ($varRes7=="T205"){
							$varRes7_6="selected";
			}	elseif ($varRes7=="T206"){
							$varRes7_7="selected";
			}	elseif ($varRes7=="T207"){
							$varRes7_8="selected";
			}	elseif ($varRes7=="T208"){
							$varRes7_9="selected";
			}	elseif ($varRes7=="T301"){
							$varRes7_10="selected";
			}	else   					 {	
							$varRes7_0="selected";
			}
			
			if($varRes8=="T101"){
							$varRes8_1="selected";
			}	elseif ($varRes8=="T201"){
							$varRes8_2="selected";
			}	elseif ($varRes8=="T202"){
							$varRes8_3="selected";
			}	elseif ($varRes8=="T203"){
							$varRes8_4="selected";
			}	elseif ($varRes8=="T204"){
							$varRes8_5="selected";
			}	elseif ($varRes8=="T205"){
							$varRes8_6="selected";
			}	elseif ($varRes8=="T206"){
							$varRes8_7="selected";
			}	elseif ($varRes8=="T207"){
							$varRes8_8="selected";
			}	elseif ($varRes8=="T208"){
							$varRes8_9="selected";
			}	elseif ($varRes8=="T301"){
							$varRes8_10="selected";
			}	else   					 {	
							$varRes8_0="selected";
			}
			
			if($varRes9=="T101"){
							$varRes9_1="selected";
			}	elseif ($varRes9=="T201"){
							$varRes9_2="selected";
			}	elseif ($varRes9=="T202"){
							$varRes9_3="selected";
			}	elseif ($varRes9=="T203"){
							$varRes9_4="selected";
			}	elseif ($varRes9=="T204"){
							$varRes9_5="selected";
			}	elseif ($varRes9=="T205"){
							$varRes9_6="selected";
			}	elseif ($varRes9=="T206"){
							$varRes9_7="selected";
			}	elseif ($varRes9=="T207"){
							$varRes9_8="selected";
			}	elseif ($varRes9=="T208"){
							$varRes9_9="selected";
			}	elseif ($varRes9=="T301"){
							$varRes9_10="selected";
			}	else   					 {	
							$varRes9_0="selected";
			}
			
			if($varRes10=="T101"){
							$varRes10_1="selected";
			}	elseif ($varRes10=="T201"){
							$varRes10_2="selected";
			}	elseif ($varRes10=="T202"){
							$varRes10_3="selected";
			}	elseif ($varRes10=="T203"){
							$varRes10_4="selected";
			}	elseif ($varRes10=="T204"){
							$varRes10_5="selected";
			}	elseif ($varRes10=="T205"){
							$varRes10_6="selected";
			}	elseif ($varRes10=="T206"){
							$varRes10_7="selected";
			}	elseif ($varRes10=="T207"){
							$varRes10_8="selected";
			}	elseif ($varRes10=="T208"){
							$varRes10_9="selected";
			}	elseif ($varRes10=="T301"){
							$varRes10_10="selected";
			}	else   					 {	
							$varRes10_0="selected";
			}
			
			if($varRes11=="T101"){
							$varRes11_1="selected";
			}	elseif ($varRes11=="T201"){
							$varRes11_2="selected";
			}	elseif ($varRes11=="T202"){
							$varRes11_3="selected";
			}	elseif ($varRes11=="T203"){
							$varRes11_4="selected";
			}	elseif ($varRes11=="T204"){
							$varRes11_5="selected";
			}	elseif ($varRes11=="T205"){
							$varRes11_6="selected";
			}	elseif ($varRes11=="T206"){
							$varRes11_7="selected";
			}	elseif ($varRes11=="T207"){
							$varRes11_8="selected";
			}	elseif ($varRes11=="T208"){
							$varRes11_9="selected";
			}	elseif ($varRes11=="T301"){
							$varRes11_10="selected";
			}	else   					 {	
							$varRes11_0="selected";
			}
			
			if($varRes12=="T101"){
							$varRes12_1="selected";
			}	elseif ($varRes12=="T201"){
							$varRes12_2="selected";
			}	elseif ($varRes12=="T202"){
							$varRes12_3="selected";
			}	elseif ($varRes12=="T203"){
							$varRes12_4="selected";
			}	elseif ($varRes12=="T204"){
							$varRes12_5="selected";
			}	elseif ($varRes12=="T205"){
							$varRes12_6="selected";
			}	elseif ($varRes12=="T206"){
							$varRes12_7="selected";
			}	elseif ($varRes12=="T207"){
							$varRes12_8="selected";
			}	elseif ($varRes12=="T208"){
							$varRes12_9="selected";
			}	elseif ($varRes12=="T301"){
							$varRes12_10="selected";
			}	else   					 {	
							$varRes12_0="selected";
			}
			
			if($varRes13=="T101"){
							$varRes13_1="selected";
			}	elseif ($varRes13=="T201"){
							$varRes13_2="selected";
			}	elseif ($varRes13=="T202"){
							$varRes13_3="selected";
			}	elseif ($varRes13=="T203"){
							$varRes13_4="selected";
			}	elseif ($varRes13=="T204"){
							$varRes13_5="selected";
			}	elseif ($varRes13=="T205"){
							$varRes13_6="selected";
			}	elseif ($varRes13=="T206"){
							$varRes13_7="selected";
			}	elseif ($varRes13=="T207"){
							$varRes13_8="selected";
			}	elseif ($varRes13=="T208"){
							$varRes13_9="selected";
			}	elseif ($varRes13=="T301"){
							$varRes13_10="selected";
			}	else   					 {	
							$varRes13_0="selected";
			}
			
			if($varRes14=="T101"){
							$varRes14_1="selected";
			}	elseif ($varRes14=="T201"){
							$varRes14_2="selected";
			}	elseif ($varRes14=="T202"){
							$varRes14_3="selected";
			}	elseif ($varRes14=="T203"){
							$varRes14_4="selected";
			}	elseif ($varRes14=="T204"){
							$varRes14_5="selected";
			}	elseif ($varRes14=="T205"){
							$varRes14_6="selected";
			}	elseif ($varRes14=="T206"){
							$varRes14_7="selected";
			}	elseif ($varRes14=="T207"){
							$varRes14_8="selected";
			}	elseif ($varRes14=="T208"){
							$varRes14_9="selected";
			}	elseif ($varRes14=="T301"){
							$varRes14_10="selected";
			}	else   					 {	
							$varRes14_0="selected";
			}
			
			if($varRes15=="T101"){
							$varRes15_1="selected";
			}	elseif ($varRes15=="T201"){
							$varRes15_2="selected";
			}	elseif ($varRes15=="T202"){
							$varRes15_3="selected";
			}	elseif ($varRes15=="T203"){
							$varRes15_4="selected";
			}	elseif ($varRes15=="T204"){
							$varRes15_5="selected";
			}	elseif ($varRes15=="T205"){
							$varRes15_6="selected";
			}	elseif ($varRes15=="T206"){
							$varRes15_7="selected";
			}	elseif ($varRes15=="T207"){
							$varRes15_8="selected";
			}	elseif ($varRes15=="T208"){
							$varRes15_9="selected";
			}	elseif ($varRes15=="T301"){
							$varRes15_10="selected";
			}	else   					 {	
							$varRes15_0="selected";
			}
			
			if($varRes16=="T101"){
							$varRes16_1="selected";
			}	elseif ($varRes16=="T201"){
							$varRes16_2="selected";
			}	elseif ($varRes16=="T202"){
							$varRes16_3="selected";
			}	elseif ($varRes16=="T203"){
							$varRes16_4="selected";
			}	elseif ($varRes16=="T204"){
							$varRes16_5="selected";
			}	elseif ($varRes16=="T205"){
							$varRes16_6="selected";
			}	elseif ($varRes16=="T206"){
							$varRes16_7="selected";
			}	elseif ($varRes16=="T207"){
							$varRes16_8="selected";
			}	elseif ($varRes16=="T208"){
							$varRes16_9="selected";
			}	elseif ($varRes16=="T301"){
							$varRes16_10="selected";
			}	else   					 {	
							$varRes16_0="selected";
			}
			
			if($varRes17=="T101"){
							$varRes17_1="selected";
			}	elseif ($varRes17=="T201"){
							$varRes17_2="selected";
			}	elseif ($varRes17=="T202"){
							$varRes17_3="selected";
			}	elseif ($varRes17=="T203"){
							$varRes17_4="selected";
			}	elseif ($varRes17=="T204"){
							$varRes17_5="selected";
			}	elseif ($varRes17=="T205"){
							$varRes17_6="selected";
			}	elseif ($varRes17=="T206"){
							$varRes17_7="selected";
			}	elseif ($varRes17=="T207"){
							$varRes17_8="selected";
			}	elseif ($varRes17=="T208"){
							$varRes17_9="selected";
			}	elseif ($varRes17=="T301"){
							$varRes17_10="selected";
			}	else   					 {	
							$varRes17_0="selected";
			}
			
			if($varRes18=="T101"){
							$varRes18_1="selected";
			}	elseif ($varRes18=="T201"){
							$varRes18_2="selected";
			}	elseif ($varRes18=="T202"){
							$varRes18_3="selected";
			}	elseif ($varRes18=="T203"){
							$varRes18_4="selected";
			}	elseif ($varRes18=="T204"){
							$varRes18_5="selected";
			}	elseif ($varRes18=="T205"){
							$varRes18_6="selected";
			}	elseif ($varRes18=="T206"){
							$varRes18_7="selected";
			}	elseif ($varRes18=="T207"){
							$varRes18_8="selected";
			}	elseif ($varRes18=="T208"){
							$varRes18_9="selected";
			}	elseif ($varRes18=="T301"){
							$varRes18_10="selected";
			}	else   					 {	
							$varRes18_0="selected";
			}
			
			if($varRes19=="T101"){
							$varRes19_1="selected";
			}	elseif ($varRes19=="T201"){
							$varRes19_2="selected";
			}	elseif ($varRes19=="T202"){
							$varRes19_3="selected";
			}	elseif ($varRes19=="T203"){
							$varRes19_4="selected";
			}	elseif ($varRes19=="T204"){
							$varRes19_5="selected";
			}	elseif ($varRes19=="T205"){
							$varRes19_6="selected";
			}	elseif ($varRes19=="T206"){
							$varRes19_7="selected";
			}	elseif ($varRes19=="T207"){
							$varRes19_8="selected";
			}	elseif ($varRes19=="T208"){
							$varRes19_9="selected";
			}	elseif ($varRes19=="T301"){
							$varRes19_10="selected";
			}	else   					 {	
							$varRes19_0="selected";
			}
			
			if($varRes20=="T101"){
							$varRes20_1="selected";
			}	elseif ($varRes20=="T201"){
							$varRes20_2="selected";
			}	elseif ($varRes20=="T202"){
							$varRes20_3="selected";
			}	elseif ($varRes20=="T203"){
							$varRes20_4="selected";
			}	elseif ($varRes20=="T204"){
							$varRes20_5="selected";
			}	elseif ($varRes20=="T205"){
							$varRes20_6="selected";
			}	elseif ($varRes20=="T206"){
							$varRes20_7="selected";
			}	elseif ($varRes20=="T207"){
							$varRes20_8="selected";
			}	elseif ($varRes20=="T208"){
							$varRes20_9="selected";
			}	elseif ($varRes20=="T301"){
							$varRes20_10="selected";
			}	else   					 {	
							$varRes20_0="selected";
			}
			
			if($varRes21=="T101"){
							$varRes21_1="selected";
			}	elseif ($varRes21=="T201"){
							$varRes21_2="selected";
			}	elseif ($varRes21=="T202"){
							$varRes21_3="selected";
			}	elseif ($varRes21=="T203"){
							$varRes21_4="selected";
			}	elseif ($varRes21=="T204"){
							$varRes21_5="selected";
			}	elseif ($varRes21=="T205"){
							$varRes21_6="selected";
			}	elseif ($varRes21=="T206"){
							$varRes21_7="selected";
			}	elseif ($varRes21=="T207"){
							$varRes21_8="selected";
			}	elseif ($varRes21=="T208"){
							$varRes21_9="selected";
			}	elseif ($varRes21=="T301"){
							$varRes21_10="selected";
			}	else   					 {	
							$varRes21_0="selected";
			}
			
			if($varRes22=="T101"){
							$varRes22_1="selected";
			}	elseif ($varRes22=="T201"){
							$varRes22_2="selected";
			}	elseif ($varRes22=="T202"){
							$varRes22_3="selected";
			}	elseif ($varRes22=="T203"){
							$varRes22_4="selected";
			}	elseif ($varRes22=="T204"){
							$varRes22_5="selected";
			}	elseif ($varRes22=="T205"){
							$varRes22_6="selected";
			}	elseif ($varRes22=="T206"){
							$varRes22_7="selected";
			}	elseif ($varRes22=="T207"){
							$varRes22_8="selected";
			}	elseif ($varRes22=="T208"){
							$varRes22_9="selected";
			}	elseif ($varRes22=="T301"){
							$varRes22_10="selected";
			}	else   					 {	
							$varRes22_0="selected";
			}
			
			if($varRes23=="T101"){
							$varRes23_1="selected";
			}	elseif ($varRes23=="T201"){
							$varRes23_2="selected";
			}	elseif ($varRes23=="T202"){
							$varRes23_3="selected";
			}	elseif ($varRes23=="T203"){
							$varRes23_4="selected";
			}	elseif ($varRes23=="T204"){
							$varRes23_5="selected";
			}	elseif ($varRes23=="T205"){
							$varRes23_6="selected";
			}	elseif ($varRes23=="T206"){
							$varRes23_7="selected";
			}	elseif ($varRes23=="T207"){
							$varRes23_8="selected";
			}	elseif ($varRes23=="T208"){
							$varRes23_9="selected";
			}	elseif ($varRes23=="T301"){
							$varRes23_10="selected";
			}	else   					 {	
							$varRes23_0="selected";
			}
			
			if($varRes24=="T101"){
							$varRes24_1="selected";
			}	elseif ($varRes24=="T201"){
							$varRes24_2="selected";
			}	elseif ($varRes24=="T202"){
							$varRes24_3="selected";
			}	elseif ($varRes24=="T203"){
							$varRes24_4="selected";
			}	elseif ($varRes24=="T204"){
							$varRes24_5="selected";
			}	elseif ($varRes24=="T205"){
							$varRes24_6="selected";
			}	elseif ($varRes24=="T206"){
							$varRes24_7="selected";
			}	elseif ($varRes24=="T207"){
							$varRes24_8="selected";
			}	elseif ($varRes24=="T208"){
							$varRes24_9="selected";
			}	elseif ($varRes24=="T301"){
							$varRes24_10="selected";
			}	else   					 {	
							$varRes24_0="selected";
			}
			
			if($varRes25=="T101"){
							$varRes25_1="selected";
			}	elseif ($varRes25=="T201"){
							$varRes25_2="selected";
			}	elseif ($varRes25=="T202"){
							$varRes25_3="selected";
			}	elseif ($varRes25=="T203"){
							$varRes25_4="selected";
			}	elseif ($varRes25=="T204"){
							$varRes25_5="selected";
			}	elseif ($varRes25=="T205"){
							$varRes25_6="selected";
			}	elseif ($varRes25=="T206"){
							$varRes25_7="selected";
			}	elseif ($varRes25=="T207"){
							$varRes25_8="selected";
			}	elseif ($varRes25=="T208"){
							$varRes25_9="selected";
			}	elseif ($varRes25=="T301"){
							$varRes25_10="selected";
			}	else   					 {	
							$varRes25_0="selected";
			}
			
			if($varRes26=="T101"){
							$varRes26_1="selected";
			}	elseif ($varRes26=="T201"){
							$varRes26_2="selected";
			}	elseif ($varRes26=="T202"){
							$varRes26_3="selected";
			}	elseif ($varRes26=="T203"){
							$varRes26_4="selected";
			}	elseif ($varRes26=="T204"){
							$varRes26_5="selected";
			}	elseif ($varRes26=="T205"){
							$varRes26_6="selected";
			}	elseif ($varRes26=="T206"){
							$varRes26_7="selected";
			}	elseif ($varRes26=="T207"){
							$varRes26_8="selected";
			}	elseif ($varRes26=="T208"){
							$varRes26_9="selected";
			}	elseif ($varRes26=="T301"){
							$varRes26_10="selected";
			}	else   					 {	
							$varRes26_0="selected";
			}
			
			if($varRes27=="T101"){
							$varRes27_1="selected";
			}	elseif ($varRes27=="T201"){
							$varRes27_2="selected";
			}	elseif ($varRes27=="T202"){
							$varRes27_3="selected";
			}	elseif ($varRes27=="T203"){
							$varRes27_4="selected";
			}	elseif ($varRes27=="T204"){
							$varRes27_5="selected";
			}	elseif ($varRes27=="T205"){
							$varRes27_6="selected";
			}	elseif ($varRes27=="T206"){
							$varRes27_7="selected";
			}	elseif ($varRes27=="T207"){
							$varRes27_8="selected";
			}	elseif ($varRes27=="T208"){
							$varRes27_9="selected";
			}	elseif ($varRes27=="T301"){
							$varRes27_10="selected";
			}	else   					 {	
							$varRes27_0="selected";
			}
			
			if($varRes28=="T101"){
							$varRes28_1="selected";
			}	elseif ($varRes28=="T201"){
							$varRes28_2="selected";
			}	elseif ($varRes28=="T202"){
							$varRes28_3="selected";
			}	elseif ($varRes28=="T203"){
							$varRes28_4="selected";
			}	elseif ($varRes28=="T204"){
							$varRes28_5="selected";
			}	elseif ($varRes28=="T205"){
							$varRes28_6="selected";
			}	elseif ($varRes28=="T206"){
							$varRes28_7="selected";
			}	elseif ($varRes28=="T207"){
							$varRes28_8="selected";
			}	elseif ($varRes28=="T208"){
							$varRes28_9="selected";
			}	elseif ($varRes28=="T301"){
							$varRes28_10="selected";
			}	else   					 {	
							$varRes28_0="selected";
			}
			
			if($varRes29=="T101"){
							$varRes29_1="selected";
			}	elseif ($varRes29=="T201"){
							$varRes29_2="selected";
			}	elseif ($varRes29=="T202"){
							$varRes29_3="selected";
			}	elseif ($varRes29=="T203"){
							$varRes29_4="selected";
			}	elseif ($varRes29=="T204"){
							$varRes29_5="selected";
			}	elseif ($varRes29=="T205"){
							$varRes29_6="selected";
			}	elseif ($varRes29=="T206"){
							$varRes29_7="selected";
			}	elseif ($varRes29=="T207"){
							$varRes29_8="selected";
			}	elseif ($varRes29=="T208"){
							$varRes29_9="selected";
			}	elseif ($varRes29=="T301"){
							$varRes29_10="selected";
			}	else   					 {	
							$varRes29_0="selected";
			}
			
			if($varRes30=="T101"){
							$varRes30_1="selected";
			}	elseif ($varRes30=="T201"){
							$varRes30_2="selected";
			}	elseif ($varRes30=="T202"){
							$varRes30_3="selected";
			}	elseif ($varRes30=="T203"){
							$varRes30_4="selected";
			}	elseif ($varRes30=="T204"){
							$varRes30_5="selected";
			}	elseif ($varRes30=="T205"){
							$varRes30_6="selected";
			}	elseif ($varRes30=="T206"){
							$varRes30_7="selected";
			}	elseif ($varRes30=="T207"){
							$varRes30_8="selected";
			}	elseif ($varRes30=="T208"){
							$varRes30_9="selected";
			}	elseif ($varRes30=="T301"){
							$varRes30_10="selected";
			}	else   					 {	
							$varRes30_0="selected";
			}
			
			if($varRes31=="T101"){
							$varRes31_1="selected";
			}	elseif ($varRes31=="T201"){
							$varRes31_2="selected";
			}	elseif ($varRes31=="T202"){
							$varRes31_3="selected";
			}	elseif ($varRes31=="T203"){
							$varRes31_4="selected";
			}	elseif ($varRes31=="T204"){
							$varRes31_5="selected";
			}	elseif ($varRes31=="T205"){
							$varRes31_6="selected";
			}	elseif ($varRes31=="T206"){
							$varRes31_7="selected";
			}	elseif ($varRes31=="T207"){
							$varRes31_8="selected";
			}	elseif ($varRes31=="T208"){
							$varRes31_9="selected";
			}	elseif ($varRes31=="T301"){
							$varRes31_10="selected";
			}	else   					 {	
							$varRes31_0="selected";
			}
			
			if($varRes32=="T101"){
							$varRes32_1="selected";
			}	elseif ($varRes32=="T201"){
							$varRes32_2="selected";
			}	elseif ($varRes32=="T202"){
							$varRes32_3="selected";
			}	elseif ($varRes32=="T203"){
							$varRes32_4="selected";
			}	elseif ($varRes32=="T204"){
							$varRes32_5="selected";
			}	elseif ($varRes32=="T205"){
							$varRes32_6="selected";
			}	elseif ($varRes32=="T206"){
							$varRes32_7="selected";
			}	elseif ($varRes32=="T207"){
							$varRes32_8="selected";
			}	elseif ($varRes32=="T208"){
							$varRes32_9="selected";
			}	elseif ($varRes32=="T301"){
							$varRes32_10="selected";
			}	else   					 {	
							$varRes32_0="selected";
			}
			
			if($varRes33=="T101"){
							$varRes33_1="selected";
			}	elseif ($varRes33=="T201"){
							$varRes33_2="selected";
			}	elseif ($varRes33=="T202"){
							$varRes33_3="selected";
			}	elseif ($varRes33=="T203"){
							$varRes33_4="selected";
			}	elseif ($varRes33=="T204"){
							$varRes33_5="selected";
			}	elseif ($varRes33=="T205"){
							$varRes33_6="selected";
			}	elseif ($varRes33=="T206"){
							$varRes33_7="selected";
			}	elseif ($varRes33=="T207"){
							$varRes33_8="selected";
			}	elseif ($varRes33=="T208"){
							$varRes33_9="selected";
			}	elseif ($varRes33=="T301"){
							$varRes33_10="selected";
			}	else   					 {	
							$varRes33_0="selected";
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
		    		
		$sql="update telefonos set 
		NUMTEL='$Cantel',
		TELEF01='$Tel1',
		RES01='$Res1',
		TELEF02='$Tel2',
		RES02='$Res2',
		TELEF03='$Tel3',
		RES03='$Res3',
		TELEF04='$Tel4',
		RES04='$Res4',
		TELEF05='$Tel5',
		RES05='$Res5',
		TELEF06='$Tel6',
		RES06='$Res6',
		TELEF07='$Tel7',
		RES07='$Res7',
		TELEF08='$Tel8',
		RES08='$Res8',
		TELEF09='$Tel9',
		RES09='$Res9',
		TELEF10='$Tel10',
		RES10='$Res10',
		TELEF11='$Tel11',
		RES11='$Res11',
		TELEF12='$Tel12',
		RES12='$Res12',
		TELEF13='$Tel13',
		RES13='$Res13',
		TELEF14='$Tel14',
		RES14='$Res14',
		TELEF15='$Tel15',
		RES15='$Res15',
		TELEF16='$Tel16',
		RES16='$Res16',
		TELEF17='$Tel17',
		RES17='$Res17',
		TELEF18='$Tel18',
		RES18='$Res18',
		TELEF19='$Tel19',
		RES19='$Res19',
		TELEF20='$Tel20',
		RES20='$Res20',
		TELEF21='$Tel21',
		RES21='$Res21',
		TELEF22='$Tel22',
		RES22='$Res22',
		TELEF23='$Tel23',
		RES23='$Res23',
		TELEF24='$Tel24',
		RES24='$Res24',
		TELEF25='$Tel25',
		RES25='$Res25',
		TELEF26='$Tel26',
		RES26='$Res26',
		TELEF27='$Tel27',
		RES27='$Res27',
		TELEF28='$Tel28',
		RES28='$Res28',
		TELEF29='$Tel29',
		RES29='$Res29',
		TELEF30='$Tel30',
		RES30='$Res30',
		TELEF31='$Tel31',
		RES31='$Res31',
		TELEF32='$Tel32',
		RES32='$Res32',
		TELEF33='$Tel33',
		RES33='$Res33'
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
									echo "BASE DE DATOS TELEFONOS DE PRIMA";
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
  <input class="form-control" type="text" name="Dni" value="<?php echo $varDni?>" />
  </div>
  <div class="col-sm-1">
  <input type="submit" class="btn btn-primary" name="boton"  value="Buscar"  />
  </div>
  
  <div class="col-sm-1">
  <input type="submit" class="btn btn-primary" name="boton" value="Actualizar" />
  </div>

</div> 

<div class="form-group">  
	<label for="inputEmail3" class="col-sm-2 control-label">CANTIDAD TELEFONOS:</label>
    <div class="col-sm-2">
	<input readonly="readonly" class="form-control" type="text" name="Cantel" value="<?php echo $varCantel?>" />
	</div>
	
</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 01:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel1" value="<?php echo $varTel1?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res1" >
<option value="0" <?php echo $varRes1_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes1_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes1_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes1_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes1_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes1_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes1_6?> >No contestan</option>
<option value="T206" <?php echo $varRes1_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes1_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes1_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes1_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 02:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel2" value="<?php echo $varTel2?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res2" >
<option value="0" <?php echo $varRes2_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes2_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes2_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes2_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes2_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes2_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes2_6?> >No contestan</option>
<option value="T206" <?php echo $varRes2_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes2_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes2_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes2_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 03:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel3" value="<?php echo $varTel3?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res3" >
<option value="0" <?php echo $varRes3_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes3_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes3_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes3_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes3_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes3_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes3_6?> >No contestan</option>
<option value="T206" <?php echo $varRes3_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes3_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes3_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes3_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 04:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel4" value="<?php echo $varTel4?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res4" >
<option value="0" <?php echo $varRes4_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes4_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes4_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes4_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes4_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes4_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes4_6?> >No contestan</option>
<option value="T206" <?php echo $varRes4_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes4_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes4_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes4_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 05:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel5" value="<?php echo $varTel5?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res5" >
<option value="0" <?php echo $varRes5_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes5_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes5_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes5_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes5_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes5_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes5_6?> >No contestan</option>
<option value="T206" <?php echo $varRes5_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes5_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes5_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes5_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 06:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel6" value="<?php echo $varTel6?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res6" >
<option value="0" <?php echo $varRes6_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes6_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes6_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes6_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes6_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes6_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes6_6?> >No contestan</option>
<option value="T206" <?php echo $varRes6_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes6_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes6_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes6_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 07:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel7" value="<?php echo $varTel7?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res7" >
<option value="0" <?php echo $varRes7_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes7_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes7_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes7_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes7_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes7_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes7_6?> >No contestan</option>
<option value="T206" <?php echo $varRes7_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes7_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes7_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes7_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 08:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel8" value="<?php echo $varTel8?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res8" >
<option value="0" <?php echo $varRes8_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes8_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes8_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes8_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes8_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes8_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes8_6?> >No contestan</option>
<option value="T206" <?php echo $varRes8_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes8_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes8_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes8_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 09:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel9" value="<?php echo $varTel9?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res9" >
<option value="0" <?php echo $varRes9_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes9_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes9_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes9_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes9_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes9_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes9_6?> >No contestan</option>
<option value="T206" <?php echo $varRes9_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes9_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes9_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes9_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 10:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel10" value="<?php echo $varTel10?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res10" >
<option value="0" <?php echo $varRes10_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes10_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes10_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes10_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes10_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes10_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes10_6?> >No contestan</option>
<option value="T206" <?php echo $varRes10_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes10_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes10_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes10_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 11:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel11" value="<?php echo $varTel11?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res11" >
<option value="0" <?php echo $varRes11_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes11_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes11_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes11_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes11_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes11_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes11_6?> >No contestan</option>
<option value="T206" <?php echo $varRes11_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes11_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes11_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes11_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 12:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel12" value="<?php echo $varTel12?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res12" >
<option value="0" <?php echo $varRes12_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes12_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes12_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes12_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes12_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes12_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes12_6?> >No contestan</option>
<option value="T206" <?php echo $varRes12_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes12_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes12_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes12_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 13:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel13" value="<?php echo $varTel13?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res13" >
<option value="0" <?php echo $varRes13_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes13_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes13_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes13_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes13_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes13_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes13_6?> >No contestan</option>
<option value="T206" <?php echo $varRes13_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes13_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes13_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes13_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 14:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel14" value="<?php echo $varTel14?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res14" >
<option value="0" <?php echo $varRes14_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes14_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes14_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes14_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes14_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes14_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes14_6?> >No contestan</option>
<option value="T206" <?php echo $varRes14_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes14_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes14_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes14_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 15:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel15" value="<?php echo $varTel15?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res15" >
<option value="0" <?php echo $varRes15_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes15_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes15_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes15_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes15_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes15_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes15_6?> >No contestan</option>
<option value="T206" <?php echo $varRes15_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes15_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes15_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes15_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 16:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel16" value="<?php echo $varTel16?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res16" >
<option value="0" <?php echo $varRes16_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes16_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes16_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes16_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes16_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes16_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes16_6?> >No contestan</option>
<option value="T206" <?php echo $varRes16_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes16_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes16_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes16_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 17:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel17" value="<?php echo $varTel17?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res17" >
<option value="0" <?php echo $varRes17_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes17_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes17_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes17_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes17_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes17_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes17_6?> >No contestan</option>
<option value="T206" <?php echo $varRes17_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes17_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes17_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes17_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 18:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel18" value="<?php echo $varTel18?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res18" >
<option value="0" <?php echo $varRes18_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes18_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes18_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes18_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes18_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes18_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes18_6?> >No contestan</option>
<option value="T206" <?php echo $varRes18_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes18_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes18_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes18_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 19:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel19" value="<?php echo $varTel19?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res19" >
<option value="0" <?php echo $varRes19_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes19_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes19_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes19_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes19_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes19_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes19_6?> >No contestan</option>
<option value="T206" <?php echo $varRes19_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes19_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes19_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes19_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 20:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel20" value="<?php echo $varTel20?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res20" >
<option value="0" <?php echo $varRes20_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes20_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes20_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes20_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes20_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes20_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes20_6?> >No contestan</option>
<option value="T206" <?php echo $varRes20_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes20_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes20_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes20_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 21:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel21" value="<?php echo $varTel21?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res21" >
<option value="0" <?php echo $varRes21_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes21_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes21_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes21_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes21_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes21_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes21_6?> >No contestan</option>
<option value="T206" <?php echo $varRes21_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes21_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes21_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes21_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 22:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel22" value="<?php echo $varTel22?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res22" >
<option value="0" <?php echo $varRes22_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes22_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes22_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes22_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes22_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes22_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes22_6?> >No contestan</option>
<option value="T206" <?php echo $varRes22_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes22_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes22_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes22_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 23:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel23" value="<?php echo $varTel23?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res23" >
<option value="0" <?php echo $varRes23_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes23_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes23_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes23_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes23_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes23_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes23_6?> >No contestan</option>
<option value="T206" <?php echo $varRes23_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes23_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes23_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes23_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 24:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel24" value="<?php echo $varTel24?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res24" >
<option value="0" <?php echo $varRes24_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes24_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes24_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes24_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes24_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes24_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes24_6?> >No contestan</option>
<option value="T206" <?php echo $varRes24_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes24_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes24_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes24_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 25:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel25" value="<?php echo $varTel25?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res25" >
<option value="0" <?php echo $varRes25_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes25_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes25_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes25_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes25_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes25_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes25_6?> >No contestan</option>
<option value="T206" <?php echo $varRes25_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes25_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes25_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes25_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 26:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel26" value="<?php echo $varTel26?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res26" >
<option value="0" <?php echo $varRes26_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes26_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes26_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes26_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes26_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes26_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes26_6?> >No contestan</option>
<option value="T206" <?php echo $varRes26_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes26_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes26_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes26_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 27:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel27" value="<?php echo $varTel27?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res27" >
<option value="0" <?php echo $varRes27_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes27_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes27_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes27_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes27_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes27_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes27_6?> >No contestan</option>
<option value="T206" <?php echo $varRes27_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes27_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes27_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes27_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 28:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel28" value="<?php echo $varTel28?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res28" >
<option value="0" <?php echo $varRes28_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes28_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes28_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes28_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes28_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes28_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes28_6?> >No contestan</option>
<option value="T206" <?php echo $varRes28_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes28_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes28_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes28_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 29:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel29" value="<?php echo $varTel29?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res29" >
<option value="0" <?php echo $varRes29_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes29_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes29_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes29_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes29_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes29_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes29_6?> >No contestan</option>
<option value="T206" <?php echo $varRes29_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes29_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes29_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes29_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 30:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel30" value="<?php echo $varTel30?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res30" >
<option value="0" <?php echo $varRes30_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes30_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes30_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes30_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes30_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes30_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes30_6?> >No contestan</option>
<option value="T206" <?php echo $varRes30_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes30_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes30_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes30_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div>

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 31:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel31" value="<?php echo $varTel31?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res31" >
<option value="0" <?php echo $varRes31_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes31_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes31_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes31_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes31_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes31_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes31_6?> >No contestan</option>
<option value="T206" <?php echo $varRes31_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes31_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes31_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes31_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 32:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel32" value="<?php echo $varTel32?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res32" >
<option value="0" <?php echo $varRes32_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes32_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes32_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes32_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes32_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes32_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes32_6?> >No contestan</option>
<option value="T206" <?php echo $varRes32_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes32_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes32_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes32_10?> >Si dan razón de afiliado</option>
</select>
</div>

</div> 

<div class="form-group">

<label for="inputEmail3" class="col-sm-2 control-label">TELEFONO 33:</label>
<div class="col-sm-2">
<input readonly="readonly" class="form-control" type="text" name="Tel33" value="<?php echo $varTel33?>" />
</div>

<label for="inputEmail3" class="col-sm-2 control-label">TIPIFICACION:</label>
<div class="col-sm-3">
<select class="form-control" name="Res33" >
<option value="0" <?php echo $varRes33_0?> >SELECCIONAR</option>
<option value="T101" <?php echo $varRes33_1?> >No se ha intentado aún</option>
<option value="T201" <?php echo $varRes33_2?> >Teléfono erróneo</option>
<option value="T202" <?php echo $varRes33_3?> >Teléfono no existe</option>
<option value="T203" <?php echo $varRes33_4?> >Teléfono fuera de servicio</option>
<option value="T204" <?php echo $varRes33_5?> >Ocupado</option>
<option value="T205" <?php echo $varRes33_6?> >No contestan</option>
<option value="T206" <?php echo $varRes33_7?> >Contestadora Automática</option>
<option value="T207" <?php echo $varRes33_8?> >Teléfono equivocado</option>
<option value="T208" <?php echo $varRes33_9?> >Ya no vive o labora aquí</option>
<option value="T301" <?php echo $varRes33_10?> >Si dan razón de afiliado</option>
</select>
</div>

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

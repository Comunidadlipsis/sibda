<?php
$Con=mysql_connect("localhost","sistemas","")or die("Error en Conexion");
$BD=mysql_select_db("sibda")or die("Error al Conectar la BD");
return($Con);
return($BD);
?>
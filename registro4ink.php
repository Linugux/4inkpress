<?php
require('../conexion.php');

$usuario=$_POST['usuario'];
$mensaje=$_POST['mensaje'];
$email=$_POST['email'];
$email1="4inkpress@gmail.com"

if($usuario=='') $usuario='anonimo';
if($email=='') $email='@email';
if($mensaje=='') $mensaje='ningun mensaje';

$query = "INSERT INTO mensajes4ink ( fecha, usuario, mensaje, email) VALUES (NOW(),'$usuario','$mensaje','$email')";

mysql_query($query);
//header ("Location: /Aregistro.php");

//mail("linugux@gmail.com","4inkpress.ddns.net Mensaje desde *** Linugux Inx. ***");
//mail($email1,"Tienes un Mensajes *** 4inkpres.ddns.net ***");

//eliminando registros si estos superarn los 10
//$max=10;
//$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM chat1",$con));
//if($NroRegistros>$max){
//	$NroAEliminar=$NroRegistros-$max;
//	mysql_query("DELETE FROM chat ORDER BY fecha ASC LIMIT $NroAEliminar");
//}
?>

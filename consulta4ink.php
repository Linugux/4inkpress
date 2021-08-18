<?php
require("../conexion.php");

$UltFecha=$_GET['ultfec'];
if($UltFecha=='undefined'){
	$query = "SELECT * FROM mensajes4ink ORDER BY fecha ASC";
}else{
	$query = "SELECT * FROM mensajes4ink WHERE fecha>'$UltFecha' ORDER BY fecha ASC limit 0,20";
}
$lista = mysql_query($query,$con);
$i=1;

// no cargar de la cache del navegador.
header( "Expires: Mon, 26 Jul 1997 05:00:00 GMT" ); 
header( "Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header( "Cache-Control: no-cache, must-revalidate" ); 
header( "Pragma: no-cache" );
header('Content-type: text/xml; charset=UTF-8', true);
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<xml>";
while($row = mysql_fetch_array($lista)){
  echo "<elemento> \n";
  echo "	<fecha>".$row['fecha']."</fecha> \n";
  echo "	<usuario>".$row['usuario']."</usuario> \n";
  echo "	<mensaje>".$row['mensaje']."</mensaje> \n";
  echo "        <email>".$row['email']."</email> \n";
  echo "</elemento> \n";
  $i++;
}
echo "</xml>";
?>

<?php
require_once("conexion.php");
conectar();
$sqlCategorias = "select * from tipo_unidades where id_tipo='".$_POST['tipoUnidad']."'";
$TsqlCategorias = mysql_query($sqlCategorias) or die("Hubo un error, el error fue: ".mysql_error());
$NoTsqlCategorias = mysql_num_rows($TsqlCategorias); 
$xmlData = "<?xml version='1.0' encoding='UTF-8'?><unidades>";

for ($i=0; $i <$NoTsqlCategorias ; $i++) { 
	$RTsqlCategorias = mysql_fetch_assoc($TsqlCategorias);
	$xmlData = $xmlData."<unidad><id>".$RTsqlCategorias['id_tipo']."</id>
	<recamaras>".$RTsqlCategorias['recamaras']."</recamaras>
	<bano>".$RTsqlCategorias['bano']."</bano>
	<superficie>".$RTsqlCategorias['superficie']."</superficie>
	</unidad>";	
}

$xmlData = $xmlData."</unidades>";
print_r($xmlData);
?>



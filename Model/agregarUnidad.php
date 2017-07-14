<?php
require_once('./conexion.php');
conectar();


$sqlInsertar = "INSERT INTO UNIDADES(nivel,tipo,recamaras,bano,superficie) VALUES ('".$_POST["nivel"] . "','".$_POST["tipoUnidad"]."','".$_POST['recamaras']."','".$_POST['banos']."','".$_POST['superficie']."')";
mysql_query($sqlInsertar) or die ("Error en : ".mysql_error());

header('../View/formularioAgregar.html');



?>
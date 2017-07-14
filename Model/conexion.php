<?php
	function conectar( )
	{
		if( !$link = mysql_connect("localhost:3306","root","") )
		{
			echo "Error al conectar a la base de datos";
			exit( );
		}
	
		if( !mysql_select_db("bd_constructora",$link) )
		{
			echo "No existe la base de datos";
			exit( );
		}
	
	return $link;
}

conectar();
?>
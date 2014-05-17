<?php

function conectar(){
	$user="root";
	$pass="root";
	$server="localhost";
	$db="cybox";
	$con=mysql_connect($server,$user,$pass) or die("error al conectar con la base de datos");
	mysql_select_db($db,$con);
	return $con;

}

?>
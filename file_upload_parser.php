<?php

$fileName = $_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
$descripcion=$_POST["descripcion"];
$directorio="archivos/"."$fileName";
$nombre=$fileName;

function conectarse(){

  if (!($link=mysql_connect('localhost','root','root'))) {
    echo "Error conectando a la base de datos";
    exit();
  }
  if(!mysql_select_db("cybox",$link)){
    echo "Error seleccionando la base de datos";
    exit();
  }
  return $link;
}

if (!$fileTmpLoc) { 
    echo "ERROR, no se ha elegido ningun archivo";
    exit();
}
if(move_uploaded_file($fileTmpLoc,"archivos/$fileName")){
	echo "llego correctamente";
}
else{
	echo "no llego correctamente";
}
$con=conectarse();
$query="INSERT INTO archivo(nombre,descripcion,tamanio,tipo,directorio) VALUES ('$nombre','$descripcion','$fileSize','$fileType','$directorio')";
$q=mysql_query($query,$con);

/*if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}*/

mysql_close($con);
?>
<?php
include("conexion.php");
$titulo=$_POST['titulo'];
$sql="DELETE FROM biblioteca WHERE titulo='$titulo'"; /* campo de la base- variable del html*/
$consulta=mysqli_query($conexion,$sql);
if($consulta){
	header("Location: exitoborrado.html");
    exit();
}else{
	echo "algo salio mal";
}
?>
<?php
include("conexion.php");
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$codigo=$_POST['codigo'];
$estado = isset($_POST['estado']) && $_POST['estado'] === 'on' ? 'true' : 'false';
$sql="INSERT INTO biblioteca (titulo, autor, codigo, estado) values ('$titulo','$autor','$codigo', $estado)";
$consulta= mysqli_query($conexion,$sql);
if($consulta){
	header("Location: exito.html");
    exit();
}else{
	echo "algo salio mal";
}
?>  
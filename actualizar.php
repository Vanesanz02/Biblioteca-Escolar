<?php
include("conexion.php");
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$codigo=$_POST['codigo'];
// Verificamos si la casilla está marcada
if (isset($_POST['estado'])) {
    // Si está marcada, establecemos el valor de 'estado' a 1
    $estado = '1';
} else {
    // Si no está marcada, establecemos el valor de 'estado' a 0
    $estado = '0';
}
$sql="UPDATE biblioteca SET  titulo='$titulo', autor='$autor', codigo='$codigo', estado='$estado' WHERE titulo='$titulo'";
$consulta= mysqli_query($conexion,$sql);
if($consulta){
	header("Location: exito.html");
    exit();
}else{
	echo "algo salio mal";
}
?>
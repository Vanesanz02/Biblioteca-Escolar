<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
$sql="SELECT * from login WHERE usuario='$usuario' and psw='$psw'";
$consulta=mysqli_query($conexion,$sql);
$existe=mysqli_num_rows($consulta);
if($existe==1){
    header("location:admin.html");
}else{
    header("location:restringido.php");
}
?>
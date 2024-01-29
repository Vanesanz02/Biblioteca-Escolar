<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
include("conexion.php");
$sql="SELECT  * from biblioteca";
$consulta=mysqli_query($conexion,$sql);
echo "<table border=1>";
while($registro=mysqli_fetch_row($consulta)){
    echo "<tr>";
    foreach($registro as $dato){
    echo"<td>".$dato."</td>";
}
echo "</tr>";
}
echo "</table>";
?>
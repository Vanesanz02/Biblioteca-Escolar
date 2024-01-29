<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Biblioteca Escolar</title>
 <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<main>
    <section class="biblio bg-info text-dark text-center py-5">
      <div class="container">
        <h2>Resultado de la búsqueda</h2>
<?php
include ("conexion.php");
$buscar=$_POST['buscar'];
$sql="SELECT titulo, autor, estado FROM biblioteca WHERE titulo LIKE '%$buscar'";
/* estoy buscando lo que empieza por*/
$consulta=mysqli_query($conexion,$sql);
echo "<table border=1 align='center'>";
echo "<tr><th>Nombre del Libro</th><th>Autor</th><th>Estado</th></tr>";
while ($registro = mysqli_fetch_assoc($consulta)) {
    echo "<tr style='margin-bottom: 20px;'>";
    echo "<td>" . $registro['titulo'] . "</td>";
    echo "<td>" . $registro['autor'] . "</td>";
    echo "<td>" . ($registro['estado'] ? 'Prestado' : 'Disponible') . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "<div style='text-align: center; margin-top: 20px;'>";
echo "<a class='btn btn-primary' href='busqueda.html'>Volver a Búsqueda</a>";
echo "</div>";
?>
</section>
</div>
  </main>
</HTML>


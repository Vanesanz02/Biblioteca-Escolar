
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
<body>
<section class="biblio bg-info text-dark text-center py-5">
      <div class="container">
        <h2>Inicio administrador de la base de datos</h2>
<form action= "logueado.php" method= "post">
    Usuario<input type="text" name="usuario" />
    <br>
    Contraseña <input type="password" name="psw"/>
    <input type= "submit" value="enviar">
</form>
</section>
</body>
</html>
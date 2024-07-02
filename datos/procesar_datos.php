<?php
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $correo = $_POST['correo'];
     $listado = $_POST['consulta'];
     $mensaje = $_POST['mensaje'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda :: Mensaje enviado</title>

    <style>
          body {
              font-family: Arial, Helvetica, sans-serif;
              background-color: #c4f3f3;
              text-align: center;  
          }  

          h1 {
            color: #FDB0C0;
          }

          h2 {
            color: #FDB0C0;
          }

          p{
            color: #FDB0C0;
          }
          h3{
            color: #FDB0C0;
          }
    </style>
</head>
<body>
    
     <h1>¡Tu Consulta fue enviada con éxito!</h1>
     <h2>Resumen de la consulta</h2>
     <p>Nombre : <?= $nombre ?></p>
     <p>Apellido :<?= $apellido ?> </p>
     <p>Email: <?= $correo ?></p>

     <h3>Tipo de Consulta</h3>
     <?php 
        foreach ($listado as  $value) {
            echo "<p> $value</p>";
        }
      ?>

      <h3>Mensaje</h3>
      <p class="mb-3"><?= $mensaje ?></p>
      <img width="750px" src="../img/graciastransparente.png" alt="consul gracias">
</body>
</html>
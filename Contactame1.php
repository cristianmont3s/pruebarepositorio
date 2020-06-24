<?php
        include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <title>Formulario de Contacto </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contactame.css" rel="stylesheet">
  </head>

  <body>
<section>
        <div id="contieneformulario">
     <form  action="conexion.php" method="POST">
        <h2>Formulario de contacto</h2>
        <input type="text" placeholder="Nombre" name="nombre" class="form-control">
        <input type="text" placeholder="Email" name="email" class="form-control">
        <input type="text" placeholder="Asunto" name="Asunto" class="form-control">   
        <textarea  class="form-control area-largo" placeholder="Mensaje" name="mensaje"></textarea>
        <input type="button" value="ENVIAR" id="boton">
         
    </form>
    </div>
    </section>

  </body>
</html>
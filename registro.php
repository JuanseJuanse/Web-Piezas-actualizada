<?php
//index.php
include 'connect.php'; //realizamos la coneccion con la base de datos
include 'cabeza.php';
?>
<div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.php">Inicio</a></li>
          <li class="active"><a href="formulario.php">Ingresar datos</a></li>
          <li><a href="lista.php">Ver lugares disponibles</a></li>
        </ul>
        <h3 class="text-muted">Busca tu pieza YA</h3>
      </div>
<?php

//se pasan las variables y se insertan en la base de datos
$direccion =$_POST["direccion"];
$precio = $_POST["precio"];
$ciudad = $_POST["ciudad"];
$provincia = $_POST["provincia"];
$categoria = $_POST["categoria"];
if(isset($_POST))
{
$insert = "INSERT INTO piezas (direccion,precio,ciudad,provincia,categoria) 
VALUES('$direccion','$precio','$ciudad','$provincia','$categoria')";}

mysql_query($insert); //guardamos los datos en base de datos
?>
<div class="jumbotron">
        <h1>Gracias</h1>
        <p class="lead">Tu carga se realizo con exito.</p>
</div>
<?php
mysql_close($conexion); //cerramos coneccion con la base de datos
include 'pie.php'; //pie de pagina
?>
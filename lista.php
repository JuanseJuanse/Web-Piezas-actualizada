<?php
include 'cabeza.php';
?>
 <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="formulario.php">Ingresar datos</a></li>
          <li class="active"><a href="lista.php">Ver lugares disponibles</a></li>
             </ul>
        <h3 class="text-muted">Busca tu pieza YA</h3>
      </div>
<?php 
$con=mysqli_connect("localhost","userpiezas","juanse","pieza");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM piezas");

echo "<table border='1'>
<tr>
<th>Direccion</th>
<th>Precio</th>
<th>Ciudad</th>
<th>Provincia</th>
<th>Categoria</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['direccion'] . "</td>";
  echo "<td>" . $row['precio'] . "</td>";
  echo "<td>" . $row['ciudad'] . "</td>";
  echo "<td>" . $row['provincia'] . "</td>";
  echo "<td>" . $row['categoria'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
include 'pie.php';
?>



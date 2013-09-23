<?php
include 'cabeza.php'; //encabezado
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
      
      <form method="POST" action="registro.php"> 
        <form class="form-signin">
           <h2 class="form-signin-heading">Ingrese datos</h2>
      
           <div class="row">
      		  <div class="col-md-7 col-md-offset-2">
      
              <label>Direccion:</label>
              <input class="form-control" name="direccion" autofocus="" type="text"/>
              <label>Precio:</label>
              <input class="form-control" name="precio" autofocus="" type="text"/>
              <label>Ciudad:</label>
              <input class="form-control" name="ciudad" autofocus="" type="text"/>
              <label>Provincia:</label>
              <input class="form-control" name="provincia" autofocus="" type="text"/>
              <label>Categoria:</label>
              <input class="form-control" name="categoria" autofocus="" type="text"/>
              <label class="checkbox"></label>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>
          	  <button class="btn btn-lg btn-primary btn-block" type="reset">Cancelar</button>
          	  <label class="checkbox"></label>
          	  
          	  </div>
           </div>
        </form>
   	  </form>
  </div>

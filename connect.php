<?php  
//connect.php 

//coneccion con base de datos
$server = 'localhost';     //servidor
$username = 'userpiezas'; //nombre de usuario
$password = 'juanse';    //clave de usuario
$database = 'pieza';    //nombre de la base de datos

//Realizamos la coneccion con el servidor, en caso de tener algun parametro mal
//visualiza que no pudimos establecer la coneccion con la base de datos

if(!mysql_connect($server, $username, $password))
{
	exit('Error: No se pudo establecer la coneccion con la base de datos');
}

//Seleccionamos la base de datos

if(!mysql_select_db($database))
{
	exit('Error: No se pudo seleccionar la base de datos');
}
?>

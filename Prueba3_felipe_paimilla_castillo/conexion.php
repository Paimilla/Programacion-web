<?php
$servername = "localhost";
$nombre_usuario = "root";
$password = "";
$nombre_bd = "felipe_paimilla_castillo";
// Create connection
$conn = mysqli_connect($servername, $nombre_usuario, $password,$nombre_bd);

// Check connection
if (!$conn) {
  die("Error en la conexion: " . mysqli_connect_error());
}
//echo "conexión establecida";
?>
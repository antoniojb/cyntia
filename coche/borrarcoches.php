<head>
<title>Creacion de un portal PHP y MySQL</title>
</head>
<body bgcolor ="#303030">
<body text ="#E5E5E5">
<font face ="tahoma">
<font size ="2">
<body link ="#E5E5E5" vlink="E0E0E0">
<p align ="center">
<h2>BORRAR VEHICULOS</h2>
<?php

$id = $_GET['id'];
include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

if (mysqli_connect_errno()){
    printf("Fallo la conexion: %s\n", mysqli_connect_error());
    exit();
}
$eliminar = mysqli_query($conexion, "DELETE FROM ocasion
where id='$id'");
?>
<a href="http://localhost/coche/formbusqueda.html">Volver
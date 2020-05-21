<?php

$id = $_GET["id"];
include 'conexion.php';

$conexion=mysqli_connect($host_db, $user_db, $pass_db, $db_name);

if(mysqli_connect_errno()){
    printf("Fallo la conexion: %s\n",mysqli_connect_error());
    exit();
}

$buscar= mysqli_query($conexion, "SELECT * FROM ocasion WHERE id=$id");

while($row = mysqli_fetch_array($buscar))
{
    $idb=$row["id"];
    $marcab=$row["marca"];
    $modelob=$row["modelo"];
    $combustibleb=$row["combustible"];
    $colorb=$row["color"];
    $preciob=$row["precio"];
    $fechab=$row["fecha"];
}
?>
<head>
<title>Creacion de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
<body text="#E5E5E5">
<font face="tahoma">
<font size="2">
<body link="E5E5E5" vlink="E0E0E0">
<p align="center">
<form name="form" method="post" action="modificarcoche2.php?id=$idb">
<strong>
<h2>MODIFIQUE LOS DATOS DEL VEHICULO</h2>
</strong>
<hr size="8" color="ffffff" width="100%" align="left">
<h5>Seleccione la marca de su vehiculo:
    <select name="marca" value="<?php echo $marcab;?>">
    <option value="alfaromeo">Alfa Romeo</option>
    <option value="audi">Audi</option> 
    <option value="bmw">BMW</option> 
    <option value="chrysler">Chrysler</option> 
    <option value="honda">Honda</option> 
    <option value="nissan">Nissan</option> 
    <option value="toyota">Toyota</option> 
    </select>
</br>
</h5> 
<h5>
Indique el modelo:
<input name="modelo" type="text" size="45" value="<?php echo $modelob; ?>">

</h5>
<h5>
Indique el color:
<input name="color" type="text" size="48" value="<?php echo $colorb; ?>">
</h5>
<h5>
Combustible:
<input name="combustible" type="radio" value="diesel" checked>Diesel
<input name="combustible" type="radio" value="gasolina" >Gasolina
</h5>
<h5>
Año de matriculacion:
<input name="fecha" type="text" size="10" value="<?php echo $fechab; ?>">
</h5>
<h5>
Precio:
<input name="precio" type="text" size="10" value="<?php echo $preciob;?>">
</h5>
<h5>
    <hr size="4" color="ffffff" width="100%" align="left">
    <input type="hidden" id="id" name="id" value="<?php echo $idb; ?>"/>
    <input name="Enviar" type="submit" value="Enviar">
</h5>
</form>
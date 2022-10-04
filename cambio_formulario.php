<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$pais = $_POST["pais"];
$noti = $_POST["noti"];

$texto = fopen("datosPerfil.txt", "w");
$nombre_comp = "$nombre|";
$apellidos_comp = "$apellidos|";
$correo_comp = "$correo|";
$pais_comp = "$pais|";
$noti_com = "$noti|";
fwrite($texto,$nombre_comp);
fwrite($texto,$apellidos_comp);
fwrite($texto,$correo_comp);
fwrite($texto,$pais_comp);
fwrite($texto,$noti_com);
fclose($texto);
header('Location: formulario.php');
?>
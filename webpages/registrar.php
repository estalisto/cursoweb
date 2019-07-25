<?php

include('conexion.php');

$usuario = $_POST["usuario"];
$nombres = $_POST["nombres"];
$correo = $_POST["correo"];
$contrasenia = md5($_POST["contrasenia"]);

$sql="INSERT INTO SGR_USUARIOS(IDUSUARIO,
USUARIO,
NOMBRES,
CORREO,
CONTRASENIA
)VALUES(SEQ_SGR_USUARIOS_IDUSUARIO.NEXTVAL,'$usuario','$nombres','$correo ','$contrasenia')";

$dbh = new PDOConnection();
$result=$dbh->insert($sql);


echo $result;




?>
<?php

require_once '../model/db.class.php';
require_once '../model/usuario.class.php';


$user = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["password"];



$usu=new Usuario();

$usu->actualizar($nombre,$apellidos,$user,$email,$password);

?>
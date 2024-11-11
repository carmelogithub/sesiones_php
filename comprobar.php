<?php
session_start();
$usuario_correcto="admin";
$contrasena_correcta="admin";

$usuario=$_POST['username'];
$password=$_POST['password'];

if($usuario==$usuario_correcto && $password==$contrasena_correcta){
    $_SESSION['usuario']=$usuario;
    header('Location:bienvenida.php');
    //echo 'Sesión iniciada para ' . $_SESSION['usuario'];
}else{
    echo 'Usuario o contraseña incorrectos';
}
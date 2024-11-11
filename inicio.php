<?php
session_start();
$_SESSION['usuario'] = 'laura';
echo 'Sesión iniciada para ' . $_SESSION['usuario'];
unset($_SESSION['usuario']);//elimina la variable de sesión
echo 'Sesión iniciada para ' . $_SESSION['usuario'];
session_destroy();//destruye la sesión
$_SESSION['ciudad'] = 'madrid';
echo 'Sesión iniciada para ' . $_SESSION['ciudad'];
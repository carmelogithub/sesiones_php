<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </body>
    <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>
</html>
<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Escolha qual comando ver</h2>
    <a href="ip.php">IP</a>
    <a href="dir.php">Diretorios</a>
    <a href="system.php">Configurações de sistema</a>
</body>
</html>
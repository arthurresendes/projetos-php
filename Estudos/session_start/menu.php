<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header('location: login.php');
        exit();
    }

    $VAR = shell_exec('ipconfig');
    echo "<h2> Seu ip: </h2>";
    echo "<pre>$VAR</pre>";
    echo "<br><br>";
    
    $VAR2 = shell_exec('dir');
    echo "<h2> Seus diretorios: </h2>";
    echo "<pre>$VAR2</pre>";
    echo "<br><br>";

    $VAR3 = shell_exec('systeminfo');
    echo "<h2>Informações de sistema: </h2>";
    echo "<pre>$VAR3</pre>";

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
    <a href="system">Configurações de sistema</a>
</body>
</html>
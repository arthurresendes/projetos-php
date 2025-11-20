<?php
    session_start();
    $NOME= $_POST['nm'];
    $SENHA = $_POST['se'];
    if($NOME == 'Arthur' && $SENHA == '123'){
        $_SESSION['logado'] = true;
        header('location: menu.php');
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
    <form action="login.php" method="post">
        <label for="nm">Name: </label>
        <input type="text" name="nm" id="nm">
        <label for="se">Senha: </label>
        <input type="password" name="se" id="se">
        <br><br>
        <input type="submit" value="Validar">
    </form>
</body>
</html>
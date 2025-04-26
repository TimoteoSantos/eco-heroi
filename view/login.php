<?php
session_start();



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

<link rel="stylesheet" href="css.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Você pode adicionar um CSS aqui -->



    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<div class="login">
<h1>Entrar no Eco-Herói</h1>

<form action="../model/logar.php" method="post">
    <label for="nome">Nome de usuário:</label><br>
    <input  class="form-control" type="text" id="nome" name="usuario" required><br><br>

    <label for="senha">Senha:</label><br>
    <input  class="form-control" type="password" id="senha" name="senha" required><br><br>

    <input class="btn btn-warning largura" type="submit" value="Entrar">
</form>


</div>



</body>
</html>

<?php
session_start();

require_once '../model/Jogada.php';
require_once '../model/conexao.php';
// Execução do jogo
$conexao = new Conexao();
$jogo = new Jogada($conexao->getPdo());
$jogo->processarJogada();
?>


<!-- Interface HTML -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ECO-HERÓI</title>
</head>
<body>
<h1>ECO-HERÓI</h1>
<?php $jogo->exibirEstado(); ?>
<form method="POST">
    <label>Digite uma letra: <input type="text" name="letra" maxlength="1"></label>
    <button type="submit">Enviar Letra</button>
</form>
<form method="POST">
    <label>Ou tente a palavra completa: <input type="text" name="palavra"></label>
    <button type="submit">Enviar Palavra</button>
</form>
</body>
</html>

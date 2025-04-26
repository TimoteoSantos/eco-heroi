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
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>ECO-HERÓI</title>
</head>
<body>

<h1 class="titulo">ECO-HERÓI</h1>
<?php //$jogo->exibirEstado(); 

$vidasAtuais =  $_SESSION['vidas'];

/*
echo "<h2>Pergunta: " . ($_SESSION['pergunta'] ?? '') . "</h2>";
echo "<h3>Palavra: " . ($_SESSION['palavra_exibida'] ?? '') . "</h3>";
echo "<p>Vidas restantes: " . ($_SESSION['vidas'] ?? '') . "</p>";
echo "<p>Letras tentadas: " . implode(", ", $_SESSION['letras_tentadas'] ?? []) . "</p>";
*/
?>

</body>
</html>

<div class="corpo">

<div class="arvore">
    <?php
switch ($vidasAtuais) {
    case 10: echo '<img src="img/vida10.png" alt="" width="250px">'; break;
    case 9: echo '<img src="img/vida09.png" alt="" width="250px">'; break;
    case 8: echo '<img src="img/vida08.png" alt="" width="250px">'; break;
    case 7: echo '<img src="img/vida07.png" alt="" width="250px">'; break;
    case 6: echo '<img src="img/vida06.png" alt="" width="250px">'; break;
    case 5: echo '<img src="img/vida05.png" alt="" width="250px">'; break;
    case 4: echo '<img src="img/vida04.png" alt="" width="250px">'; break;
    case 3: echo '<img src="img/vida03.png" alt="" width="250px">'; break;
    case 2: echo '<img src="img/vida02.png" alt="" width="250px">'; break;
    case 1: echo '<img src="img/vida01.png" alt="" width="250px">'; break;
    case 0: echo '<img src="img/vida0.png" alt="" width="250px">'; break;
}
?>

</div>

<div class="pergunta">

<div class="pergunta2">
<?php
echo "<h4>" . ($_SESSION['pergunta'] ?? '') . "</h4>";
?>
</div>

<div class="palavra">

<?php
echo "<h2>" . ($_SESSION['palavra_exibida'] ?? '') . "</h2>";
?>


</div>

<div class="informacao">
    
<?php
echo  "Vidas restantes: " . ($_SESSION['vidas'] ?? '') . "<br>";

echo "<p>Letras tentadas: " . implode(", ", $_SESSION['letras_tentadas'] ?? []) . "</p>";
?>

</div>


</div>

<div class="resposta">

<form method="POST">
    <label> <input class="largura2 form-control" type="text" name="letra" maxlength="1" placeholder="LETRA" autofocus=""></label>
    <button type="submit"  class="btn btn-success">Testar</button>
</form>

<p></p>
<form method="POST">
    <label> <input class="largura2 form-control" type="text" name="palavra" placeholder="PALAVRA"></label>
    <button type="submit"class="btn btn-success">Testar</button>
</form>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

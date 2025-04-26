

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">



<?php
session_start();
require_once '../model/conexao.php';
$conexao  = new conexao();
$pdo = $conexao->getPdo();


$usuario = $_SESSION['usuario'];
$vidas = $_SESSION['vidas'];

$sql = "INSERT INTO historico (vidas, usuario) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $vidas,
    $usuario
]);


echo "<div class='resumo'>";

echo "<div class='resumo2'> <a href='index.php' class='resumo2'> ECO-HERÓI </a> </div>";

echo "<table border='1' cellpadding='10' class='table'>";
echo "<tr><th>RESUMO</th><th>Valor</th></tr>";
echo "<tr><td>Você terminou o jogo com</td><td>" . $_SESSION['vidas'] . " vidas</td></tr>";
echo "<tr><td>A palavra era</td><td>" . $_SESSION['palavra'] . "</td></tr>";
echo "</table>";


unset($_SESSION['palavra']);
unset($_SESSION['palavra_exibida']);
unset($_SESSION['vidas']);
unset($_SESSION['letras_tentadas']);
unset($_SESSION['pergunta']);


?>
<a href='index.php' class=''> 

<button type="button" class="btn btn-warning largura espaco">Voltar ao início</button>

</a>
<p></p>
</div>
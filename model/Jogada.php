<?php

class Jogada {
private $pdo;
public $mensagem = "";

public function __construct($pdo) {
$this->pdo = $pdo;
$this->inicializarJogo();
}

private function inicializarJogo() {
if (!isset($_SESSION['palavra'])) {
$pergunta = $this->sortearPergunta();
$_SESSION['pergunta'] = $pergunta['pergunta'];
$_SESSION['palavra'] = strtoupper($pergunta['resposta']);
$_SESSION['palavra_exibida'] = str_repeat("_", strlen($_SESSION['palavra']));
$_SESSION['vidas'] = 10;
$_SESSION['letras_tentadas'] = [];
}
}

private function sortearPergunta() {
$stmt = $this->pdo->query("SELECT pergunta, resposta FROM pergunta ORDER BY RAND() LIMIT 1");
return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function processarJogada() {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (!empty($_POST['letra'])) {
$this->verificarLetra(strtoupper($_POST['letra']));
} elseif (!empty($_POST['palavra'])) {
$this->verificarPalavra(strtoupper(trim($_POST['palavra'])));
}
}
}

private function verificarLetra($letra) {
if (!preg_match('/^[A-Z]$/', $letra)) {
$this->mensagem = "Digite uma letra válida!";
return;
}

if (in_array($letra, $_SESSION['letras_tentadas'])) {
$this->mensagem = "Você já tentou essa letra!";
return;
}

$_SESSION['letras_tentadas'][] = $letra;
$acertou = false;
$nova_exibida = str_split($_SESSION['palavra_exibida']);

for ($i = 0; $i < strlen($_SESSION['palavra']); $i++) {
if ($_SESSION['palavra'][$i] === $letra) {
$nova_exibida[$i] = $letra;
$acertou = true;
}
}

$_SESSION['palavra_exibida'] = implode("", $nova_exibida);

if (!$acertou) {
$_SESSION['vidas']--;
}

$this->verificarEstadoJogo();
}

private function verificarPalavra($palavra_tentada) {
if ($palavra_tentada === $_SESSION['palavra']) {
$this->mensagem = "Parabéns! Você acertou!";
header('Location: resumo.php');

//session_unset();
} else {
$_SESSION['vidas']--;
$this->mensagem = "Palavra incorreta! Você perdeu uma vida.";

if ($_SESSION['vidas'] <= 0) {
$this->mensagem = "Você perdeu! A palavra era: " . $_SESSION['palavra'];
session_unset();
}
}
}

private function verificarEstadoJogo() {
if ($_SESSION['vidas'] <= 0) {
$this->mensagem = "Você perdeu! A palavra era: " . $_SESSION['palavra'];
session_unset();
} elseif (strpos($_SESSION['palavra_exibida'], "_") === false) {
$this->mensagem = "Parabéns! Você acertou!";
header('Location: resumo.php');
//session_unset();
}
}

public function exibirEstado() {
echo "<h2>Pergunta: " . ($_SESSION['pergunta'] ?? '') . "</h2>";
echo "<h3>Palavra: " . ($_SESSION['palavra_exibida'] ?? '') . "</h3>";
echo "<p>Vidas restantes: " . ($_SESSION['vidas'] ?? '') . "</p>";
echo "<p>Letras tentadas: " . implode(", ", $_SESSION['letras_tentadas'] ?? []) . "</p>";
if ($this->mensagem) echo "<p><strong>{$this->mensagem}</strong></p>";
}
}

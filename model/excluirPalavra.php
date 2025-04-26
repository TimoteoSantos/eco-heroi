<?php

require_once 'conexao.php';

$conexao  = new conexao();
$pdo = $conexao->getPdo();


$id = $_GET['idpalavra'];

$sql = "DELETE FROM pergunta WHERE idpergunta = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header('Location: ../view/gestorPalavras.php');
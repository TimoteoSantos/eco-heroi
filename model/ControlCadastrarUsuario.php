<?php

require_once 'conexao.php';
require_once 'DaoJogador.php';

$conexao  = new conexao();
$pdo = $conexao->getPdo();

//receber os usuarios
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$adm = $_POST['adm'];

$jogador = new DaoJogador($usuario, $senha,$adm);
$jogador->cadastrarUsuario($pdo);

header('Location: ../view/usuarios.php');
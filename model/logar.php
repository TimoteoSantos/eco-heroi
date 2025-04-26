<?php
session_start();
require_once 'DaoJogador.php';
require_once 'conexao.php';

$conexao  = new conexao();
$pdo = $conexao->getPdo();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$User = DaoJogador::BuscarUsuario($pdo,$usuario);

if($User){

foreach ($User as $user)

{
   if($user['senha'] == $senha )
   {


    $_SESSION["usuario"] = $user["usuario"];
    $_SESSION['tipouser'] = $user["adm"];
 
    header("Location: ../view/index.php");

   }else{

        header("Location: ../view/login.php");
   }

}

}else{

    header("Location: ../view/login.php");
}

echo $_SESSION['usuario'];
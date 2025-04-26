<?php

require_once '../model/DaoJogador.php';
require_once '../model/conexao.php';

$conexao  = new conexao();
$pdo = $conexao->getPdo();

$dados = DaoJogador::listarUsuarios($pdo);

if(isset($_GET['excluir']))
{
    DaoJogador::excluirUsuario($pdo, $_GET['excluir']);
    header('Location: usuarios.php');

}
?>

<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>

    <link rel="stylesheet" href="css.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">



</head>
<body>

<div class='corpo2'>

<h4> <a href="index.php" class="text-ligth"> HOME </a> </h4>


<h1>Cadastro de Usuário</h1>

<form action="../model/ControlCadastrarUsuario.php" method="post">
    <label for="usuario">Nome:</label><br>
    <input type="text" id="nome" name="usuario" required><br><br>

    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha" required><br><br>
    
    <p>
        <small>Usuário é administrador:</small>

    <input type="radio" value="sim" name="adm"> SIM |     <input type="radio" value="nao" name="adm">NAO
<p></p>

    <input type="submit" value="Cadastrar">
</form>

<hr>
<h2>Lista de Usuários</h2>

<table border="1" class="table">
    <thead>
    <tr>
        <th>Nome</th>
        <td align="center">Excluir</td>
    </tr>
    </thead>
    <tbody>
     
   
    <?php 

    foreach ($dados as $dado){ ?>




    <tr>
        <td><?php echo  $dado["usuario"]?></td>

        <td align="center">
            <a class="text-dark" href="usuarios.php?excluir=<?=$dado['id']?>">

            
            
			<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
		







            </a>

        </td>
    </tr>
   

    <?php
    }
    ?>



    </tbody>
</table>

</div>

</body>

</html>

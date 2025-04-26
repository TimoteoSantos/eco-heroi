<?php
session_start();
require_once '../model/conexao.php';
require_once  '../model/DaoJogador.php';
$conexao  = new conexao();
$pdo = $conexao->getPdo();
$dados = DaoJogador::historicoJogada($pdo,$_SESSION['usuario']);
?>
<link rel="stylesheet" href="css.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

<div class="historico2 ">

<h5>

<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018"/>
</svg>




<a href="index.php" class="text-dark"> HOME </a> </h5>




<h4>Histórico de jogadas</h4>

<table border="1" cellpadding="10" class="table">
    <thead>
    <tr>
        <th>Data</th>
        <td align='center'> Pontos</td>
    </tr>
    </thead>
    <tbody>


<?php foreach ($dados as $dados){ ?>

    <tr>
        <td><?php
        $dataFormatada = date('d-m-Y H:i:s', strtotime($dados['data']));

        echo $dataFormatada;?></td>


        <td align='center'><?php echo $dados['vidas']; ?></td>
    </tr>


    <?php } ?>





    </tbody>
</table>


</div>

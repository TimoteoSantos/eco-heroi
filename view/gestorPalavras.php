
<?php

require_once '../model/ModelPerguntas.php';
require_once '../model/DaoPergunta.php';
require_once '../model/conexao.php';
$conexao = new conexao();
$pdo = $conexao->getPdo();


$dados = DaoPergunta::listarPerguntas($pdo);

if (!empty($_POST['pergunta']) && !empty($_POST['resposta'])) {
    $pergunta = new Perguntas($_POST['pergunta'], $_POST['resposta']);
    $daoPergunta = new DaoPergunta($pergunta);
    $idPergunta = $daoPergunta->cadastrarPergunta($pdo);

    // Atualiza lista após inserir
    $dados = DaoPergunta::listarPerguntas($pdo);
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">
<body>
	

<div class="gestor">


<h4> <a href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
</svg>

HOME </a> </h4>


<form action = "" method = "post">



<hr>

<h3> Criar nova Pergunta:</h3>
<input class="form-control" type="text" name="pergunta" placeholder="PERGUNTA">
<p></p>
<input class="form-control" type="text" name="resposta" placeholder="RESPOSTA">

<p></p>

<input class="btn btn-warning largura" type="submit" name="">

</form>



<h3> Perguntas criadas </h3>

<p>


	<table border="1" class="table">
		<tr>
			<td>ID</td>		
			<td>Pergunta</td>
			<td>Resposta</td>
			<td>EXCLUIR</td>
		
		</tr>

		<?php
foreach ($dados as $key => $value) { ?>

		<tr>
			<td><?php echo $value['idpergunta']; ?></td>
			<td><?php echo $value['pergunta']; ?></td>
			<td><?php echo $value['resposta']; ?></td>
			<td align="center"> <a href="../model/excluirPalavra.php?idpalavra=<?=$value['idpergunta'];?> "  class="text-dark" > 
				
		
			<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
		
		
		
		</a> </td>
		</tr>


<?php } ?>


</>


	</table>

	</body>

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

<form action = "" method = "post">

Nova Pergunta:
<input type="text" name="pergunta" placeholder="PERGUNTA">
<input type="text" name="resposta" placeholder="RESPOSTA">

<input type="submit" name="">

</form>



<h3> Perguntas criadas </h3>

<p>


	<table border="1">
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
			<td align="center">!</td>
		</tr>


<?php } ?>

	</table>
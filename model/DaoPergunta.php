<?php

class DaoPergunta
{
	private $id;
	private $pergunta;

	public function __construct(Perguntas $pergunta)
	{
		$this->pergunta = $pergunta;
	}

	public function getPergunta()
	{
		return $this->pergunta;
	}
	public function getId()
	{
		return $this->id;
	}

	//inserir uma nova pergunta
	public function cadastrarPergunta($pdo)

	{

	$sql = "INSERT INTO pergunta (pergunta, resposta) VALUES (?, ?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([
	    $this->pergunta->getPergunta(),
	    $this->pergunta->getResposta()
	]);

	$this->id = $pdo->lastInsertId();
	return $this->id;

	}

	public static function listarPerguntas($pdo)
	{
 	$sql = "SELECT * FROM pergunta";
    $stmt = $pdo->query($sql);

    $perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $perguntas;

	}
}





/*

$pergunta  = new Perguntas();
$daoPergunta = new DaoPergunta($pergunta);
echo $daoPergunta->cadastrarPergunta($pdo);


$dados = $daoPergunta->listarPerguntas($pdo);

foreach ($dados as $key => $value) {
	// code...
	echo $value['idpergunta'] . "<br>";
	echo $value['pergunta'] . "<br>";
}

*/
<?php


class DaoJogador
{
	public $nome;
	public $senha;
	public $adm;

	public function __construct($nome,$senha,$adm)
	{
		$this->nome = $nome;
		$this->senha = $senha;
		$this->adm = $adm;


	}

	public function cadastrarUsuario($pdo)
	{
		
	$sql = "INSERT INTO usuario (usuario, senha,adm) VALUES (?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([

	    $this->nome,
	    $this->senha,
		$this->adm
	]);
	}

	public static function listarUsuarios($pdo)
	{
		$sql = "SELECT * FROM usuario";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


	
	public static function BuscarUsuario($pdo,$nome)
	{
		$sql = "SELECT * FROM usuario WHERE usuario = '$nome'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
	
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


	public static function excluirUsuario($pdo, $id)
	{
    $sql = "DELETE FROM usuario WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
	}


    public static function historicoJogada($pdo,$nome)
    {
        $sql = "SELECT * FROM historico WHERE usuario = '$nome'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }



}
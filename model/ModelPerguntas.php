<?php


class Perguntas
{
	private $idPergunta;
	private $pergunta;
	private $resposta;

	public function __construct($pergunta,$resposta)
	{	
		$this->setPergunta($pergunta);
		$this->setResposta($resposta);
		$this->idPergunta = 1;
	}

	public function getPergunta()
	{
		return $this->pergunta;
	}

	public function setPergunta($pergunta)
	{
		$this->pergunta = strtoupper($pergunta);
	}


	public function getResposta()
	{
		return $this->resposta;
	}

	public function setResposta($resposta)
	{
		$this->resposta = strtoupper($resposta);
	}


	public function buscarPerguntasBanco(){

		return "PERGUNTAS";
	}

	public function selecionarPergunta(){

	}

	public function getIdPergunta()
	{
		return $this->idPergunta;
	}

}
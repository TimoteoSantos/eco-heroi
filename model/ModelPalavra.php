<?php

require_once 'ModelPerguntas.php';


class Palavra
{
	private $idPalavras;
	private $palavras = [];
	

	public function __construct()
	{
			$this->setPalavra();
	}

	public function setPalavra()
	{
		$this->palavras = ["TEXTE","LIXEIRA"];
		
	}

	public function getPalavras():array
	{
		return $this->palavras;
	}

}
<?php
require_once 'ModelPalavra.php';
require_once 'DaoPergunta.php';

class  Jogada
{
    private $palavra;
    private $vidas;
    private array $palavras;
    private $palavrasTestas;
    private Jogador $jogador;

    private $letra;

    public function __construct()
    {
        $palavra = new Palavra();

        $this->palavra = $palavra;

        $this->vidas = 4;
        $this->palavras = $palavra->getPalavras();
        $this->palavrasTestas = [];
       // $this->jogador = $jogador;

    }

    public function getVidas(): int
    {
        return $this->vidas;
    }

    public function setVidas(int $vidas): void
    {
        $this->vidas = $vidas;
    }

    public function getPalavras(): array
    {
        return $this->palavras;
    }

    public function setPalavras(Palavra $palavras): void
    {
        $this->palavras = $palavras;
    }

    public function getPalavrasTestas(): array
    {
        return $this->palavrasTestas;
    }

    public function setPalavrasTestas(array $palavrasTestas): void
    {
        $this->palavrasTestas = $palavrasTestas;
    }

    public function getJogador(): Jogador
    {
        return $this->jogador;
    }

    public function setJogador(Jogador $jogador): void
    {
        $this->jogador = $jogador;
    }

    public function getLetra()
    {

        return $this->letra;
    }

    public function setLetra($letra): void
    {
        $this->letra = $letra;
    }


public function novaJogada($pdo)
{
    // Pegar todas as perguntas com palavras
    $dados = DaoPergunta::listarPerguntas($pdo);

    // Sortear uma aleatoriamente
    if (!empty($dados)) {
        $indiceAleatorio = array_rand($dados);
        $item = $dados[$indiceAleatorio];

        $palavra = strtoupper($item['resposta']); // Certifique-se que a coluna se chama 'palavra'
        $pergunta = $item['pergunta'];           // E que tenha 'pergunta'

        $_SESSION['palavra'] = $palavra;
        $_SESSION['palavra_exibida'] = str_repeat("_", strlen($palavra));
        $_SESSION['vidas'] = $this->vidas;
        $_SESSION['letras_tentadas'] = [];
        $_SESSION['pergunta'] = $pergunta;
    } else {
        // Caso não tenha perguntas no banco
        throw new Exception("Nenhuma pergunta encontrada.");
    }
}
}
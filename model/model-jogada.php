<?php
session_start();

// Se a sessão não estiver iniciada, cria o estado do jogo
if (!isset($_SESSION['palavra'])) {
    


    $palavras = ["LIXEIRA", "RECICLAGEM", "MEIOAMBIENTE", "SUSTENTAVEL"];



    $_SESSION['palavra'] = strtoupper($palavras[array_rand($palavras)]);
    $_SESSION['palavra_exibida'] = str_repeat("_", strlen($_SESSION['palavra']));

    $_SESSION['vidas'] = 4;

    $_SESSION['letras_tentadas'] = [];
}

// Se uma letra for enviada pelo formulário, processa

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['letra'])) {
   
    $letra = strtoupper($_POST['letra']);
    
    // Verifica se a letra é válida (apenas uma letra de A a Z)
    if (preg_match('/^[A-Z]$/', $letra)) {
        // Verifica se a letra já foi tentada
        
        if (in_array($letra, $_SESSION['letras_tentadas'])) {
            $mensagem = "Você já tentou essa letra!";

        } else {
            $_SESSION['letras_tentadas'][] = $letra;
            $acertou = false;
            $nova_palavra_exibida = str_split($_SESSION['palavra_exibida']);

            // Verifica se a letra está na palavra
            for ($i = 0; $i < strlen($_SESSION['palavra']); $i++) {
                if ($_SESSION['palavra'][$i] === $letra) {
                    $nova_palavra_exibida[$i] = $letra;
                    $acertou = true;
                }
            }

            $_SESSION['palavra_exibida'] = implode("", $nova_palavra_exibida);

            // Se não acertou, perde uma vida
            if (!$acertou) {
                $_SESSION['vidas']--;
            }

            // Verifica o estado do jogo
            if ($_SESSION['vidas'] <= 0) {
                $mensagem = "Você perdeu! A palavra era: " . $_SESSION['palavra'];
                session_destroy(); // Encerra o jogo
            } elseif (!str_contains($_SESSION['palavra_exibida'], "_")) {
                $mensagem = "Parabéns! Você acertou!";
                session_destroy(); // Encerra o jogo
            }
        }
    } else {
        $mensagem = "Digite uma letra válida!";
    }
}

?>

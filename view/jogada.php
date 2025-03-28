<?php


require_once '../control/control-jogada.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Forca - Simples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #palavra {
            font-size: 24px;
            letter-spacing: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Jogo da Forca - PHP</h1>


    <p>Qual é o local onde devemos jogar o lixo?</p>


    <div id="palavra"><?php echo $_SESSION['palavra_exibida']; ?></div>

    <p>Vidas restantes: <?php echo $_SESSION['vidas']; ?></p>

    <p>Letras tentadas: <?php echo implode(", ", $_SESSION['letras_tentadas']); ?></p>

    <?php if (isset($mensagem)): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>

    <?php if ($_SESSION['vidas'] > 0 && str_contains($_SESSION['palavra_exibida'], "_")): ?>
        <form method="POST">
            <label for="letra">Digite uma letra:</label>
            <input type="text" id="letra" name="letra" maxlength="1" required>
            <button type="submit">Verificar</button>
        </form>
    <?php endif; ?>

    <p><a href="forca.php">Reiniciar o jogo</a></p>
</body>
</html>

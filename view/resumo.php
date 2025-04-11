<?php
session_start();

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Mensagem</th><th>Valor</th></tr>";
echo "<tr><td>Você terminou o jogo com</td><td>" . $_SESSION['vidas'] . " vidas</td></tr>";
echo "<tr><td>A palavra era</td><td>" . $_SESSION['palavra'] . "</td></tr>";
echo "</table>";

session_unset();
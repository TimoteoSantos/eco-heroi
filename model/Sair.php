<?php


unset($_SESSION['usuario']);
unset($_SESSION['tipouser']);

header("Location: ../view/login.php");
<?php

class conexao {

public PDO $pdo;


public function __construct(){

    try {
        // Parâmetros de conexão com o MySQL
        $host = 'localhost';
        $dbname = 'ecoheroi';
        $username = 'root';
        $password = '';

        // Conexão com o banco MySQL
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        /*
        // Opcional: define o modo de erro para exceções
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        */

        //echo "Conexão com MySQL realizada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro na conexão com MySQL: " . $e->getMessage();
    }

    $this->pdo = $pdo;

}

public function getPdo()
{
    return $this->pdo;
}


}
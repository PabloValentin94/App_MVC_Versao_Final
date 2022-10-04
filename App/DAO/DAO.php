<?php

namespace App\DAO;

use \PDO;

abstract class DAO
{

    protected $conexao;

    protected function __construct()
    {

        //$dsn = "mysql:host=localhost:3306;dbname=db_mvc";

        $dsn = "mysql:host=" . $_ENV["db"]["host"] . ";dbname=" . $_ENV["db"]["database_name"];

        $usuario = $_ENV["db"]["user"];

        $senha = $_ENV["db"]["password"];

        $this->conexao = new PDO($dsn, $usuario, $senha);
        
    }

}

?>
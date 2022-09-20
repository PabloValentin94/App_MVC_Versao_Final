<?php

namespace App\DAO;

use \PDO;

abstract class DAO
{

    protected $conexao;

    protected function __construct()
    {

        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        $this->conexao = new PDO($dsn, "root", "etecjau");
        
    }

}

?>
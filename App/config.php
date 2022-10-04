<?php

    // Caminhos de diretório

    define("BASEDIR", dirname(__FILE__) . "/../");

    define("VIEWS", dirname(__FILE__) . "\View\Modules/");

    // Dados de conexão para o Banco de Dados (MySQL)

    $_ENV["db"]["host"] = "localhost:3306";
    $_ENV["db"]["user"] = "root";
    $_ENV["db"]["password"] = "etecjau";
    $_ENV["db"]["database_name"] = "db_mvc";

?>
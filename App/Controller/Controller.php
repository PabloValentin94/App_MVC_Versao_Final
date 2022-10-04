<?php

namespace App\Controller;

abstract class Controller
{

    protected static function render($view, $model = null)
    {

        //$arquivo_view = "View/Modules/$view.php";

        $arquivo_view = VIEWS . $view . ".php";

        if(file_exists($arquivo_view))
        {

            include $arquivo_view;

        }

        else
        {

            exit("View inexistente! Arquivo solicitado: " . $view . ".php");

        }

    }

}

?>
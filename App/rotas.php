<?php

/*
include "Controller/PessoaController.php";
include "Controller/ProdutoController.php";
include "Controller/CategoriaProdutoController.php";
include "Controller/FuncionarioController.php";
*/

use App\Controller\CategoriaProdutoController;
use App\Controller\FuncionarioController;
use App\Controller\PessoaController;
use App\Controller\ProdutoController;

// Comando que pega a rota solicitada/escrita pelo usuário.
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{

    case "/":
      echo "Página Principal";
    break;



    case "/pessoa":
      PessoaController::Index();
    break;

    case "/pessoa/form":
      PessoaController::Form();
    break;

    case "/pessoa/form/save":
      PessoaController::Save();
    break;

    case "/pessoa/delete":
      PessoaController::Delete();
    break;



    case "/produto":
      ProdutoController::Index();
    break;

    case "/produto/form":
      ProdutoController::Form();
    break;

    case "/produto/form/save":
      ProdutoController::Save();
    break;

    case "/produto/delete":
      ProdutoController::Delete();
    break;



    case "/categoria_produto":
      CategoriaProdutoController::Index();
    break;

    case "/categoria_produto/form":
      CategoriaProdutoController::Form();
    break;

    case "/categoria_produto/form/save":
      CategoriaProdutoController::Save();
    break;

    case "/categoria_produto/delete":
      CategoriaProdutoController::Delete();
    break;



    case "/funcionario":
      FuncionarioController::Index();
    break;

    case "/funcionario/form":
      FuncionarioController::Form();
    break;

    case "/funcionario/form/save":
      FuncionarioController::Save();
    break;

    case "/funcionario/delete":
      FuncionarioController::Delete();
    break;


      
    default:
      echo "Erro 404";

}

?>
<?php

namespace App\Controller;

use App\Model\CategoriaProdutoModel;

class CategoriaProdutoController extends Controller
{

  public static function Index()
  {

      $model = new CategoriaProdutoModel();

      $model->GetAllRows();

      //include "View/Modules/Categoria_Produto/CategoriaProdutoListagem.php";

      parent::render("Categoria_Produto/CategoriaProdutoListagem", $model);

  }

  public static function Form()
  {

        $model = new CategoriaProdutoModel();

        if(isset($_GET['id']))
        {

        $model = $model->GetById((int) $_GET['id']);

        }

        // var_dump($model);

        //include "View/Modules/Categoria_Produto/CategoriaProdutoForm.php";

        parent::render("Categoria_Produto/CategoriaProdutoForm", $model);

  }

  public static function Save()
  {

      $model = new CategoriaProdutoModel();

      $model->id = $_POST["id"];
      $model->descricao = $_POST["descricao"];

      $model->Save();

      header("Location: /categoria_produto");

  }

  public static function Delete()
  {

    $model = new CategoriaProdutoModel();

    $model->Delete((int) $_GET['id']);

    header("Location: /categoria_produto");

  }

}

?>
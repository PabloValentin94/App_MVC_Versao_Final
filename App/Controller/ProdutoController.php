<?php

namespace App\Controller;

use App\Model\ProdutoModel;

class ProdutoController extends Controller
{

  public static function Index()
  {

      $model = new ProdutoModel();

      $model->GetAllRows();

      //include "View/Modules/Produto/ProdutoListagem.php";

      parent::render("Produto/ProdutoListagem", $model);

  }

  public static function Form()
  {

      $model = new ProdutoModel();

      if(isset($_GET['id']))
      {

        $model = $model->GetById((int) $_GET['id']);

      }

      // var_dump($model);

      //include "View/Modules/Produto/ProdutoForm.php";

      parent::render("Produto/ProdutoForm", $model);

  }

  public static function Save()
  {

      $model = new ProdutoModel();

      $model->id = $_POST["id"];
      $model->nome = $_POST["nome"];
      $model->cadastro = $_POST["cadastro"];

      $model->Save();

      header("Location: /produto");

  }

  public static function Delete()
  {

    $model = new ProdutoModel();

    $model->Delete((int) $_GET['id']);

    header("Location: /produto");

  }

}

?>
<?php

namespace App\Controller;

use App\Model\PessoaModel;

class PessoaController
{

  public static function Index()
  {

      $model = new PessoaModel();

      $model->GetAllRows();

      include "View/Modules/Pessoa/PessoaListagem.php";

  }

  public static function Form()
  {

      $model = new PessoaModel();

      if(isset($_GET['id']))
      {

        $model = $model->GetById((int) $_GET['id']);

      }

      // var_dump($model);

      include "View/Modules/Pessoa/PessoaForm.php";

  }

  public static function Save()
  {

      $model = new PessoaModel();

      $model->id = $_POST["id"];
      $model->nome = $_POST["nome"];
      $model->cpf = $_POST["cpf"];
      $model->data_nascimento = $_POST["data_nascimento"];

      $model->Save();

      header("Location: /pessoa");

  }

  public static function Delete()
  {

    $model = new PessoaModel();

    $model->Delete((int) $_GET['id']);

    header("Location: /pessoa");

  }

}

?>
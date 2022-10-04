<?php

namespace App\Controller;

use App\Model\FuncionarioModel;

class FuncionarioController extends Controller
{

  public static function Index()
  {

      $model = new FuncionarioModel();

      $model->GetAllRows();

      //include "View/Modules/Funcionario/FuncionarioListagem.php";

      parent::render("Funcionario/FuncionarioListagem", $model);

  }

  public static function Form()
  {

      $model = new FuncionarioModel();

      if(isset($_GET['id']))
      {

      $model = $model->GetById((int) $_GET['id']);

      }

      // var_dump($model);

      //include "View/Modules/Funcionario/FuncionarioForm.php";

      parent::render("Funcionario/FuncionarioForm", $model);

  }

  public static function Save()
  {

      $model = new FuncionarioModel();

      $model->id = $_POST["id"];
      $model->nome = $_POST["nome"];
      $model->cadastro = $_POST["cadastro"];
      $model->cpf = $_POST["cpf"];

      $model->Save();

      header("Location: /funcionario");

  }

  public static function Delete()
  {

    $model = new FuncionarioModel();

    $model->Delete((int) $_GET['id']);

    header("Location: /funcionario");

  }

}

?>
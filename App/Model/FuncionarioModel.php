<?php

namespace App\Model;

use App\DAO\FuncionarioDAO;

class FuncionarioModel extends Model
{

  public $id, $nome, $cadastro, $cpf;

  //public $rows;

  public function Save()
  {

    $dao = new FuncionarioDAO();

    if(empty($this->id))
    {

      $dao->Insert($this);

    }

    else
    {

      $dao->Update($this);

    }

  }

  public function Delete(int $id)
  {

    $dao = new FuncionarioDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    $dao = new FuncionarioDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    $dao = new FuncionarioDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new FuncionarioDAO();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new FuncionarioModel();

    } */

  }

}

?>
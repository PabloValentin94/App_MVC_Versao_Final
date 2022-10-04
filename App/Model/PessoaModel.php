<?php

namespace App\Model;

use App\DAO\PessoaDAO;

class PessoaModel extends Model
{

  public $id, $nome, $cpf, $data_nascimento;

  //public $rows;

  public function Save()
  {

    $dao = new PessoaDAO();

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

    $dao = new PessoaDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    $dao = new PessoaDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    $dao = new PessoaDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new PessoaModel();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new PessoaModel();

    } */

  }

}

?>
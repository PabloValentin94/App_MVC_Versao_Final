<?php

namespace App\Model;

use App\DAO\ProdutoDAO;

class ProdutoModel extends Model
{

  public $id, $nome, $cadastro;

  //public $rows;

  public function Save()
  {

    $dao = new ProdutoDAO();

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

    $dao = new ProdutoDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    $dao = new ProdutoDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    $dao = new ProdutoDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new ProdutoModel();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new ProdutoModel();

    } */

  }

}

?>
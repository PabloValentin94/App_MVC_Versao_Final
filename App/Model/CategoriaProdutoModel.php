<?php

namespace App\Model;

use App\DAO\CategoriaProdutoDAO;

class CategoriaProdutoModel extends Model
{

  public $id, $descricao;

  //public $rows;

  public function Save()
  {

    $dao = new CategoriaProdutoDAO();

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

    $dao = new CategoriaProdutoDAO();

    $dao->Delete($id);

  }

  public function GetAllRows()
  {

    $dao = new CategoriaProdutoDAO();

    $this->rows = $dao->Select();

  }

  public function GetById(int $id)
  {

    $dao = new CategoriaProdutoDAO();

    $obj = $dao->SelectById($id);

    return ($obj) ? $obj : new CategoriaProdutoDAO();

    /* if($obj)
    {

      return $obj;

    }

    else
    {

      return new CategoriaProdutoModel();

    } */

  }

}

?>
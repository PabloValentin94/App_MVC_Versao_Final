<?php

namespace App\DAO;

use App\Model\ProdutoModel;
use \PDO;

class ProdutoDAO extends DAO
{

  public function __construct()
  {

    parent::__construct();

  }

  public function Insert(ProdutoModel $model)
  {

      $sql = "INSERT INTO Produto (nome, cadastro) VALUES (?, ?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->nome);
      $stmt->bindValue(2, $model->cadastro);

      $stmt->execute();

  }

  public function Update(ProdutoModel $model)
  {

    $sql = "UPDATE Produto SET nome=?, cadastro=? WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->cadastro);
    $stmt->bindValue(3, $model->id);

    $stmt->execute();

  }

  public function Delete(int $id)
  {

    $sql = "DELETE FROM Produto WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $id);

    $stmt->execute();

  }

  public function Select()
  {

    $sql = "SELECT * FROM Produto";

    $stmt = $this->conexao->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);

  }

  public function SelectById(int $id)
  {

    include_once "Model/ProdutoModel.php";

    $sql = "SELECT * FROM Produto WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindvalue(1, $id);

    $stmt->execute();

    return $stmt->fetchObject("App\Model\ProdutoModel");

  }

}

?>
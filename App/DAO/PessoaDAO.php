<?php

namespace App\DAO;

use App\Model\PessoaModel;
use \PDO;

class PessoaDAO extends DAO
{

  public function __construct()
  {

    parent::__construct();

  }

  public function Insert(PessoaModel $model)
  {

      $sql = "INSERT INTO Pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->nome);
      $stmt->bindValue(2, $model->cpf);
      $stmt->bindValue(3, $model->data_nascimento);

      $stmt->execute();

  }

  public function Update(PessoaModel $model)
  {

    $sql = "UPDATE Pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $model->nome);
    $stmt->bindValue(2, $model->cpf);
    $stmt->bindValue(3, $model->data_nascimento);
    $stmt->bindValue(4, $model->id);

    $stmt->execute();

  }

  public function Delete(int $id)
  {

    $sql = "DELETE FROM Pessoa WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $id);

    $stmt->execute();

  }

  public function Select()
  {

    $sql = "SELECT * FROM Pessoa";

    $stmt = $this->conexao->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);

  }

  public function SelectById(int $id)
  {

    include_once "Model/PessoaModel.php";

    $sql = "SELECT * FROM Pessoa WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindvalue(1, $id);

    $stmt->execute();

    return $stmt->fetchObject("App\Model\PessoaModel");

  }

}

?>
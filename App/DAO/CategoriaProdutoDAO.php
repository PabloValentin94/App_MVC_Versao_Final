<?php

class CategoriaProdutoDAO
{

  private $conexao;

  public function __construct()
  {

    $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

    $this->conexao = new PDO($dsn, "root", "etecjau");

  }

  public function Insert(CategoriaProdutoModel $model)
  {

      $sql = "INSERT INTO Categoria_Produto (descricao) VALUES (?)";

      $stmt = $this->conexao->prepare($sql);

      $stmt->bindValue(1, $model->descricao);

      $stmt->execute();

  }

  public function Update(CategoriaProdutoModel $model)
  {

    $sql = "UPDATE Categoria_Produto SET descricao=? WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $model->descricao);
    $stmt->bindValue(2, $model->id);

    $stmt->execute();

  }

  public function Delete(int $id)
  {

    $sql = "DELETE FROM Categoria_Produto WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindValue(1, $id);

    $stmt->execute();

  }

  public function Select()
  {

    $sql = "SELECT * FROM Categoria_Produto";

    $stmt = $this->conexao->prepare($sql);

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);

  }

  public function SelectById(int $id)
  {

    include_once "Model/CategoriaProdutoModel.php";

    $sql = "SELECT * FROM Categoria_Produto WHERE id = ?";

    $stmt = $this->conexao->prepare($sql);

    $stmt->bindvalue(1, $id);

    $stmt->execute();

    return $stmt->fetchObject("CategoriaProdutoModel");

  }

}

?>
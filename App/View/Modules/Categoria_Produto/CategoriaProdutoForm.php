<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Formulário de Cadastro de Categorias de Produtos </title>

  <style>

    label, input {display:block;}

    legend {text-align: center;}

    button {background-color: red; color: white;}

  </style>

</head>

<body>
  
  <fieldset>

    <legend> Cadastro de Categoria de Produtos </legend>

    <form method="post" action="/categoria_produto/form/save">

      <input type="hidden" value="<?= $model->id ?>" name="id"/>

      <label for="descricao"> Descrição: </label>
      <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text"/>
      <br>

      <button type="submit"> Salvar </button>

    </form>

  </fieldset>

</body>

</html>
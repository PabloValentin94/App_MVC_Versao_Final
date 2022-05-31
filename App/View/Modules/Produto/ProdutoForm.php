<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Formulário de Cadastro de Produtos </title>

  <style>

    label, input {display:block;}

    legend {text-align: center;}

    button {background-color: red; color: white;}

  </style>

</head>

<body>
  
  <fieldset>

    <legend> Cadastro de Produtos </legend>

    <form method="post" action="/produto/form/save">

      <input type="hidden" value="<?= $model->id ?>" name="id"/>

      <label for="nome"> Nome: </label>
      <input id="nome" name="nome" value="<?= $model->nome ?>" type="text"/>
      <br>

      <label for="cadastro"> Cadastro: </label>
      <input id="cadastro" name="cadastro" value="<?= $model->cadastro ?>" type="number"/>
      <br>

      <button type="submit"> Salvar </button>

    </form>

  </fieldset>

</body>

</html>
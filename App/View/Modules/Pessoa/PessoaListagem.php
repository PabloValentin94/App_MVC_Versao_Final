<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Listagem de Pessoas </title>

</head>

<body>
  
  <table>

    <tr>

      <th style="text-align:left;"> <!-- Botão de Exclusão --> </th>

      <th style="text-align:left;"> ID </th>

      <th style="padding-left: 10px; text-align:left;"> Nome </th>

      <th style="padding-left: 10px; text-align:left;"> CPF </th>

      <th style="padding-left: 10px; text-align:left;"> Data de Nascimento </th>

    </tr>

    <?php foreach($model->rows as $item): ?>

      <tr>

        <td style="padding-right: 10px; text-align:left;"> 
          
          <a href="/pessoa/delete?id=<?= $item->id ?>"> X </a>
      
        </td>

        <td style="text-align:left;"> <?= $item->id ?> </td>

        <td style="padding-left: 10px; text-align:left;"> 
        
          <a href="/pessoa/form?id=<?= $item->id ?>"> <?= $item->nome ?> </a>
      
        </td>

        <td style="padding-left: 10px; text-align:left;"> <?= $item->cpf ?> </td>
        
        <td style="padding-left: 10px; text-align:left;"> <?= $item->data_nascimento ?> </td>

      </tr>

    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>

      <tr>

        <td style="padding-top: 5px" colspan="5"> Nenhum registro encontrado. </td>

      </tr>

    <?php endif ?>

  </table>

</body>

</html>
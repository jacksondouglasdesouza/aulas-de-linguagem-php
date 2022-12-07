<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="stylesheet" href="./index.css">
  <title>PHP - Fundamentos.</title>
</head>

<body>
  <h1>Aula 010 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

  error_reporting(E_ALL);

  function row()
  {
    echo "<br />";
  }
  function row2()
  {
    echo "<br /><br />";
  }
  function row3()
  {
    echo "<br /><br /><br />";
  }
  /* TRATAMENTO DE ERROS */

  $divisor = 5;

  try {
    if ($divisor == 0) {
      throw new Exception("ERROR! Valor inválido. Não é possível dividir por 0. Digite um divisor maior que 0.");
    }
    $valor = 1 / $divisor;
  } catch (\Throwable $th) {
    echo $th->getMessage();
    row3();
  }

  $valor = 1000 / $divisor;
  echo " $valor";

















  ?>




</body>

</html>
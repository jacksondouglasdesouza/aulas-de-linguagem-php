<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="stylesheet" href="./index002.css">
  <title>PHP - Fundamentos.</title>
</head>

<body>
  <h1>
    Página de funções importada!
  </h1>

  <!--CÓDIGO PHP-->

  <?php

  error_reporting(E_ALL);
  //Página de Funções 

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

  function soma($a, $b)
  {
    $resultado = $a + $b;
    return $resultado;
  }












  ?>




</body>

</html>
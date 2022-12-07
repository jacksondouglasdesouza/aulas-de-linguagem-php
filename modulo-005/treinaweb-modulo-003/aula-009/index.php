<?php
//ERROR FATAL - PARA COMPLETAMENTE O PROGRAMA  NÃO SENDO POSSÍVEL REDECLARAR UMA FUNÇÃO//
// OUTRA FUNÇÃO FOI DECLARADA NO FINAL DO DOCUMENTO 
/*   function somar($a, $b)
  {
    return $a + $b;
  } */


?>

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
  <h1>Aula 009 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

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

  // ERROR DO TIPO ALERT //
  /*   error_reporting(E_ALL);
  $valor = 100;
  echo $valor1; */


  row();
  echo "FINAL ................";
  row2();

  // ERROR DO TIPO ALERT //
  #$numero = NAOEXISTE; #constante não existe!

  //ERROR FATAL - PARA COMPLETAMENTE O PROGRAMA //
  // OUTRA FUNÇÃO FOI DECLARADA NO INÍCIO DO DOCUMENTO 
  /*   function somar($a, $b)
  {
    return $a + $b;
  } */


  echo 'Parse error_reporting - sintaxe!';


  ?>




</body>

</html>
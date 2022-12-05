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
  <h1>Aula 003 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

  #Operadores Aritméticos

  $row = "<br />";
  $row02 = "<br /><br />";

  $soma = 5 + 6;
  $subtracao = 10 - 4;
  $multiplicacao = 10 * 5;
  $divisao = 50 / 3;
  $modulo = 100 % 3;
  $exponenciacao = 2 ** 5;

  echo $row02;
  var_dump($soma);
  echo $row;

  var_dump($subtracao);
  echo $row;

  var_dump($multiplicacao);
  echo $row;

  var_dump($divisao);
  echo $row;

  var_dump($modulo);
  echo $row;

  var_dump($exponenciacao);
  echo $row;

  // ********************************** //


  #Operadores de Comparação

  $letra__a = 10;
  $letra__b = 20;
  $letra__c = 20;
  echo $row02;

  echo "$letra__a == $letra__b =>";
  var_dump($letra__a == $letra__b);
  echo $row;
  echo "$letra__a != $letra__b =>";
  var_dump($letra__a != $letra__b);
  echo $row;
  echo "$letra__a <> $letra__b =>";
  var_dump($letra__a <> $letra__b); #<> Outra opção para diferente.
  echo $row;
  echo "$letra__a < $letra__b =>";
  var_dump($letra__a < $letra__b);
  echo $row;
  echo "$letra__a <= $letra__b =>";
  var_dump($letra__a <= $letra__b);
  echo $row;

  echo "$letra__a > $letra__b =>";
  var_dump($letra__a >= $letra__b);
  echo $row;
  echo "$letra__a >= $letra__b =>";
  var_dump($letra__a > $letra__b);
  echo $row;


  #Operadores de igualdades == entre valores.
  #operadores de igualdades === entre valores e tipos de dados.

  echo "$letra__c == $letra__b =>";
  var_dump($letra__c == $letra__b);
  echo $row;
  // ***

  echo "$letra__c === $letra__b =>";
  var_dump($letra__c === $letra__b);
  echo $row;





  ?>



</body>

</html>
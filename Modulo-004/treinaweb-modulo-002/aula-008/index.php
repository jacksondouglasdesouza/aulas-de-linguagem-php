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
  <h1>Aula 008 - PHP Fundamentos</h1>

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

  function somar($a, $b)
  {
    return $a + $b;
  }
  function multiplica($a, $b)
  {
    return $a * $b;
  }
  function divide($a, $b)
  {
    return $a / $b;
  }
  function subtrai($a, $b)
  {
    return $a - $b;
  }
  function potencia($a, $b)
  {
    return $a ** $b;
  }

  $nome = "Jackson Douglas";
  echo "Bem vindo {$nome}, esse é o seu curso de PHP8 - Fundamentos";
  row2();

  echo somar(10, 50);
  row();
  echo subtrai(100, 50);
  row();
  echo multiplica(55, 3);
  row();
  echo divide(500, 3);
  row();
  echo potencia(2, 5);
  row();

  row3();

  // NADA É EXECUTADO DENTRO DA FUNÇÃO DEPOIS DO RETURN;
  function imprimir()
  {
    echo "Essa função está imprimindo isso! [ .... ]";
    row();
    return true;
    echo "AQUI NÃO SERÁ IMPRESSO, POIS ESTÁ APÓS O RETURNED";
  }

  imprimir();

  ?>



</body>

</html>
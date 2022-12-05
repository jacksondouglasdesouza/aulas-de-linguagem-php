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
  <h1>Aula 005 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

  // Strings
  #Concatenação

  $row = "<br />";
  $row02 = "<br /><br />";

  $nomeUsuario = "Jackson Douglas ";
  $sobrenomeUsuario = "de Souza";
  $nomeCompletoUsuario = $nomeUsuario . $sobrenomeUsuario;

  echo $row02;
  echo $nomeCompletoUsuario;

  $curso = ["Java", "PHP", "C"];
  $escola = "Codecademy";

  $publicidade__01 = "Faça o curso de {$curso[0]} na escola de programação {$escola}";
  $publicidade__02 = "Faça o curso de {$curso[1]} na escola de programação {$escola}";
  $publicidade__03 = "Faça o curso de {$curso[2]} na escola de programação {$escola}";
  echo $row02;
  echo $publicidade__01;
  echo $row;
  echo $publicidade__02;
  echo $row;
  echo $publicidade__03;
  echo $row;

  $publicidade__04 = 'Faça o curso de {$curso[0]} na escola de programação {$escola}';
  $publicidade__05 = 'Faça o curso de {$curso[1]} na escola de programação {$escola}';
  $publicidade__06 = 'Faça o curso de {$curso[2]} na escola de programação {$escola}';

  echo $row02;
  echo $publicidade__04;
  echo $row;
  echo $publicidade__05;
  echo $row;
  echo $publicidade__06;
  echo $row;

  $var1 = 3;
  $var2 = 2;
  var_dump($var1 == $var2);



  ?>



</body>

</html>
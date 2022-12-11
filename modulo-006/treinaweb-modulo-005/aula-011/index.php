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
  <!--CÓDIGO PHP-->

  <?php
  require "index002.php";
  error_reporting(E_ALL);

  echo "Aula de Inclusão - Página Importadora";
  row2();
  echo "Aula de Inclusão - FIM Página Importadora";
  row();

  //include_once "./index002.php";
  //require_once "./index002.php";
  //include "./index002.php";
  //require "./index002.php";

  row();

  echo soma(25, 25);


  // ***** // 

  ?>




</body>

</html>
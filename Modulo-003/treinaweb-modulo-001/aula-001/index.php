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
  <h1>Aula 001 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php
  // VARIÁVEIS 
  $row = "<br />";
  echo 'Olá Campeão!';
  echo $row;
  echo $row;
  $email = "contato@jacksondouglas.dev";
  echo $email;

  echo $row;
  //CONSTANTES -->
  define("MEUNOME", "Jackson Douglas de Souza");
  echo $row;
  echo MEUNOME;

  const CURSO = "php 8.2";

  echo $row;
  echo CURSO;



  ?>



</body>

</html>
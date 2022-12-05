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
  <h1>Aula 007 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

  $row = "<br />";
  $row02 = "<br /><br />";
  $row03 = "<br /><br /><br />";

  $i = 0;
  while ($i <= 10) {
    echo "Essa é a {$i}º posição! <br />";
    $i++;
  }
  echo $row02;

  // *** FOR *** /

  for ($i = 1; $i <= 8; $i++) {
    echo "Essa é a [ {$i}º ] posição <br />";
  }
  echo $row02;
  for ($i = 0; $i <= 10; $i += 3) {
    echo "Essa é a [ {$i}º ] posição <br />";
  }

  echo $row02;
  for ($i = 0; $i <= 10; $i += 2) {
    echo "Essa é a [ {$i}º ] posição <br />";
  }

  // *** FOREACH ***//

  $numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90];
  echo $row02;
  for ($i = 0; $i < count($numeros); $i++) {
    echo "Valor {$numeros[$i]} <br />";
  }

  echo $row02;

  foreach ($numeros as $numerosRecebidos) {
    echo $numerosRecebidos . "<br />";
  }

  echo $row02;

  foreach ($numeros as $key => $value) {
    echo " Valor na Chave {$key} é: {$value} <br />";
  }

  // *** LENDO ARRAYS COM FOREACH *** //

  echo $row02;

  $cursos = [

    'PHP' => [
      'nome_curso' => 'Fundamentos de PHP',
      'versao_ferramenta' => '8.2',
      'carga_horaria' => 40,
      'status' => true
    ],
    'C#' => [
      'nome_curso' => 'Fundamentos de C#',
      'versao_ferramenta' => '5',
      'carga_horaria' => 40,
      'status' => false
    ],
    'C' => [
      'nome_curso' => 'Fundamentos de C',
      'versao_ferramenta' => '16',
      'carga_horaria' => 40,
      'status' => false
    ],
    'C++' => [
      'nome_curso' => 'Fundamentos de C++',
      'versao_ferramenta' => '15',
      'carga_horaria' => 40,
      'status' => false
    ],
    'JAVA' => [
      'nome_curso' => 'Fundamentos de JAVA',
      'versao_ferramenta' => '8',
      'carga_horaria' => 40,
      'status' => true
    ],
    'Javascript' => [
      'nome_curso' => 'Fundamentos de Javascript',
      'versao_ferramenta' => '11',
      'carga_horaria' => 40,
      'status' => true
    ],
    'HTML' => [
      'nome_curso' => 'Fundamentos de HTML',
      'versao_ferramenta' => '5',
      'carga_horaria' => 40,
      'status' => true
    ],
    'CSS' => [
      'nome_curso' => 'Fundamentos de CSS',
      'versao_ferramenta' => '3',
      'carga_horaria' => 40,
      'status' => true
    ],
    'Node JS' => [
      'nome_curso' => 'Fundamentos de Node JS',
      'versao_ferramenta' => '16.20.03',
      'carga_horaria' => 40,
      'status' => true
    ],

  ];

  echo $row02;
  foreach ($cursos as $curso) {

    if ($curso['status'] == false) {
      continue;
    }
    echo $curso['nome_curso'] . "<br />";
    echo "Versão: ", $curso['versao_ferramenta'] . "<br />";
    echo "Carga Horária: ", $curso['carga_horaria'] . "<br />";
    echo "Ativo: SIM ", $curso['status'] . "<br />";
    echo $row;
  }

  $n = 2;
  for ($i = 1; $i <= 10; $i++) {
    echo "{$n} X {$i} = ", $n * $i . "<br />";
  }



























  ?>



</body>

</html>
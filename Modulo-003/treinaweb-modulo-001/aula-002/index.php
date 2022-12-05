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
  <h1>Aula 002 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php
  $row = "<br />";
  $row2 = "<br /><br />";
  $nome = "Jackson Douglas de Souza";
  $idade = 36;
  $casado = false;
  $altura = 1.89;

  echo $row;
  echo gettype($row);
  echo $row;
  echo gettype($nome);
  echo $row;
  echo gettype($idade);
  echo $row;
  echo gettype($casado);
  echo $row;
  echo gettype($altura);
  echo $row;

  echo var_dump($row);
  echo $row;
  echo var_dump($nome);
  echo $row;
  echo var_dump($idade);
  echo $row;
  echo var_dump($casado);
  echo $row;
  echo var_dump($altura);
  echo $row;

  //Arrays

  $linguagem = [
    "Java", "Javascript", "C", "C++", "C#"
  ];

  //Arrays Associativos

  $curso = [
    "nome_curso" => 'PHP',
    "versao_tecnologia" => '8.2',
    "carga_horaria" => 40,
    "curso_ativo" => true
  ];

  echo $row;
  echo $curso["nome_curso"];
  echo $row;
  echo $curso["versao_tecnologia"];
  echo $row;
  echo $curso["carga_horaria"];
  echo $row;
  echo $curso["curso_ativo"];
  echo $row;
  echo $linguagem[0];
  echo $row;
  echo $linguagem[1];
  echo $row;
  echo $linguagem[2];
  echo $row;
  echo $linguagem[3];
  echo $row;
  echo $linguagem[4];


  //Arrays Multidimensionais 

  $numeros = [
    [1, 2, 3],
    [4, 5, 6, 7],
    [8, 9, 10, 11, 12],
    [13, 14, 15, 16, 17],
    [18, 19, 20, 21, 22, 23],
    [24, 25, [26, 27, 28, 29, 30]]
  ];

  echo $row2;
  echo $numeros[0][2]; #Linha 00 - valor = 3
  echo $row;
  echo $numeros[1][3]; #Linha 01 - valor = 7
  echo $row;
  echo $numeros[2][4]; #Linha 02 - valor = 12
  echo $row;
  echo $numeros[3][0]; #Linha 03 - valor = 13
  echo $row;
  echo $numeros[4][5]; #Linha 04 - valor = 23
  echo $row;
  echo $numeros[5][1]; #Linha 05 - valor = 25
  echo $row;
  echo $numeros[5][2][3]; #Linha 05 subnível - valor = 29

  //Chaves Associativas
  $cursos_instituicao = [
    "c" => [
      "nome_curso" => 'Fundamento de C',
      "versao_tecnologia" => '8.2',
      "carga_horaria" => 40,
      "curso_ativo" => true
    ],
    "php" => [
      "nome_curso" => 'Fundamento de PHP',
      "versao_tecnologia" => '8.2',
      "carga_horaria" => 40,
      "curso_ativo" => true
    ],
    "java" => [
      "nome_curso" => 'Fundamento de Java',
      "versao_tecnologia" => '8.2',
      "carga_horaria" => 40,
      "curso_ativo" => true
    ],
    "javascript" => [
      "nome_curso" => 'Fundamento de Javascript',
      "versao_tecnologia" => '8.2',
      "carga_horaria" => 40,
      "curso_ativo" => true
    ]
  ];
  echo $row2;
  echo $cursos_instituicao["php"]["nome_curso"];
  echo $row;
  echo $cursos_instituicao["c"]["nome_curso"];
  echo $row;
  echo $cursos_instituicao["java"]["nome_curso"];
  echo $row;
  echo $cursos_instituicao["javascript"]["nome_curso"];
  echo $row;

  // ***************************** //

  $cursos_instituicao[] = "Python";
  echo $row2;
  var_dump($cursos_instituicao);
  echo $row2;
  var_dump($cursos_instituicao);

  $cursos_instituicao["php"]['pre-requisitos'] = "Lógica de Programação";
  $cursos_instituicao["c"]['pre-requisitos'] = "Lógica de Programação";
  $cursos_instituicao["java"]['pre-requisitos'] = "Lógica de Programação";
  $cursos_instituicao["javascript"]['pre-requisitos'] = "Lógica de Programação";
  echo $row2;
  var_dump($cursos_instituicao);
  echo $row2;
  echo $cursos_instituicao["php"]["pre-requisitos"];









  ?>



</body>

</html>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 12 - Exercícios</title>
    </head>

    <body>
      <header>
        <h1>Aula 13 - Arrays Mistos e Multidimensionais</h1>
      </header>
      <h2>Arrays Mistos</h2>
      <br />

      <?php

      $row = "<br />";
      echo "É possível criar um array que combina indices numéricos e strings, embora não seja muito frequentemente usado,
      nem aconselhado o seu uso devido ao grande grau de dificuldade de administrar tal código.";
      echo $row;

      $dadosMistos = [
        0 => 1,
        'nome' => 'Jackson',
        'sobrenome' => 'souza',
        10 => 10,
        20 => 60,
        50 => "Portugal",
        60 => "Brasil"
      ];

      #A impressão dos dados Mistos é a padrão:
      echo $row;
      echo $dadosMistos[50];
      echo $row;
      echo $dadosMistos['nome'];

      ?>

      <br />
      <h2>Arrays Multidimensionais</h2>

      <p>Os Arrays multidimensionais, são arrays do typo número ou associativos, cujo seus valores são composto por outros arrays.</p>

      <?php

      $row = "<br />";

      $dadosMultidimensionais = [
        [10, 20, 30, 40, 50],
        [60, 70, 80, 90, 100, 110],
        [120, 130, 140, 150, 160, 170],
        [180, 190, 200, 210, 220, 230, 240],
        [250, 260, 270, 280, 290, 300, 310, 320]
      ];

      echo $row;
      echo $dadosMultidimensionais[3][4];
      echo $row;
      echo  $dadosMultidimensionais[4][6];


      $paisCidades = [
        'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
        'Brasil' => ['Brasília', 'São Paulo', 'Rio de Janeiro'],
        'Espanha' => ['Madrid', 'Barcelona', 'Servilha']
      ];

      echo $row;
      echo $paisCidades['Portugal'][2];
      echo $row;
      echo $paisCidades['Brasil'][1];
      echo $row;
      echo $paisCidades['Espanha'][0];
      echo $row;








      ?>









    </body>

    </html>
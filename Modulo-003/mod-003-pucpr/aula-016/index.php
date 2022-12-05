    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 16 - Ciclo While</title>
    </head>

    <body>
      <header>
        <h1>Aula 16 - Ciclo While</h1>
      </header>
      <h2>ESTRUTURAS DE REPETIÇÃO!</h2>
      <br />


      <!--CÓDIGO PHP-->
      <?php

      $row = "<br />";
      $row02 = "<br /><br />";
      $row03 = "<br /><br /><br />";

      $valor = 0;
      $valor02 = 0;

      while ($valor < 10) {
        echo " {$valor} º Rodada <br />";
        $valor++;
      }

      // Do While
      echo $row02;

      do {
        echo $valor02 . '<br />';
        $valor02++;
      } while ($valor02 < 20);



      ?>


    </body>

    </html>
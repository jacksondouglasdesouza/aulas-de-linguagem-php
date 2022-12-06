    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>>Aula 18 - Funções em PHP8</title>
    </head>

    <body>
      <header>
        <h1>Aula 18 - Funções em PHP8</h1>
        <p>Módulo 04 - Curso de PHP</p>
      </header>
      <h2>FUNCTION()</h2>
      <br />

      <!--CÓDIGO PHP -->

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
        echo "{$a} + {$b} = " . ($a + $b);
      }

      function saudacao($x)
      {
        echo "Bom dia $x";
      }


      // ********** //

      somar(5, 5);
      row();
      somar(100, 200);
      row2();

      $nomes = ["Ana", "Paula", "Douglas", "Jackson"];

      foreach ($nomes as $nomeRecebe) {
        saudacao($nomeRecebe);
        row();
      }

      // ********** //

      row3();
    
      





      ?>


    </body>

    </html>
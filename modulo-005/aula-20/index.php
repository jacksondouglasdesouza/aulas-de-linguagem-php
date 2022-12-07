    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 20 - Generators em PHP8</title>
    </head>

    <body>
      <header>
        <h1>Aula 20 - Generators em PHP8</h1>
        <p>Módulo 05 - Curso de PHP</p>
      </header>
      <h2>Generators</h2>
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

      #GENERATORS

      function numeros()
      {
        for ($i = 0; $i <= 20; $i++) {
          yield $i;
          row();
        }
      }


      foreach (numeros() as $numeroRecebe) {
        echo "número: $numeroRecebe";
        $row;
      }
      row();


      /*  GENERATORS YELD FROM */
      row3();

      function buscar_nomes()
      {
        yield 'Carla';
        yield from ["João", "Maria", "José", "Jackson", "Douglas", "Carla", "Silva", "Rochele", "Bidu"];
        yield 'Marcelo';
      }

      foreach (buscar_nomes() as $nomesRecebidos) {
        echo "Nome: $nomesRecebidos";
        row();
      }


      







      ?>


    </body>

    </html>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 17 - Ciclo FOR</title>
    </head>

    <body>
      <header>
        <h1>Aula 17 - FOR</h1>
      </header>
      <h2>ESTRUTURAS DE REPETIÇÃO!</h2>
      <br />


      <!--CÓDIGO PHP-->
      <?php
      $row = "<br />";
      $row02 = "<br /><br />";
      $row03 = "<br /><br /><br />";

      for ($indice = 0; $indice <= 10; $indice++) {
        echo $indice . "<br />";
      }
      echo $row02;

      for ($jindice = 10; $jindice >= 0; $jindice--) {
        echo $jindice . "<br />";
      }

      echo $row03;

      $mesesAno = [
        "janeiro",
        "fevereiro",
        "março",
        "abril",
        "maio",
        "junho",
        "julho",
        "agosto",
        "setembro",
        "outubro",
        "novembro",
        "dezembro"
      ];

      for ($i = 0; $i < count($mesesAno); $i++) {
        echo "{$i}º {$mesesAno[$i]} <br />";
      }

      echo $row02;

      foreach ($mesesAno as $mesesAno__recebe) {
        echo "Esse variável vale agora: {$mesesAno__recebe} <br />";
      }

      echo $row03;

      $listaPaises = [
        "Brasil" => "Brasilia",
        "Alemanha" => "Berlim",
        "Argentina" => "Buenos Aires",
        "Austrália" => "Camberra",
        "Bahamas" => "Nassau",
        "Belize" => "Belmopan"
      ];

      foreach ($listaPaises as $key => $value) {
        echo "A capital do país {$key} é {$value} <br />";
      }

      echo $row02;

      $listaNomes = ["Jackson", "Douglas", "Souza", "Lucilene", "Maria", "Carla"];

      foreach ($listaNomes as $nomeRecebido) {
        echo "O nome recebido foi: {$nomeRecebido} <br />";
        if ($nomeRecebido == "Lucilene") {
          echo "Lamento, esse é o máximo de nome permitido!";
          break;
        }
      }

      echo $row;

      for ($i = 0; $i <= 20; $i++) {
        echo "Essa é a {$i}º vez <br />";
        if ($i == 15) {
          echo "Lamento só pode haver {$i} posições.";
          break;
        }
      }

      echo $row02;

      foreach ($listaNomes as $nomeRecebidoo) {
        if ($nomeRecebidoo == "Lucilene") {
          echo "Estou pulando um nome! <br />";
          continue;
        }
        echo "O nome recebido é: {$nomeRecebidoo}. <br />";
      }

      echo $row03;

      for ($i = 1; $i <= 20; $i++) {
        if ($i == 15) {
          echo 'Estou pulando um número! <br />';
          continue;
        } elseif ($i == 18) {
          echo 'Estou pulando outro número! <br />';
          continue;
        }
        echo "A posição é {$i}º <br />";
      }

      echo $row02;

      // GOTO


      for ($i = 0; $i <= 20; $i++) {
        if ($i == 15) {
          goto parou;
        }
        echo "A posição é {$i}º <br />";
      }
      echo 'FIM DA LINHA';
      parou:
      echo "PAROU POR AQUI!";










      ?>


    </body>

    </html>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>>Aula 19 - Funções em PHP8</title>
    </head>

    <body>
      <header>
        <h1>Aula 18 - Funções em PHP8</h1>
        <p>Módulo 04 - Curso de PHP</p>
      </header>
      <h2>FUNCTION() | NAMED E ARGUMENTS</h2>
      <br />

      <!--CÓDIGO PHP -->

      <?php

      use function PHPSTORM_META\type;

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

      row2();

      function somar($a, $b = 2000, $c = 1000)
      {
        echo "{$a} + {$b} + {$c} = " . ($a + $b + $c);
      }

      somar(a: 1000, b: 5000, c: 1000);
      row();
      somar(a: 1000, c: 1000);
      row();
      somar(3000, c: 1000);
      row();
      somar(a: 500, b: 675, c: 0);
      row();
      somar(8000, b: 0, c: 2000);
      row();

      row2();

      // ******************************** //
      #VARIADIC PARAMETERS

      function parametros(...$parameters)
      {
        $total = 0;
        for ($i = 0; $i < count($parameters); $i++) {
          $total += $parameters[$i];
        }
        return $total;
      }

      echo " Esse valor é: " . parametros(10, 10, 10, 10, 10);
      row();
      echo " Esse valor é: " . parametros(50, 50, 50, 50, 50);
      row2();


      // ******************************** //
      #RETURNS //


      function potenciacao(...$parameters)
      {
        $valor = 1;
        for ($i = 0; $i < count($parameters); $i++) {
          $valor *= $parameters[$i];
        }
        return $valor;
      }

      row();
      echo "A potenciação é: " . potenciacao(5, 5, 5, 5, 5);

      row2();

      function nomeUsuario($x)
      {
        if ($x == null) {
          echo "Nome Usuario é inválido. Não é permitido que esse nome seja vazio! Preencha um nome de usuário para continuar!";
          row();
        } elseif (is_integer($x) || is_float($x)) {
          echo "Nome Usuario inválido. Só são aceito caracteres alfabéticos";
          row();
        } elseif ($x == 'Jackson Douglas') {
          echo "Bem vindo {$x}";
          row();
          return true;
        } else {
          echo "Não existe esse nome em nosso banco de dados";
          return false;
        }
      }

      echo nomeUsuario(5.589);


      ?>


    </body>

    </html>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 15 - Operações Condicionais</title>
    </head>

    <body>
      <header>
        <h1>Aula 15 - Operações Condicionais</h1>
        <p>Switch e Sintaxe Alternativa</p>
      </header>
      <h2>ESTRUTURAS CONDICIONAIS!</h2>
      <br />


      <!--CÓDIGO PHP-->
      <?php

      $row03 = "<br /><br /><br />";
      $row02 = "<br /><br />";
      $row = "<br />";
      $nomeUsuario = 'Douglas';

      switch ($nomeUsuario) {
        case 'Jackson':
          echo "Bem vindo {$nomeUsuario}";
          break;
        case 'Douglas':
          echo "Bem vindo {$nomeUsuario}";
          break;
        case 'Jackson Douglas':
          echo "Bem vindo {$nomeUsuario}";
          break;
        default:
          echo 'Usuário não identificado!';
          break;
      }

      echo $row03;

      //OPERADOR TERNÁRIO
      /*É um operador simplificado que pode substituir as estruturas condicionais IF ELSE.*/

      $opcaoSelecionada = 0;
      $carroEscolhido = $opcaoSelecionada == 1 ? "Seu carro é um Honda Civic" : "Seu carro é um Corolla";
      echo "{$carroEscolhido}";
      echo $row;

      ?>

      <!--CÓDIGO PHP -->
      <h1 style="color:<?= $opcaoSelecionada == 1 ? "blue" : "red"; ?>">
        UAL!!! VOCÊ ARRASOU!
      </h1>

      <h2>
        <!--CÓDIGO PHP -->
        <?= $opcaoSelecionada == 1 ? "Ótima escolha, {$carroEscolhido}. Ele é Sensacional" : "Ótima escolha, {$carroEscolhido}. É um dos melhores da Categoria"; ?>
      </h2>

      <!--CÓDIGO PHP8 - EXPRESSÃO MATCH -->

      <?php

      /*
      A Expressão Match, foi introduzida na nova versão do PHP 8, muito parecida com a estrutura Switch.      
      */

      echo $row02;
      $valor = 30;

      echo match ($valor) {
        5 => 'O valor vale 5',
        10 => 'O valor vale 10',
        15 => 'O valor vale 15',
        default => " $valor, esse valor não consta na nossa base de dados!"
      };
      echo $row03;

      $novoValor = match ($valor) {
        2 => "O novo valor da variável 2",
        4 => "O novo valor da variável 4",
        6 => "O novo valor da variável 6",
        8 => "O novo valor da variável 8",
        10 => "O novo valor da variável 10",
        12 => "O novo valor da variável 12",
        14 => "O novo valor da variável 14",
        16, 18, 20, 22, 24, 26, 28, 30 => "O novo valor da variável está entre 16 à 30 "
      };

      echo $novoValor;

      //A Expressão Match, faz a comparação de tipo de dados e valor do dado. ( === )

      $valorExato = 3;

      echo $row02;

      echo match ($valorExato) {
        3 => var_dump($valorExato), #Vai imprimir a valor INTEIRO!
        '3' => var_dump($valorExato), #Vai imprimir a valor STRING!
        default => "Esse valor não existe em nosso banco de dados!!!"
      };


      ?>


    </body>

    </html>
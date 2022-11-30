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
        <h1>Aula 14 - Operações Condicionais</h1>
        <p>IF, IF ELSE, IF ELSEIF ELSE</p>
      </header>
      <h2>ESTRUTURAS CONDICIONAIS!</h2>
      <br />

    </body>

    <?php
    $row = '<br />';
    $nomeUsuario = 'Douglas';
    $idadeUsuario = 17;

    if ($nomeUsuario == 'Douglas') {
      echo "$nomeUsuario, bem vindo ao sistema!";
      echo $row;
    }

    if ($idadeUsuario >= 18) {
      echo "Bem vindo, $nomeUsuario sua idade é $idadeUsuario, você é de maior, pode entrar no festival.";
      echo $row;
    } else {
      echo "Bem vindo, $nomeUsuario sua idade é $idadeUsuario, você é menor de idade e não pode entrar no Festival, por favor se retirar do local.";
      echo $row;
    }


    $nota01 = 6;
    $nota02 = 6;
    $nota03 = 6;
    $nota04 = 6;
    $mediaAluno = ($nota01 + $nota02 + $nota03 + $nota04) / 4;

    if ($mediaAluno >= 9) {
      echo "$nomeUsuario, Você está de parabéns, sua média é $mediaAluno e você foi aprovado.";
      echo $row;
    } elseif ($mediaAluno < 9 && $mediaAluno >= 8) {
      echo "$nomeUsuario, Você está de parabéns, sua média é $mediaAluno e você foi aprovado.";
      echo $row;
    } elseif ($mediaAluno < 8 && $mediaAluno >= 7) {
      echo "$nomeUsuario, Você está de parabéns, sua média é $mediaAluno e você foi aprovado.";
      echo $row;
    } elseif ($mediaAluno < 7 && $mediaAluno >= 6) {
      echo "$nomeUsuario, Você está de recuperação, sua média é $mediaAluno.";
      echo $row;
    } else {
      echo "$nomeUsuario, Você está Reprovado! Sua média é $mediaAluno.";
      echo $row;
    }

    $numeroTeste = 3;

    if ($numeroTeste >= 0) {
      if ($numeroTeste % 2 == 0) {
        echo "$nomeUsuario, O seu número é par!";
        echo $row;
      } else {
        echo "$nomeUsuario, O seu número é ímpar!";
        echo $row;
      }
    } else {
      echo "$nomeUsuario, Esse valor não é Válido!";
      echo $row;
    }









    ?>

    </html>
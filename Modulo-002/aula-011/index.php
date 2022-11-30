    <!-- CÓDIGO PHP -->

    <?php

    $nome = "Jackson Douglas";
    $sobrenome = "de Souza";
    $nomeCompleto = "$nome $sobrenome";
    $nome02 = "jackson douglas";
    $sobrenome02 = "de souza";
    $nome03 = "João de Magalhães";
    $sobrenome03 = "Goés";

    //echo "<h3>O meu nome é: $nome</h3>";
    // echo "<h1>O meu nome completo é: $nome $sobrenome</h1>";

    ?>


    <!-- CONTEÚDO -->
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 11 - Exercícios</title>
    </head>

    <body>
      <header>
        <h1>Aula 11 - Exercícios</h1>
      </header>
      <article>

        <hr />
        <!-- PRIMEIRA FORMA  -->
        <h3>O meu nome completo é: </h3>
        <h1>
          <!-- ESSA É MINHA FORMA PREFERIDA-->
          <?= "$nome $sobrenome" ?>
        </h1>
        <br />

        <!-- SEGUNDA FORMA  -->
        <h3>O meu nome completo é: </h3>
        <h1>
          <?= $nome . ' ' . $sobrenome ?>
        </h1>
        <br />

        <!-- SEGUNDA FORMA  -->
        <h3>O meu nome completo é: </h3>
        <h1>
          <?php echo $nome . ' ' . $sobrenome ?>
        </h1>
        <br />
        <br />

        <h1>O meu note tem: <?= strlen($nomeCompleto) ?> caracteres.</h1>
        <br />

        <h4>
          O meu primeiro nome é: <?= strtoupper($nome02); ?> e o meu sobrenome é: <?= strtoupper($sobrenome02); ?>
        </h4>
        <br />
        <h4>
          O meu primeiro nome é: <?= strtoupper($nome03); ?> e o meu sobrenome é: <?= strtoupper($sobrenome03); ?>
        </h4>
        <br />
        <h4>
          O meu primeiro nome é: <?= mb_strtoupper($nome03); ?> e o meu sobrenome é: <?= mb_strtoupper($sobrenome03); ?>
        </h4>





    </body>

    </html>
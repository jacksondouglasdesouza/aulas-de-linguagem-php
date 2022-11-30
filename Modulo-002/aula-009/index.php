<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
  <title>Aula 09 - Strings</title>
</head>

<body>
  <header>
    <h1>Aula 08 - STRINGS - Caracteres de escape</h1>
  </header>
  <article>
    <h2>Operadores de String - Os caracteres de escape</h2>
    <p>
      Os caracteres de escape são usados para escrever caracteres especiais, como é o caso de alguns símbolos que podem entrar em conflito com o código.
    </p>
  </article>

  <hr />
  <p>Código PHP8</p>
  <!-- CÓDIGO PHP -->

  <?php
  echo '<p>Esse é um parágrafo de código HTML5, impresso no comando do PHP8</p>';
  echo '<br />';

  #Não tem a possibilidade de imprimir a neste caso sem uso da barra de escape.
  //$frase01 = 'I'm going to John's Party!';


  # AQUI SIM!
  $frase02 = "I'm going to John's Party!";

  echo $frase02, '<br />';


  #Não tem a possibilidade de imprimir a neste caso sem uso da barra de escape.
  //$frase03 = "I'm not sure John"The great"" Will win this fight.";

  #Para resolver a situação usa-se a barra invertida, como carácter de escape. [ \ ].

  $frase04 = 'I\'m going to John\'s Party!';
  #Sempre antes das aspas simples ou dupla.


  echo $frase04, '<br />';

  $frase05 = "I'm not sure John \" The great \" Will win this fight.";

  echo $frase05, '<br />';

  $frase06 = 'I\'m not sure John " The great " Will win this fight.';

  echo $frase06, '<br />';

  /* Em algumas linguagem de programação o \n representa uma quebra de linha, aqui no PHP esse comando só sera interpretado pelo terminal, sendo [ \n\r ]
  Fazendo assim a quebra de linha no terminal.
   */

  echo 'Jackson Douglas de Souza\n\rContato:(48)99166-8449 <br /> <br />';
  #Sempre coloque entre aspas duplas para poder ser interpretado pelo terminal e executar a quebra de linha.

  echo "Jackson Douglas de Souza\n\rContato:(48)99166-8449 <br /> <br /> ";

  #cd Laragon www pastaDoProjeto 
  #cd pastaDoAquivo
  #php nomedoArquivo.php
  #Esse comando vai ter o arquivo no terminal.

  echo 'Foi introduzido no PHP também os caracteres de escape unicode. <br />';
  echo 'Isso permite a a presentação de caráteres a partir de seu código hexadecimal. <br /><br /> ';
  #\u ==> [unicode]
  echo "\u{A9} <br />"; #copyright
  echo "\u{BC} <br />"; #1/4
  echo "\u{AE} <br />"; #Registered Trademark
  echo "\u{02736} <br />"; #Star 6


  //Também podemos inserir com entities [ & ]

  echo "<br /><br />";
  echo '&copy; <br />';
  echo '&frac14; <br />';
  echo '&reg; <br />';
  echo '&gap; <br />';

  ?>

</body>

</html>
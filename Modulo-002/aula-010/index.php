<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
  <title>Aula 10 - Funções para operar com Strings</title>
</head>

<body>
  <header>
    <h1>Aula 10 - Funções para operar com Strings</h1>
  </header>
  <article>
    <h2>Funções para operar com Strings</h2>
    <p>
      Funções são variáveis muito especiais dentro do PHP, existem dezenas de funções para tratamento de strings,
      veremos mais a frente o que são funções e como criar funções.
    </p>
  </article>

  <hr />
  <p>Código PHP8</p>
  <!-- CÓDIGO PHP -->

  <?php

  //
  echo 'Por exemplo podemos apresentar um determinado carácter de uma string passando um valor referencial. <br />';

  $fraseA = 'Esta é uma Frase de Teste da Aula de Strings em PHP8';
  $line = '<br />';

  echo $line;
  echo 'Esta é uma Frase de Teste da Aula de Strings em PHP8';
  echo $line;
  echo $fraseA[0];
  echo $line;
  echo $fraseA[1];
  echo $line;
  echo $fraseA[8];
  echo $line;

  ?>

  <!-- CONTINUAÇÃO HTML5 -->

  <P>Podemos comparar strings da seguinte forma.</P>
  <p>
    $nome1 = 'João'; <br />
    $nome2 = 'Carlos'; <br />
    <br />
    $comparacao01 = ($nome1 == $nome2); ==> FALSE <br />
    $comparacao02 = ($nome1 != $nome2); ==> TRUE <br />
  </p>
  <h4>
    Existem muitas funções nativas no PHP para operar com strings.
  </h4>
  <h5>
    Exemplos.
  </h5>

  <!-- CÓDIGO PHP -->

  <?php

  $nome1 = 'João';
  $nome2 = 'Carlos';
  $comparacao01 = ($nome1 == $nome2); // ==> FALSE
  $comparacao02 = ($nome1 != $nome2); //  ==> TRUE

  echo $comparacao01, ' ?';
  echo $line;
  echo $comparacao02;

  // Frase para operação das Funções.

  $fraseOperacao = 'Essa Frase vai ser uma base para operação das funções em string';

  // strlem($variable) Retorna a quantidade de carácteres dentro da variável do tipo string.

  echo $line;
  echo strlen($fraseOperacao), ' = strlem($variable)';
  echo $line;

  // substr(variable) Retorna uma parte da string.
  echo $line;
  echo substr($fraseOperacao, 0, 15), '= substr($variable)';
  echo $line; #nomeDa Variável | Onde começa | Onde Termina.
  echo $line;

  // strtoupper(variable). Transforma toda a string em letras maiúsculas.

  echo $line;
  echo strtoupper($fraseOperacao), ' = strtoupper($fraseOperacao)';
  echo $line;
  echo $line;

  // strtolower(variable). Transforma toda a string em letras minúsculas.

  echo $line;
  echo strtolower($fraseOperacao), ' = strtolower($fraseOperacao)';
  echo $line;
  echo $line;

  // str_replace('itens', 'itens', variable) Substitui uma todas as variável string escolhida da frase por outra.

  echo $line;
  echo str_replace('a', '4', $fraseOperacao), ' = str_replace(itens, itens, variable)';
  echo $line;
  echo $line;

  // strpos(variable, 'itens) - Verifica em qual posição se encontrar a string especificada na frase.

  echo $line;
  echo strpos($fraseOperacao, 'g'), ' = strpos(variable, \'itens\')';
  echo $line;
  echo $line;


  // No PHP8 foram inseridos mais algumas funções para usar como string.
  #str_contains('variable', 'itens)
  // primeiro passando a variável, depois a palavra que busca dentro da string.

  $nome01 = "Jackson Douglas de Souza";

  echo $line;
  echo str_contains($nome01, "Douglas"), ' = ';
  echo $line;



  ?>








</body>

</html>
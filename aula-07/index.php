<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
  <title>Aula 07 - Operadores Lógicos</title>
</head>

<body>
  <header>
    <h1>Aula 07 - Operadores Lógicos</h1>
  </header>
  <article>
    <p>
      <span class="yel">$a and $b</span> <strong>| E |</strong> <span class="bluee">Verdadeiro (true) se tanto $a quanto $b são verdadeiros.</span> <br />
      <span class="yel">$a or $b</span> <strong>| OU |</strong> <span class="bluee">Verdadeiro se $a ou $b são verdadeiros.</span> <br />
      <span class="yel">$a xor $b</span> <strong>| XOR |</strong> <span class="bluee">Verdadeiro se $a ou $b são verdadeiros, mas não ambos.</span> <br />
      <span class="yel">! $a</span> <strong>| NÃO |</strong> <span class="bluee">Verdadeiro se $a não é verdadeiro.</span> <br />
      <span class="yel">$a && $b</span><strong>| E |</strong> <span class="bluee">Verdadeiro se tanto $a quanto $b são verdadeiros.</span> <br />
      <span class="yel">$a || $b</span><strong>| OU |</strong> <span class="bluee">Verdadeiro se $a ou $b são verdadeiros.</span> <br />
    </p>
  </article>
  <!-- CÓDIGO PHP -->
  <?php
  /*
  Operadores Lógicos em PHP, são operadores que frequentemente são usados junto a operadores de comparação,
  eles permitem ' ligar ' várias comparações avaliando se são verdadeiras ou falsas.
  No PHP a construção correta da instrução de condicionais despende destes operadores.
  */

  $numero01 = 100;
  $numero02 = 200;


  $comparacao01 = ($numero01 < $numero02) && ($numero01 < 1000); #Verdadeiro => As opções retornam True.
  $comparacao02 = ($numero01 > $numero02) || ($numero01 > 1000); #Falso => Nenhuma das opções retorna um valor True.
  $comparacao03 = ($numero01 < 150) && ($numero02 > 300); #Falso => Somente um valor retorna True.
  $comparacao04 = ($numero01 > 10) || ($numero02 > 500); #Verdadeiro => Uma opção retorna um valor True.
  $comparacao05 = ($numero01 == 100) && ($numero02 < $numero01); #False => Somente um valor retorna True.

  echo '<br /> <br />';
  echo ' True = [', $comparacao01, ']', '<br />';
  echo ' False = [0', $comparacao02, ']', '<br />';
  echo ' False = [0', $comparacao03, ']', '<br />';
  echo ' True = [', $comparacao04, ']', '<br />';
  echo ' False = [0', $comparacao05, ']', '<br /> <br />';

  $notr = False;
  $aux = !$notr;
  echo 'O Valor !variavel, NOT, faz a inversão de Valores, transformará True em False, ou vice e versa.
  <br />';
  echo 'A variavel exemplo é um valor False: Logo retorna [ ', $aux, ' True ] <br />';


  ?>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
  <title>Aula 06 - Operadores</title>
</head>

<body>
  <header>
    <h1>Aula 06 - Operadores de Comparação e Spaceship Operador.</h1>
  </header>
  <article>
    <p>
      Operadores de comparação, como os seus nomes implicam, permitem que você compare dois valores. Você pode se interessar em ver as <a href="https://www.php.net/manual/pt_BR/types.comparisons.php" target="_black">tabelas</a> de comparação de tipos, que tem exemplo das várias comparações entre tipos relacionadas.
    </p>
  </article>
  <!-- CÓDIGO PHP -->
  <?php
  # Os valores de comparação permitem efetuar uma comparação entre eles.
  # Verificam se os valores são iguais, diferentes, maiores ou menores entre si, ou ainda se são do mesmo tipo de dados.
  $a_1 = (2 == 3);
  $a_2 = (100 == 100);
  $a_3 = (50 == "50");
  $a_4 = (50 === '50');

  echo $a_1, 'False', '<br />';
  echo $a_2, ' True', '<br />';
  echo $a_3, ' True', '<br />';
  echo $a_4, 'False', '<br />', '<br />';

  $b_1 = (50 != 30);
  $b_2 = (100 <> 900); # Método Alternativo para Diferente de!
  $b_3 = (50 != "50");
  $b_4 = (50 !== '50');

  echo $b_1, ' True', '<br />';
  echo $b_2, ' True ', '<br />';
  echo $b_3, ' False', '<br />';
  echo $b_4, ' True', '<br /> <br />';

  // Os valores maior que, menor que.

  $c_1 = (10 > 30);
  $c_2 = (100 < 900);
  $c_3 = (50 >= 50);
  $c_4 = (50 <= 50);
  $c_5 = (50 < 50);


  echo $c_1, ' False', '<br />';
  echo $c_2, ' True', '<br />';
  echo $c_3, ' True', '<br />';
  echo $c_4, ' True', '<br />';
  echo $c_5, ' False', '<br /><br />';

  echo 'Spaceship Operador <br />';

  $xyz = 1 <=> 1;
  # Xyz => É neutro, pois retorna o Valor [ 0 ]. Não sendo valor 1 maior, nem menor que o outro.

  $xzy = 3 <=> 2;
  #Xzy => É um Valor positivo, Vai retorna o valor 1, porquê o operar encontrou que 3 é maior que 2.
  #Sempre que o maior número estiver ao lado esquerdo da operação, ele retorna o valor [ 1 ].

  $yxz = 1 <=> 2;
  #Yxz => É um valor negativo, pois retorna o valor -1, porquê o operar encontrou que o valor 1 é menor que 2.
  #Sempre que o maior numero estiver a direita da operação, ele retorna o valor [ -1 ].

  echo '( 1 == 1 ): Vai retornar,  ',  $xyz, '<br />';
  echo '( 3 > 2 ): Vai retornar, ', $xzy, '<br /> ';
  echo '( 1 < 2 ): Vai retornar,  ', $yxz, '<br /> ';


  ?>

</body>

</html>
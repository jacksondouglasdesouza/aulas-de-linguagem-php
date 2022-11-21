<?php

// --------------------------------------------------------------------
# "A" é igual a 1000 e "B" é igual a metade de A.
#Apresente o valor de B.

$a = 1000;
$b = 1000 / 2;

echo 'O B vale: ', $b, '<br />';

// --------------------------------------------------------------------
# "AA" é igual a 100 e "BB" é igual a três vezes o valor  de A.
#Apresente o valor de BB.

$aa = 100;
$bb = 100 * 3;

echo 'O BB vale: ', $bb, '<br />';


// --------------------------------------------------------------------
# "AAA" é iniciada com o valor de 20.
#Na instrução seguinte, "AAA" deve Apresente o valor de 21.

$aaa = 20;
echo 'O AAA vale: ', ++$aaa, '<br />';


// --------------------------------------------------------------------
# VariavelA é igual a 100,
# VariavelB é igual a 250,
# VariavelC é igual a VariavelA mais a VariavelB.
#Você deve acrescentar mais uma unidade VariavelC.
#Imprima a VariavelC.

$variavelA = 100;
$variavelB = 250;
$variavelC = $variavelA + $variavelB;
$variavelC++;

echo 'O Variavel C vale: ', $variavelC, '<br />';

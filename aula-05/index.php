<?php

#Operadores
// -------------------------------------------
#São símbolos que permitem executar operações matemáticas ou
#operações lógicas / Comparativas.
#operações de Atribuição [ = ]

$essaVariavelRecebe = 100;
$essaVariavelRecebe = "Cem";

/*
Operadores Aritméticos.
Executam operações matemáticas.
*/

$mais = 10 + 20; #Adição
$menos = 10 - 5; #Subtração
$vezes = 10 * 5; #Multiplicação
$dividido = 100 / 5; #Divisão
$restoModulo = 4 % 2; #Módulo

$a = 10;
$b = 5;
$c  = $a + $b;
$d = $e = $f = 1230;

$soma = $a + $f + 15;
$soma01 = 15 + $b + 1;

$expoente = 4 ** 2; #Exponenciação, calcula a potência do número.

/*
Operadores de atribuição combinados.
Permite alterar o valor de uma variável, a partir de seu valor original.
*/
$aVariavel = 70;

$aVariavel = $aVariavel + 10;
$aVariavel = $aVariavel - 5;
$aVariavel = $aVariavel * 2;
$aVariavel = $aVariavel / 3;

//Modo Simplificado ...

$aVariavel += 10;
$aVariavel -= 5;
$aVariavel *= 2;
$aVariavel /= 3;

//Operadores de Incremento e Decremento.
#Adiciona ou Subtrai uma unidade da variável.

$aaa = 1;

$aaa++; # $aaa = $aaa +1;
$aaa--; # $aaa = $aaa -1;

/*
Operadores de incremento e decremento que podem ser
pré ou pós operação de incremento ou decremento.
*/

$b = 10;
$b++; # Vale 10 na primeira ocorrência e vale 11 na proxima ocorrência.
++$b; # Vale 11 já na primeira ocorrência.

$c = 10;
$c--;  # Vale 10 na primeira ocorrência e vale 9 na proxima ocorrência.
--$c;  # Vale 9 já na primeira ocorrência.

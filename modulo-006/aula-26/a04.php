<?php

function  row()
{
  echo "<br />";
}

function row2()
{
  echo "<br /><br />";
}


#ACCESS LEVELS

class ClasseExemplo
{
  public $valor01;
  protected $valor02;
  private $valor03;
}

$novoValor = new ClasseExemplo();
$novoValor->valor01 = 12345; #Possível
// $novoValor->valor02 = "Não é possível 001!";
// $novoValor->valor03 = "Não é Possível 002!";

echo $novoValor->valor01;
row();
// echo $novoValor->valor02; #não possível
// row();
// echo $novoValor->valor03; #não possível


// *****  ***** //


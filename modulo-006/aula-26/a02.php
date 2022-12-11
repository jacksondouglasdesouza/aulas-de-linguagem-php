<?php

function row()
{
  echo "<br />";
}

// ****** class tradicional ****** //

class Animal
{
  public $especie;
  public $peso;

  function tipoEspecie()
  {
    return "Esse animal é da espécie {$this->especie}";
    row();
  }
}

$animal = new Animal();
$animal->especie = "Mamífero";
row();
echo "{$animal->tipoEspecie()}";

// ****** Herdando a class Animal ****** //

class Mamifero extends Animal
{
  public $quantidadePernas;
  public $temPelo;

  function quantasPernas()
  {
    return "Esse mamífero é um {$this->especie}
    e tem {$this->quantidadePernas} pernas.";
  }
}

$mamifero = new Mamifero();
$mamifero->especie = "Cavalo";
$mamifero->quantidadePernas = 4;
row();
echo $mamifero->quantasPernas();

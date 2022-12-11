<?php

#class anônimas

function row()
{
  echo "<br />";
}

function row2()
{
  echo "<br /><br />";
}

class objeto
{
  function teste()
  {
    echo "Esse teste é da class normal!";
    row2();
  }
}

$a = new objeto();

// ***** //

$variaveL = new class
{
  function teste2()
  {
    echo "Esse teste é da class Anônima!";
    row2();
  }
};


$a->teste();

$variaveL->teste2();

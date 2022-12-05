<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="stylesheet" href="./index.css">
  <title>PHP - Fundamentos.</title>
</head>

<body>
  <h1>Aula 006 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

  // Strings
  #Concatenação

  $row = "<br />";
  $row02 = "<br /><br />";
  $row03 = "<br /><br /><br />";

  $valor__a = 10;
  $valor__b = 10;

  if ($valor__a > $valor__b) {
    echo "O Valor A é maior que valor B. <br />";
  } elseif ($valor__a == $valor__b) {
    echo "O Valor B é igual ao valor A. <br />";
  } else {
    echo "O Valor B é maior que o valor A. <br />";
  }

  // ***************** Switch Case //


  $mesesAno = [
    '1' => 'Janeiro',
    '2' => 'Fevereiro',
    '3' => 'Março',
    '4' => 'Abril',
    '5' => 'Maio',
    '6' => 'Junho',
    '7' => 'Julho',
    '8' => 'Agosto',
    '9' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novembro',
    '12' => 'Dezembro'
  ];

  for ($i = 1; $i < count($mesesAno); $i++) {
    if ($i == 7) {
      break;
    }
    echo $mesesAno[$i] . "<br />";
  }

  switch ($mesesAno[$i]) {
    case 1:
      echo "O mês é {$mesesAno[1]} <br />";
      break;
    case 2:
      echo "O mês é {$mesesAno[2]} <br />";
    case 3:
      echo "O mês é {$mesesAno[3]} <br />";
      break;
    case 4:
      echo "O mês é {$mesesAno[4]} <br />";
    case 5:
      echo "O mês é {$mesesAno[5]} <br />";
      break;
    case 6:
      echo "O mês é {$mesesAno[6]} <br />";
    case 7:
      echo "O mês é {$mesesAno[7]} <br />";
      break;
    case 8:
      echo "O mês é {$mesesAno[8]} <br />";
    case 9:
      echo "O mês é {$mesesAno[9]} <br />";
      break;
    case 10:
      echo "O mês é {$mesesAno[10]} <br />";
    case 11:
      echo "O mês é {$mesesAno[11]} <br />";
      break;
    case 12:
      echo "O mês é {$mesesAno[12]} <br />";
    default:
      echo "O mês é inválido!";
      break;
  }


  // ************************ //
  echo $row02;


  $valor = 10;

  switch ($valor) {
    case 2:
      echo ' O valor é:', $valor;
      break;
    case 4:
      echo ' O valor é:', $valor;
      break;
    case 6:
      echo ' O valor é:', $valor;
      break;
    case 8:
      echo ' O valor é:', $valor;
      break;
    case 10:
      echo ' O valor é:', $valor;
      break;
    default:
      echo "O valor é inválido!";
      break;
  }

  /*   switch ($variable) {
    case 'value':
      # code...
      break;
    
    default:
      # code...
      break;
  } */

  











  ?>



</body>

</html>
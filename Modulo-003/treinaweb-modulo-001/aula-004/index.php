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
  <h1>Aula 004 - PHP Fundamentos</h1>

  <!--CÓDIGO PHP-->

  <?php

  #Operadores Lógicos

  $valor__a = true;
  $valor__b = true;
  $valor__c = false;
  $valor__d = false;

  $row = "<br />";
  $row02 = "<br /><br />";


  echo $row02;
  echo "AND &&";
  echo $row;
  echo "$valor__a && $valor__b ==> ", var_dump($valor__a && $valor__b);
  echo $row;
  echo "$valor__a && $valor__c ==> ", var_dump($valor__a && $valor__c);
  echo $row;
  echo "$valor__c && $valor__b ==> ", var_dump($valor__c && $valor__b);
  echo $row;
  echo "$valor__c && $valor__d ==> ", var_dump($valor__c && $valor__d);
  echo $row;

  //

  echo $row02;
  echo "AND &&";
  echo $row;
  echo "$valor__a and $valor__b ==> ", var_dump($valor__a and $valor__b);
  echo $row;
  echo "$valor__a and $valor__c ==> ", var_dump($valor__a and $valor__c);
  echo $row;
  echo "$valor__c and $valor__b ==> ", var_dump($valor__c and $valor__b);
  echo $row;
  echo "$valor__c and $valor__d ==> ", var_dump($valor__c and $valor__d);
  echo $row;

  //

  echo $row02;
  echo "OR ||";
  echo $row;
  echo "$valor__a || $valor__b ==> ", var_dump($valor__a || $valor__b);
  echo $row;
  echo "$valor__a || $valor__c ==> ", var_dump($valor__a || $valor__c);
  echo $row;
  echo "$valor__c || $valor__b ==> ", var_dump($valor__c || $valor__b);
  echo $row;
  echo "$valor__c || $valor__d ==> ", var_dump($valor__c || $valor__d);
  echo $row;

  //

  echo $row02;
  echo "|| or";
  echo $row;
  echo "$valor__a or $valor__b ==> ", var_dump($valor__a or $valor__b);
  echo $row;
  echo "$valor__a or $valor__c ==> ", var_dump($valor__a or $valor__c);
  echo $row;
  echo "$valor__c or $valor__b ==> ", var_dump($valor__c or $valor__b);
  echo $row;
  echo "$valor__c or $valor__d ==> ", var_dump($valor__c or $valor__d);
  echo $row;



  ///********* ******///



  echo $row02;
  echo "XOR or exclusive";
  echo $row;
  echo "$valor__a xor $valor__b ==> ", var_dump($valor__a xor $valor__b);
  echo $row;
  echo "$valor__a xor $valor__c ==> ", var_dump($valor__a xor $valor__c);
  echo $row;
  echo "$valor__c xor $valor__b ==> ", var_dump($valor__c xor $valor__b);
  echo $row;
  echo "$valor__c xor $valor__d ==> ", var_dump($valor__c xor $valor__d);
  echo $row;


  // NOT 

  echo $row02;
  echo var_dump($valor__a), " NOT ", var_dump(!$valor__a);
  echo $row;
  echo var_dump($valor__c), " NOT ", var_dump(!$valor__c);
  echo $row;





  ?>



</body>

</html>
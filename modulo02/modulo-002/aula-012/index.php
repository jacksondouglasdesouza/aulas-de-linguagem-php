    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 12 - Exercícios</title>
    </head>

    <body>
      <header>
        <h1>Aula 12 - Arrays</h1>
      </header>
      <article>

        <?php

        /*
        Os Arrays, são matrizes que armazenam uma coleção de valores.
        Eles funcionam como uma variável que contém valores arrumados para valor em seu determinado índice numérico.
        Em resumo os Arrays são uma coleção de chaves associadas a valores em uma matriz que armazena tudo isso em uma variável X. Os valores podem ser de qualquer tipo, inclusive de outros Arrays.
        */

        $valores = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $nomes = ["João", "Maria", "José", "Lourdes", "Anitta"];
        $line = "<br />";
        #Para imprimir um valor de algum índice do Array, execute o comando:

        echo $nomes[3];
        echo $line;
        echo $valores[5];

        //Os Arrays, não têm obrigatoriedade de ter chaves sequenciais, tendo o programador a opção de atribuí chaves ao seus valores.

        $valorAtribuido = [
          10 => 50000,
          20 => 60000,
          30 => 70000,
          40 => 80000,
        ];
        echo $line;
        echo $valorAtribuido[30];
        $valorAtribuido[] = 90000; #Este valor será inserido no Array na posição 41.
        echo $line;
        echo $valorAtribuido[41];

        echo $line;


        #Adicionando valores em array

        $valoresAtual = [10, 20, 30];
        array_push($valoresAtual, 2000);
        echo $valoresAtual[3];
        #alterando valores em array

        $valoresAtual[1] = 300;
        echo $line;

        echo "Os valores na primeira e última posição do Array são: <br />
        Primeira = $valoresAtual[0] <br />
        Última = $valoresAtual[3]<br />
        ";

        echo $line;

        #Arrays Associativos.

        $dadosAssociativos = [
          'A' => 20,
          'B' => 50,
          'C' => 50,
          'D' => 50,
          'E' => 50,
          'F' => 50,
          'G' => 50,
          'H' => 50
        ];

        $dadosCliente = [
          'Nome' => 'Nome do Cliente',
          'Email' => 'Email do Cliente',
          'Telefone' => 'Telefone do Cliente',
          'Endereco' => 'Endereco do Cliente'
        ];

        echo $dadosAssociativos['H'];
        echo $line;
        echo $dadosCliente['Endereco'];



        ?>



    </body>

    </html>
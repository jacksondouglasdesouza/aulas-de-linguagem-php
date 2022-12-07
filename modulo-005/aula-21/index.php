    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 21 - Introdução à POO(OOP) em PHP8</title>
    </head>

    <body>
      <header>
        <h1>Aula 21 - Introdução à POO(OOP) em PHP8</h1>
        <p>Programação Orientada a Objetos.</p>
      </header>
      <h2>POO ou (OOP)</h2>
      <br />

      <!--CÓDIGO PHP -->

      <?php

      function row()
      {
        echo "<br />";
      }

      function row2()
      {
        echo "<br /><br />";
      }

      function row3()
      {
        echo "<br /><br /><br />";
      }


      row3();

      class Humano
      {
        // ***** 
        #Propriedades
        #métodos
        // *****
      }

      #EXEMPLO  

      class AreaQuadrado
      {
        public $laguraQuadrado, $alturaQuadrado;
        public $a;
        public $b;
        function area($a, $b)
        {
          $totalArea = $a * $b;
          return $totalArea;
        }
      }

      // **************** //

      class SerHumano
      {
        public $nomeHumano = "Jackson";
        public $sobrenomeHumano = "Douglas de Souza";

        public function nomeCompletoHumano()
        {
          return "Bem vindo {$this->nomeHumano} {$this->sobrenomeHumano}!";
        }
      }

      $homem = new SerHumano();
      row();
      echo $homem->nomeCompletoHumano();

      // ************ CONSTRUCTOR ************ //
      row();

      class Pessoa
      {
        private $nomePessoa;
        private $SobrenomePessoa;

        function __construct($nome, $sobrenome)
        {
          $this->nomePessoa = $nome;
          $this->SobrenomePessoa = $sobrenome;
        }

        public function nomeCompleto()
        {
          $nomeCompletoPessoa = "{$this->nomePessoa}{$this->SobrenomePessoa}";
          return "Bem vindo $nomeCompletoPessoa";
        }
      }

      $homem = new Pessoa("Jackson Douglas", "de Souza");
      $mulher = new Pessoa("Ana Maria", "de Asis");

      echo $homem->nomeCompleto();
      row2();
      echo $mulher->nomeCompleto();
      row2();










      ?>


    </body>

    </html>
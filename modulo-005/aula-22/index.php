    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="./style.css">
      <meta name="author" content="Jackson Douglas de Souza">
      <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
      <title>Aula 22 - Introdução à POO(OOP) em PHP8</title>
    </head>

    <body>
      <header>
        <h1>Aula 22 - Introdução à POO(OOP) em PHP8</h1>
        <p>Programação Orientada a Objetos.</p>
      </header>
      <h2>POO ou (OOP) - PROPERTY PROMOTION</h2>
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






      /* ***** PROPERTY PROMOTION NO PHP8 ***** */


      class Pessoa02
      {
        function __construct(public $nome, public $sobrenome)
        {
          $this->nome = $nome;
          $this->sobrenome = $sobrenome;
        }

        public function nomeCompleto02()
        {
          $nomeCompletoPessoa = "{$this->nome} {$this->sobrenome}";
          return "Bem vindo $nomeCompletoPessoa";
        }
      }

      $homem = new Pessoa02("Jackson", "Douglas");
      $mulher = new Pessoa02("Marta", "da Silva");

      row();

      echo $homem->nomeCompleto02();
      row();
      echo $mulher->nomeCompleto02();

      echo "Jackson Douglas de Souza";













      ?>


    </body>

    </html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css">
  <meta name="author" content="Jackson Douglas de Souza">
  <link rel="shortcut icon" href="./imgs/favicon/favicon.png" type="image/x-icon">
  <title>Aula 08 - Strings</title>
</head>

<body>
  <header>
    <h1>Aula 08 - STRINGS</h1>
  </header>
  <article>
    <h2>Operadores de String</h2>
    <p>
      Há dois operadores de string. O primeiro é o operador de concatenação ('.'), que retorna a concatenação dos seus argumentos direito e esquerdo. O segundo é o operador de atribuição de concatenação ('.='), que acrescenta o argumento do lado direito no argumento do lado esquerdo. Veja em Operadores de Atribuição para mais informações.
    </p>
    <section id="cd">
      <code class="codes">
        <p>
          $a = "Olá "; <br />
          $b = $a . "mundo!"; // agora $b contém "Olá mundo!" <br />
          $a = "Olá "; <br />
          $a .= "mundo!"; // agora $a contém "Olá mundo!" <br />
        </p>
      </code>
    </section>

  </article>

  <!-- CÓDIGO PHP -->
  <?php

  $a = 'Olá mundo';
  $b = 'Tudo Certo com Vocês?';
  echo '<br />';
  echo '=> ', $a, '<br />';
  echo '=> ', $b, '<br /><br />';

  ?>

  <!-- CONTINUAÇÃO HTML5 -->
  <section id="cd">
    <code class="codes">
      <p>
        $string01 = 'João' . " " . 'de Souza';<br />
        $string02 = "João";<br />
        $string02 .= " " . 'de Souza';<br />
        $nome = 'Jackson Douglas'; <br />
        $sobrenome = 'de Souza'; <br />
        $nomeCompleto = $nome . " " . $sobrenome; <br />
      </p>
    </code>
  </section>
  <br />
  <br />


  <!-- CÓDIGO PHP -->

  <?php

  echo 'CONCATENAÇÃO DE STRINGS <br /> <br />';

  $string01 = 'João' . " " . 'de Souza';
  $string02 = "João";
  $string02 .= " " . 'de Souza';
  $nome = 'Jackson Douglas';
  $sobrenome = 'de Souza';
  $nomeCompleto = $nome . " " . $sobrenome;

  echo '<br />';
  echo '=> ', $string01, '<br />';
  echo '=> ', $string02, '<br />';
  echo '=> ', $nomeCompleto, '<br /> ';
  ?>

  <!-- CONTINUAÇÃO HTML5 -->
  <h3>Diferença entre ' $variavel ' e " $variavel "</h3>
  <section id="cd">
    <code class="codes">
      <p>
        $nome = 'Jackson Douglas'; <br />
        $sobrenome = 'de Souza'; <br />
        $nomeCompleto = "$nome $sobrenome"; <br />
      </p>
    </code>
  </section>
  <p>
    Note que as aspas duplas permite a concatenação de duas variáveis sem a atribuição de sinais.
  </p>
  <br />

  <!-- CÓDIGO PHP -->

  <?php
  $nome = 'Jackson Douglas';
  $sobrenome = 'de Souza';
  $nomeCompleto = "$nome $sobrenome";

  echo '=>', $nomeCompleto, '<br />';

  ?>

  <!-- CONTINUAÇÃO HTML5 -->
  <h3>HEREDOC and NOWDOC </h3>
  <section id="cd">
    <code class="codes">
      <p>
        $nomeCliente = 'Jackson Douglas de Souza'; <br />
        $telefoneCliente = '(21) 99168 8978' <br />
        $emailCliente = 'douglas.jackson@pucpr.edu.br' <br />

        $textoApresentação = <<< LABEL Olá senhor, $nomeCliente. Suas informações foram armazenadas com sucesso. Fone: $telefoneCliente. Email: $emailCliente. LABEL; </p>
    </code>
  </section>
  <p>
    Apesar de não ser muito comum eles serem usados, esses métodos podem ser aproveitados para fazermos o tratamento de maiores blocos de texto.<br />
    Sendo que o HEREDOC permite fazer a " parse = Concatenação " de variáveis.
  </p>

  <!-- CÓDIGO PHP -->

  <?php
  $nomeCliente = 'Jackson Douglas de Souza';
  $telefoneCliente = '(21) 99168 8978';
  $emailCliente = 'douglas.jackson@pucpr.edu.br';
  #TIPO HEREDOC 
  $textoApresentação = <<<LABEL
  Olá senhor, $nomeCliente. Suas informações foram armazenadas com sucesso. <br />
  Fone: $telefoneCliente. <br />
  Email: $emailCliente.
  LABEL;

  echo '<br />', $textoApresentação;
  echo '<br />';
  echo '<br />';

  $nomeCliente = 'Jackson Douglas de Souza';
  $telefoneCliente = '(21) 99168 8978';
  $emailCliente = 'douglas.jackson@pucpr.edu.br';

  #TIPO NOWDOC
  $textoApresentação = <<<'LABEL'
  Olá senhor, $nomeCliente. Suas informações foram armazenadas com sucesso. <br />
  Fone: $telefoneCliente. <br />
  Email: $emailCliente.
  LABEL;
  echo 'O tipo NOWDOC não permite a concatenação de variáveis ao texto. <br />';
  echo '<br />', $textoApresentação;


  ?>

</body>

</html>
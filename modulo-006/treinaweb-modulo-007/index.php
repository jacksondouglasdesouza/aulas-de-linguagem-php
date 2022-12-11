    <?php
    require_once "./src/Classes/Cliente.php";
    require_once "./src/Classes/Produto.php";
    require_once "./funcoes.php";


    $produtoId__001 = new Produto;
    $produtoId__001->titulo = "Coca-Cola";
    $produtoId__001->descricao = "Tome Coca-Cola!";
    $produtoId__001->preco = 5.50;

    row();
    var_dump($produtoId__001);
    row();

    $produtoId__002 = new Produto;
    $produtoId__002->titulo = "Guaraná";
    $produtoId__002->descricao = "O verdadeiro guaraná.";
    $produtoId__002->preco = 4.85;

    var_dump($produtoId__002);
    row();

    $clienteId__001 = new Cliente;
    $clienteId__001->nome = "Jackson Douglas";
    $clienteId__001->idade = 36;
    $clienteId__001->endereco =
        "Rua da Paixão, 34, bela vista são paulo - SP";
    $clienteId__001->telefone = "(21) 38569-8965";
    $clienteId__001->comprar();

    row();
    var_dump($clienteId__001);
    row();

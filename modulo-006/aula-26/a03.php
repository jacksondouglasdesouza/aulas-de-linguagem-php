<?php

function row()
{
    echo "<br />";
}

function row2()
{
    echo "<br /><br />";
}

// ****** CLASS PAI ****** //

class Retangulo
{
    public $largura;
    public $altura;

    function __construct($a_largura, $a_altura)
    {
        $this->largura = $a_largura;
        $this->altura = $a_altura;
    }

    function calcularArea()
    {
        $area = $this->largura * $this->altura;
        return "A área é de: {$area} m²";
        row();
    }
}

// ****** PHP Override Method ****** //

class Quadrado extends Retangulo
{
    function __construct($a_largura)
    {
        parent::__construct($a_largura, $a_largura);

        /* OU 
         * Retangulo::__construct($a_largura, $a_largura);
        */
    }
}

$novoRetangulo = new Retangulo(10, 25);
$novoQuadrado = new Quadrado(5);

echo $novoQuadrado->calcularArea();
row2();
echo $novoRetangulo->calcularArea();
row();

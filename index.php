<?php
require_once "autoload.php";

$x = new SON\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();

/*
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Wesley", 30);
$pessoa2 = new Pessoa("Maria", 20);

echo $pessoa1->correr(50);


//heran?a*
echo "<p> --- </p>";
echo "<p>HERAN?A</p>";
require_once "Produto.php";
require_once "Tenis.php";

$tenis = new Tenis();
if ($tenis instanceof Tenis) {
    echo "� um tipo de Tenis";
}else{
    echo "N�o � um tipo de Tenis";
}

echo "<p>INTERFACE</p>";
//$tenis = new TenisAdidas();
//$tenis->getCor();

//$tenis2 = new Sapatenis();
//$tenis2 = getCor();
//$tenis2 = getTamanho();

$produto = new Produto();

$produto
        ->setNome("Tenis Exemplo")
        ->setDescricao("Essa � a Descri��o")
        ->setEstoque(10)
        ->setValor(1000)
;
*/
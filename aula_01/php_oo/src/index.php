<a href="../../../index.php">home</a>
<br><br><br>
<hr>
<?php

require_once "classes/produto.php";
require_once "classes/cliente.php";
require_once "classes/fornecedor.php";

$prod1 = new Produto;
$prod1->titulo = "skol";
$prod1->descricao ="cerveja brasileira";
$prod1->preco = 2.50;

$prod2 = new Produto;
$prod2->titulo = "itaipava";
//$prod2->descricao = "cerveja brasileira";
$prod2->preco = 1.40;

var_dump($prod1);
var_dump($prod2);

$cli = new Cliente;
$cli->nome = "ivyrson";
$cli->idade = "21";
$cli->endereco = "Av.Litoranea";
$cli->telefone = "998774199";

var_dump($cli);

$cli->comprar();

$nomeClasse = "cliente";

$instancia = new $nomeClasse;  
var_dump($instancia); 

$cli2 = new $cli;

$cli3 = new $cli;

var_dump($cli);
var_dump($cli2);
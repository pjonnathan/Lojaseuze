<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar produto');

use \App\Entity\Produto;
$obProduto = new Produto;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['preco'],$_POST['validade'],$_POST['estoque'],$_POST['categoria'],$_POST['localizacao'])){

  $obProduto->nome    = $_POST['nome'];
  $obProduto->preco = $_POST['preco'];
  $obProduto->validade     = $_POST['validade'];
  $obProduto->estoque     = $_POST['estoque'];
  $obProduto->categoria     = $_POST['categoria'];
  $obProduto->localizacao     = $_POST['localizacao'];
  $obProduto->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
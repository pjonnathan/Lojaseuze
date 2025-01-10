<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar produto');

use \App\Entity\Produto;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$obProduto = Produto::getProduto($_GET['id']);

//VALIDAÇÃO DA VAGA
if(!$obProduto instanceof Produto){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['preco'],$_POST['validade'],$_POST['estoque'],$_POST['categoria'],$_POST['localizacao'])){

  $obProduto->nome    = $_POST['nome'];
  $obProduto->preco = $_POST['preco'];
  $obProduto->validade     = $_POST['validade'];
  $obProduto->estoque     = $_POST['estoque'];
  $obProduto->categoria     = $_POST['categoria'];
  $obProduto->localizacao     = $_POST['localizacao'];
  $obProduto->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Produto{

  /**
   * Identificador único da produto
   * @var integer
   */
  public $id;

  /**
   * Título da produto
   * @var string
   */
  public $nome;

  /**
   * Descrição da produto (pode conter html)
   * @var string
   */
  public $preco;

  /**
   * Descrição da produto (pode conter html)
   * @var string
   */
  public $validade;

  /**
   * Descrição da produto (pode conter html)
   * @var string
   */
  public $estoque;

  /**
   * Descrição da produto (pode conter html)
   * @var string
   */
  public $categoria;

  /**
   * Descrição da produto (pode conter html)
   * @var string
   */
  public $localizacao;


  /**
   * Método responsável por cadastrar uma nova produto no banco
   * @return boolean
   */
  public function cadastrar(){
    
    //INSERIR A VAGA NO BANCO
    $obDatabase = new Database('produtos');
    $this->id = $obDatabase->insert([
                                      'nome'    => $this->nome,
                                      'preco' => $this->preco,
                                      'validade'     => $this->validade,
                                      'estoque'      => $this->estoque,
                                      'categoria' => $this->categoria,
                                      'localizacao' => $this->localizacao
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a produto no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('produtos'))->update('id = '.$this->id,[
                                                                'nome'    => $this->nome,
                                      'preco' => $this->preco,
                                      'validade'     => $this->validade,
                                      'estoque'      => $this->estoque,
                                      'categoria' => $this->categoria,
                                      'localizacao' => $this->localizacao
                                                              ]);
  }

  /**
   * Método responsável por excluir a produto do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('produtos'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as produtos do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getProdutos($where = null, $order = null, $limit = null){
    return (new Database('produtos'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma produto com base em seu ID
   * @param  integer $id
   * @return Produto
   */
  public static function getProduto($id){
    return (new Database('produtos'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}
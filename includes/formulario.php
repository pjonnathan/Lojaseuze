<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3"><?=TITLE?></h2>

  <form method="post">

    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" value="<?=$obProduto->nome?>">
    </div>

    <div class="form-group">
      <label>Preço</label>
      <input type="text" class="form-control" name="preco" value="<?=$obProduto->preco?>">
    </div>

    <div class="form-group">
      <label>Validade</label>
      <input type="date" class="form-control" name="validade" value="<?=$obProduto->validade?>">
    </div>

    <div class="form-group">
      <label>Estoque</label>
      <input type="text" class="form-control" name="estoque" value="<?=$obProduto->estoque?>">
    </div>

    <div class="form-group">
      <label>Categoria</label>
      <input type="text" class="form-control" name="categoria" value="<?=$obProduto->categoria?>">
    </div>

    <div class="form-group">
      <label>Localizaçao Pratileira</label>
      <input type="text" class="form-control" name="localizacao" value="<?=$obProduto->localizacao?>">
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

</main>
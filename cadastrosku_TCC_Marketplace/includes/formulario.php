<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastrar item</h2>

    <form method="post">

        <div class="form-group">
            <label>CNPJ Seller</label>
            <input type="text" class="form-control" name="cnpj">
        </div>    
        
        <div class="form-group">
            <label>Nome Item</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label>Código Sku Seller</label>
            <input type="text" class="form-control" name="codigo">
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <input type="text" class="form-control" name="categoria">
        </div>

        <div class="form-group">
            <label>Fabricante</label>
            <input type="text" class="form-control" name="fabricante">
        </div>

        <div class="form-group">
            <label>Modelo (m)</label>
            <input type="text" class="form-control" name="modelo">
        </div>

        <div class="form-group">
            <label>Largura (m)</label>
            <input type="text" class="form-control" name="largura">
        </div>

        <div class="form-group">
            <label>Comprimento (m)</label>
            <input type="text" class="form-control" name="comprimento">
        </div>

        <div class="form-group">
            <label>Altura (m)</label>
            <input type="text" class="form-control" name="altura">
        </div>

        <div class="form-group">
            <label>Peso (kg)</label>
            <input type="text" class="form-control" name="peso">
        </div>   

        <div class="form-group">
            <label>Quantidade em estoque</label>
            <input type="text" class="form-control" name="estoque">
        </div>

        <div class="form-group">
            <label>Preço (R$)</label>
            <input type="text" class="form-control" name="preco">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea type="text" class="form-control" rows=5 name="descricao"></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n"> Inativo
                    </label>
                </div>
            </div>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>  
    </form>
</main>
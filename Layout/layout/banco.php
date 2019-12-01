<!--Para adicionar banco-->
<article id ="form_add_banco" class="container">
    <form method="post" action="interface/inserir_banco.php">
    <legend>Adicionar Banco</legend>
    <div class="row">
        <div class="col-12 col-md-3 offset-md-3">
            <div class="form-group">
                <label for="nome">Nome do Banco</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome">
                
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Código">                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="form-group">
                <label for="descricao">Descrição/Observação</label>
                <textarea name="descricao" id="descricao" class="form-control" rows="5" placeholder="Digite uma descrição/observação"></textarea>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <button class="btn btn-danger btn-lg mr-5">Apagar</button>
        <button class="btn btn-primary btn-lg">Inserir</button>
    </div>        
    <form>
</article>
    
    
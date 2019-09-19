<!--Para realizar adição de uma pessoa ou correntista-->
<article id ="form_add_correntista" class="container">
    <form>
    <legend>Adicionar Cliente</legend>
    <div class="row">
    	<div class="col-12 col-md-6 offset-md-3">
        	<div class="form-group">
         		<label for="nome">Nome</label>
            	<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Cliente"/>
            </div>
        </div>
    </div>
    <div id="fones" class="row">
        <div class="col-12 col-md-3 offset-md-3">
            <div class="form-group">
            	<label for="fone_01">Número Telefone</label>
                <input type="text" name="fone_01" id="fone_01" class="form-control" placeholder="00 00000-0000" />
            </div>
        </div>
		<div class="col-11 col-md-3">
        	<div class="form-group">
            	<label for="obs_01">Observação</label>
                <input type="text" name="obs_01" id="obs_01" class="form-control" placeholder="...." />
            </div>                    
        </div>
        <div class="col-1 col-md-3 p-4">
        	<button type="button" id="add_fone" class="btn btn-danger btn-lg" data-qtd="1">+</button>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <button type="reset" class="btn btn-danger btn-lg mr-4">Apagar</button>
        <button type="submit" class="btn btn-primary btn-lg">Inserir</button>
    </div>    
    </form>
</article>
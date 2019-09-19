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
    <div class="row">
    	<div class="col-12 col-md-2 offset-md-3">
        	<div class="form-group">
                <label for="banco">Banco</label>
                    <select name="banco" class="form-control">
                        <option value="0">Selecione</option>
                        <option value="1">Banco 1</option>
                        <option value="2">Banco 2</option>
                        <option value="3">Banco 3</option>
                    </select>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
                <label for="agencia">Agência</label>
                    <select name="agencia" class="form-control">
                        <option value="0">Selecione</option>
                        <option value="1">Agência 1</option>
                        <option value="2">Agência 2</option>
                        <option value="3">Agência 3</option>
                    </select>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="cheque">Conta</label>
            	<input type="text" name="cheque" id="cheque" class="form-control" placeholder="00000000000"/>
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
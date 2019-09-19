<!--Para criar lote de cheque-->
<article class="container">
	<form>
	<legend>Adicionar Cheque</legend>
    <div class = "row">
    	<div class="col-sm-9 offset-sm-3">
        	<h4>Correntista</h4>
        </div>
    	<div class="col-12 col-md-4 offset-md-3">
        	<div class="form-group">
         		<label for="nome">Nome</label>
            	<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Correntista"/>
            </div>
        </div>
        <div class="col-11 col-md-2">
        	<div class="form-group">
         		<label for="cpf">CPF</label>
            	<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00"/>
            </div>
        </div>
        <div class="col-1 col-md-3 p-4">
        	<button type="button" class="btn btn-default">
            	<i class="material-icons">search</i>
            </button>
        </div>             
    </div>
    <div class="row">
       <div class="col-sm-9 offset-sm-3">
        	<h4>Cheque</h4>
        </div>
       <div class="col-12 col-md-2 offset-md-2">
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
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="cheque">Número do Cheque</label>
            	<input type="text" name="cheque" id="cheque" class="form-control" placeholder="00000000000"/>
            </div>
        </div>        
    </div>
    <div class="row">
    	<div class="col-12 col-md-2 offset-md-3">
        	<div class="form-group">
         		<label for="valor">Valor</label>
            	<input type="text" name="valor" id="valor" class="form-control" placeholder="000,000"/>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="valor">Data</label>
            	<input type="date" name="data" id="data" class="form-control"/>
            </div>
        </div>
		<div class="col-12 col-md-2">
        	<div class="form-group">
                <label for="agencia">
                	Situação
                </label>
                <select name="agencia" class="form-control">
                    <option value="0">Selecione</option>
                    <option value="1">Pré-Datado</option>
                    <option value="2">Sacado</option>
                    <option value="3">Depositádo</option>
                    <option value="4">Outro</option>
                </select>
            </div>
		</div>
    </div>
    <div class="row justify-content-center mb-5">
        <button type="reset" class="btn btn-danger btn-lg mr-4">Apagar</button>
        <button type="submit" class="btn btn-primary btn-lg">Inserir</button>
    </div>   
    </form>        
</article>
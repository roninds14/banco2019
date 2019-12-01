<!--Para realizar adição de uma pessoa ou correntista-->
<article id ="form_add_correntista" class="container">
    <form method="post" action="interface/inserir_correntista.php">
    <legend>Adicionar Correntista</legend>
    <div class="row">
    	<div class="col-12 col-md-6 offset-md-3">
        	<div class="form-group">
         		<label for="nome">Nome</label>
            	<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Correntista"/>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-12 col-md-6 offset-md-3">
        	<div class="form-group">
         		<label for="cpf">CPF</label>
            	<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00"/>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-12 col-md-2 offset-md-3">
        	<div class="form-group">
                <label for="banco">Banco</label>
                    <select id="banco" name="banco" class="form-control">
                        <option value="0">Selecione</option>
                        <?php
							require_once "../interface/select_banco.php";
						?>	
                    </select>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
                <label for="agencia">Agência</label>
                    <select id="agencia" name="agencia" class="form-control">
                    	<option value='0'>Selecione o Banco</option>                        
                    </select>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="tipo_conta">Tipo de Conta</label>
            	 <select id="tipo_conta" name="tipo_conta" class="form-control">
                        <option value="1">Conta Corrente</option>
                        <option value="2">Poupança</option>                        
                 </select>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="num_conta">Número</label>
            	<input type="text" name="num_conta" id="num_conta" class="form-control" placeholder="00000000000"/>
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
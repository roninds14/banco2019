<!--Para criar lote de cheque-->
        <article id ="form_add_bordero" class="container">
        	<div class="row center">
            	<h4>Formulário para criar os lotes de cheque</h4>
            </div>
        	<div class = "row">
            	 <div class="input-field col s3 offset-s4">
                    <input id="nome_cliente_busca" type="text">
                    <label for="nome_cliente_busca">Nome</label>
                </div>                
                <a class="btn-floating btn-large waves-effect waves-light blue modal-trigger"  href="#cliente">
                	<i class="material-icons">search</i>
                </a>               
            </div>
            <div class="row">
            	<div class="input-field col s4 offset-s4">
                    <textarea id="descricao_lote" class="materialize-textarea"></textarea>
                    <label for="descricao_lote">Descrição do lote</label>
                </div>
            </div>
            <div id="cliente" class="modal">
                <table class="striped centered">
                	<tr>
                    	<td>Nome Cidadão 1</td>
                        <td>Cadastrado em dd/mm/aa</td>                        
                    </tr>
                    <tr>
                    	<td>Nome Cidadão 1</td>
                        <td>Cadastrado em dd/mm/aa</td>                        
                    </tr>
                    <tr>
                    	<td>Nome Cidadão 1</td>
                        <td>Cadastrado em dd/mm/aa</td>                        
                    </tr>
                </table>
            </div>
            <div class = "row" style="text-align:center">
            	Dados do cliente selecionado
            </div>
            <div class = "row">
            	 <div class="input-field col s3 offset-s3">
                    <input id="numero_cheque" type="text">
                    <label for="numero_cheque">Número do Cheque</label>
                </div>
                <div class="input-field col s3">
                    <input id="data_cheque" type="date">
                    <label for="data_cheque">Data do Cheque</label>
                </div>
            </div>
            <div class = "row">
            	 <div class="input-field col s3 offset-s3">
                    <input id="bom_para" type="date">
                    <label for="bom_para">Bom para</label>
                </div>
                <div class="input-field col s3">
                    <input id="valor_cheque" type="text">
                    <label for="valor_cheque">Valor</label>
                </div>
            </div>
            <div class = "row">
            	<button class="btn btn-large waves-effect waves-light blue inserir col s4 offset-s4" type="button" name="inserir_banco">Inserir
                	<i class="material-icons right">send</i>
               	</button>
            </div>        
        </article>
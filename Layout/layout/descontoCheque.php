<!--Para realizar o desconto de um cheque-->
        <article id = "descontar_cheque" style="display:none" >
        	<div>
                <p>Nome: <span id = "descontar_nome"></span></p>
                <p>CPF: <span id = "descontar_cpf"></span></p>
                <p><span id = "descontar_banco"></span></p>
                <p>Agência: <span id = "descontar_agencia"></span></p>
                <p>Cheque número: <span id = "descontar_numero"></span></p>
                <p>Valor: R$ <span id = "descontar_valor"></span></p>
                <p>Data do Cheque: <span id = "descontar_data"></span></p>
                <p>Bom para: <span id="descontar_bom"></span></p>
            </div>
            <form>
                <div class="row">
                    <div class="input-field col s2 offset-s1">
                        <input id="data_para_desconto" type="date" class="validate">
                        <label for="data_para_desconto">Data para o desconto</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="taxa_desconto" type="text">
                        <label for="taxa_desconto">Taxa (%)</label>
                    </div>
                     <div class="input-field col s2">
                        <input disabled value="00,00" id="valor_desconto" type="text" class="validate">
          				<label for="valor_desconto">Desconto</label>
                    </div>
                     <div class="input-field col s2">
                        <input disabled value="00,00" id="valor_liquido" type="text" class="validate">
          				<label for="valor_liquido">Líquido</label>
                    </div>
                    <div clas="col s2">
                    	<button id="descontar" class="btn waves-effect waves-light blue" type="button" name="descontar">Descontar
    						<i class="material-icons right">send</i>
  						</button>
                    </div>
                </div>
            </form>
        </article>      
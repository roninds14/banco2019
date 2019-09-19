   <!-- Apresentação dos Dados Solicitados -->
    	<article id = "dados" class = "container">
        	<div class = "row dados_correntista dados">
                <div class="col-auto">Nome: Fulano de Tal</div>
                <div class="col-auto ml-auto"><code>Cadastrado: dd/mm/aa</code></div>
                <div class="col-12 dados_correntista dados">CPF: 000.000.000-00</div>
                <div class="col-12 dados_correntista dados">Telefone(s):(00 00000-0000)</div>
            </div>
            <div class="row dados_banco dados_agencia dados">          
                <div class="col-12">Nome do Banco</div>
            </div>
            <div class="row dados_agencia dados">
            	<div class="col-12">Agência: 000.000</div>
                <div class="col-12">Telefone(s): (00 00000-0000)</div>           
            </div>
            <div class="row dados_cheque dados">
                <div class="col-12">Cheque n°: 000.000.000</div>
           	</div>
             <div class="row dados_data dados">
                <div class="col-12">Cheques do dia: dd/mm/aa</div>
            </div>
            
            <a id="btn_voltar" class="waves-effect waves-light btn blue dados"><i class="material-icons left">arrow_back</i>Voltar</a>           
        </article>
        
        <article id="tabela_resultado" class="container">
	        <form id = "controle_pesquisa" class="form-inline" style = "margin-bottom:10px">
                <div class = "col-auto">
                    Mostar
                    <select class="custom-select">
                        <option selected value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    resultados
                </div>
                <div class="input-group ml-auto">                	
                	 <div class="input-group-prepend">
                		<div class="input-group-text"><i class="material-icons">search</i></div>
                	</div>
                    <input type="text" class="form-control" id="buscar" placeholder="Procurar">                   
                </div>
			</form>
            
            <div id = "tabela_ultimos_lancamentos" class="row">                
                <!-- Tabela ùltimos registros -->
                <table id="tabela_geral" class="col table table-striped table-hover tabela_sort">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Lotes</th>
                            <th>Data</th>
                            <th>Valor Total</th>
                            <th>Taxa</th>
                            <th>Valor do desconto</th>
                            <th>Valor Líquido</th>
                        </tr>
                    </thead>
                
                    <tbody>
                    	<tr>
                        	<td>Alberto Roberto</td>
                            <td>Lote 001</td>
                            <td>25/01/19</td>
                            <td>100,00</td>
                            <td>2,50</td>
                            <td>20,00</td>
                            <td>80,00</td>
                        </tr>
                        <tr>
                        	<td>Rodrigo Santos</td>
                            <td>Lote 002</td>
                            <td>30/05/10</td>
                            <td>50,00</td>
                            <td>2,00</td>
                            <td>5,00</td>
                            <td>45,00</td>
                        </tr>
                        <tr>
                        	<td>Limão Soares</td>
                            <td>Lote 003</td>
                            <td>29/11/11</td>
                            <td>550,00</td>
                            <td>3,00</td>
                            <td>50,00</td>
                            <td>500,00</td>
                        </tr>
                        <tr>
                        	<td>Brain Oliveira</td>
                            <td>Lote 004</td>
                            <td>15/12/18</td>
                            <td>880,00</td>
                            <td>4,00</td>
                            <td>80,00</td>
                            <td>800,00</td>
                        </tr>
                        <tr>
                        	<td>Oliver Silva Santos</td>
                            <td>Lote 005</td>
                            <td>13/05/17</td>
                            <td>95,00</td>
                            <td>5,00</td>
                            <td>5,00</td>
                            <td>90,00</td>
                        </tr>
                        <tr>
                        	<td>Alberto Roberto</td>
                            <td>Lote 006</td>
                            <td>25/01/19</td>
                            <td>100,00</td>
                            <td>2,50</td>
                            <td>20,00</td>
                            <td>80,00</td>
                        </tr>
                        <tr>
                        	<td>Rodrigo Santos</td>
                            <td>Lote 007</td>
                            <td>30/05/10</td>
                            <td>50,00</td>
                            <td>2,00</td>
                            <td>5,00</td>
                            <td>45,00</td>
                        </tr>
                        <tr>
                        	<td>Limão Soares</td>
                            <td>Lote 008</td>
                            <td>29/11/11</td>
                            <td>550,00</td>
                            <td>3,00</td>
                            <td>50,00</td>
                            <td>500,00</td>
                        </tr>
                        <tr>
                        	<td>Brain Oliveira</td>
                            <td>Lote 009</td>
                            <td>15/12/18</td>
                            <td>880,00</td>
                            <td>4,00</td>
                            <td>80,00</td>
                            <td>800,00</td>
                        </tr>
                        <tr>
                        	<td>Oliver Silva Santos</td>
                            <td>Lote 010</td>
                            <td>13/05/17</td>
                            <td>95,00</td>
                            <td>5,00</td>
                            <td>5,00</td>
                            <td>90,00</td>
                        </tr>
                        <tr>
                        	<td>Brain Oliveira</td>
                            <td>Lote 011</td>
                            <td>15/12/18</td>
                            <td>880,00</td>
                            <td>4,00</td>
                            <td>80,00</td>
                            <td>800,00</td>
                        </tr>
                        <tr>
                        	<td>Oliver Silva Santos</td>
                            <td>Lote 012</td>
                            <td>13/05/17</td>
                            <td>95,00</td>
                            <td>5,00</td>
                            <td>5,00</td>
                            <td>90,00</td>
                        </tr>
                    </tbody>
                </table>
        	            	
            </div>
            
            <div id = "rodape_tabela" class="row">
                <div class = "col-auto">
                    Mostrando de <span id ="INICIO"></span> a <span id = "FIM"></span> de <span id = "TOTAL"></span> resultados
                </div>
                <div class="col-auto ml-auto">                    
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                    </ul>
                </div>
			</div>   
            
        </article>  
<!DOCTYPE html>
<html lang="br"><head>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css/dataTables.bootstrap.mim.css" rel="stylesheet">   
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    
    <meta charset="utf-8"/>
    
    <title>Master Cheques</title>
    
    <style>
		// *{ border:#FF0 medium solid}
		.oculto{ display:none }
		.dados{ display:none }
		nav{margin-top:48px }
    </style>
    
</head>

<body>	
    <?php
	
	require_once "layout/cabecalho.php";
    
	?>   
        
    <section style="margin-top:120px">
    	
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
        
        <!--Para realizar adição de uma pessoa ou correntista-->
        <article id ="form_add_correntista" class="dados" style="display:none">
        	<div class="row center">
            	<h5>Formulário para adicionar cliente/correntista</h5>
            </div>
            <div class = "row">
                <div class="input-field col s3 offset-s4">
                    <input id="nome_correntista" type="text">
                    <label for="nome_correntista">Nome completo</label>
                </div>                
            </div>
            <div class="row">
            	<div class="input-field col s1 offset-s4">
                    <input id="telefone_correntista_01" type="text" placeholder="00 00000-0000">
                    <label for="telefone_correntista_01">Número Telefone</label>
                </div>
                <div class="input-field col s2">
                    <input id="obs_telefone_01" type="text">
                    <label for="obs_telefone_01">Observação</label>
                </div>
                <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
            </div>
            <div class="row center">
				<h5>Preencha os campos abaixos para correntista</h5>
            </div>
            <div class = "row">
            	 <div class="input-field col s2  offset-s3">
                    <input id="numero_cpf" type="text">
                    <label for="numero_cpf">Número do CPF</label>
                </div>
                 <div class="col s2">
                    <label>Banco</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Selecione o Banco</option>
                        <option value="1">Banco 1</option>
                        <option value="2">Banco 2</option>
                        <option value="3">Banco 3</option>
                    </select>
                </div>
                 <div class="col s2">
                    <label>Agência</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Selecione a Agência</option>
                        <option value="1">Agência 1</option>
                        <option value="2">Agência 2</option>
                        <option value="3">Agência 3</option>
                    </select>
                </div>
            </div>           
            <div class="row">              
	            <div class="col s4 offset-s4">
                    <button class="btn btn-large waves-effect waves-light blue inserir right" type="button" name="inserir_banco">Inserir
                            <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </article>
        
        <!--Para adicionar banco-->
        <article id ="form_add_banco" class="dados" style="display:none">
        	<div class="row center">
            	<h4>Formulário para adicionar banco</h4>
            </div>
            <div class = "row">
            	<div class="input-field col s2 offset-s4">
                	<input id="nome_banco" type="text">
                	<label for="nome_banco">Nome do Banco</label>
            	</div>
                <div class="input-field col s1">
                	<input id="codigo_banco" type="text">
                	<label for="codigo_banco">Código do Banco</label>
            	</div>
            </div>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s3 offset-s4">
                            <textarea id="descricao_banco" class="materialize-textarea"></textarea>
                            <label for="descricao_banco">Descrição</label>
                        </div>
                    </div>
                </form>
  			</div>
            <div class="row">
            	<div class="col s3 offset-s4">
                    <button class="btn btn-large waves-effect waves-light blue inserir right" type="button" name="inserir_banco">Inserir
                            <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </article>
        
        <!--Para adicionar agência-->
        <article id ="form_add_agencia" class="dados" style="display:none">
        	<div class="row center">
            	<h4>Formulário para adicionar agência</h4>
            </div>
            <div class = "row">
                <div class="col s2 offset-s4">
                    <label>Banco</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Selecione o Banco</option>
                        <option value="1">Banco 1</option>
                        <option value="2">Banco 2</option>
                        <option value="3">Banco 3</option>
                    </select>
                </div>
                <div class="input-field col s2">
                    <input id="numero_agencia" type="text">
                    <label for="numero_agencia">Número da Agência</label>
                </div>
            </div>
            <div class="row">
            	<div id = "telefone_agencia_00" class="col s12">
                    <div class="input-field col s1 offset-s4">
                        <input id="telefone_00" type="text" placeholder="00 00000-0000">
                        <label for="telefone_00">Número Telefone</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="obs_telefone_00" type="text">
                        <label for="obs_telefone_00">Observação</label>
                    </div>                    
                </div>
                <div id = "telefone_agencia_01" class="col s12">
                    <div class="input-field col s1 offset-s4">
                        <input id="telefone_01" type="text" placeholder="00 00000-0000">
                        <label for="telefone_01">Número Telefone</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="obs_telefone_01" type="text">
                        <label for="obs_telefone_01">Observação</label>
                    </div>                    
                </div>
                <div id = "telefone_agencia_02">
                    <div class="input-field col s1 offset-s4">
                        <input id="telefone_02" type="text" placeholder="00 00000-0000">
                        <label for="telefone_02">Número Telefone</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="obs_telefone_02" type="text">
                        <label for="obs_telefone_02">Observação</label>
                    </div>                    
                </div>
                <a class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>                
            </div>
            <div class="row">
                <div class="col s4 offset-s4">
                    <button class="btn btn-large waves-effect waves-light blue inserir right" type="button" name="inserir_banco">Inserir
                        <i class="material-icons right">send</i>
                    </button>
               </div>
            </div>            
        </article>
        
        <!--Para criar lote de cheque-->
        <article id ="form_add_bordero" class="dados" style="display:none">
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
        
        <!--Mostar ModeloER -->
        <article id ="form_add_mostar_modeloER" class="dados container" style="display:none">
            <div class="row">
                <div class="col">
                    <img class = "img-fluid" src="modeloEr.png" />
                </div>
            </div>
            <div class = "row">
            	<button class="btn btn-large inserir col" type="button" name="inserir_banco">
                	Voltar
                    <i class="material-icons right">send</i>
               	</button>
            </div>  
        </article>
        
    </section>   
    
</body>
    
    <!--CDN to JQuery -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
   		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
	<script type="text/javascript" src="js/script.js" ></script>
    <script type="text/javascript" src="js/tableSort.js"></script>

</html>
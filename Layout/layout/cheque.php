<?php 
if ( session_status() !== PHP_SESSION_ACTIVE )
	session_start();	  
?>

<!--Para criar lote de cheque-->
<article class="container">
	<form method="post" action="interface/inserir_cheque.php">
	<legend>Adicionar Cheque</legend>
    <div class = "row">
    	<div class="col-sm-9 offset-sm-3">
        	<h4>Correntista</h4>
        </div>
    	<div class="col-12 col-md-4 offset-md-2">
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
        	<button id="buscar_correntista" type="button" class="btn btn-default abrir_modal" data-toggle="modal" data-target="#modalExemplo">
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
                    	<option value="0">Selecione</option>                       
                    </select>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="conta">Conta</label>
            	<select id="conta" name="conta" class="form-control">
                      <option value="0">Selecione</option>  
                </select>
            </div>            
        </div>        
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="cheque">Número</label>
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
                <label for="situacao">
                	Situação
                </label>
                <select name="situacao" class="form-control">
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
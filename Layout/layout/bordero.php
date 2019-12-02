<!--Para criar lote de cheque-->
<article id ="form_add_bordero" class="container">
    <form method="post" action="interface/inserir_bordero.php" >
    <legend>Criar Borderô</legend>
    <div class="row">
    	<div class="col-12 col-md-3 offset-md-3">
        	<div class="form-group">
         		<label for="nome">Nome</label>
            	<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Cliente"/>
            </div>
        </div>
        <div class="col-12 col-md-3">
        	<div class="form-group">
         		<label for="descricao">Descrição</label>
            	<input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição"/>
            </div>
        </div>
    </div>
    <h4 class="col-12 col-md-9 offset-md-3">Cheque</h4>
    <div class="row justify-content-center">
    	<table class="table table-hover">
        	<thead>
            	<tr>
                	<th scope="col">Número</th>
                    <th scope="col">Correntista</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Data</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody id="tb_bordero">
            	
           </tbody>
       </table>    
        	
    	<button id="procura_cheque" type="button" class="btn btn-info abrir_modal mr-4" data-toggle="modal" data-target="#modalExemplo">
			<i class="material-icons">search</i>        	
        </button>       
    </div>   
   
    <div id="row_bor" class="row justify-content-center mt-4" style="display:none">    	
    	<h4 class="col-12 col-md-9 offset-md-3">Bordero</h4>
        
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="bruto">Bruto</label>
            	<input id="bruto" name="bruto" type="text" class="form-control" placeholder="0,00" readonly/>
            </div>
        </div>
        
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="desconto">Desconto</label>
            	<input id="desconto" name="desconto" type="text" class="form-control" placeholder="0,00" readonly/>
            </div>
        </div>
        
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="liquido">Liquido</label>
            	<input id="liquido" name="liquido" type="text" class="form-control" placeholder="0,00" readonly/>
            </div>
        </div>
        
    	<div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="valor">Taxa</label>
            	<input type="text" name="taxa" id="taxa" class="form-control" placeholder="0,00"/>
            </div>
        </div>
        <div class="col-12 col-md-2">
        	<div class="form-group">
         		<label for="valor">Data</label>
            	<input type="date" name="data" id="data" class="form-control"/>
            </div>
        </div>
		<div class="col-12 col-md-2 sr-only">
        	<input id="ids" name="ids" type="text"  class="form-control"/>            
		</div>       
        
        <div class="col-12"></div>
        
        <button type="submit" class="btn btn-success abrir_modal " data-toggle="modal" data-target="#modalExemplo">
			<i class="material-icons">send</i>
        </button>
    </div>
        
    </form>        
</article>
<!--Para criar lote de cheque-->
<article id ="form_add_bordero" class="container">
    <form>
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
    	<button type="button" class="btn btn-info abrir_modal mr-4" data-toggle="modal" data-target="#modalExemplo">
			<i class="material-icons">search</i>        	
        </button>
        <button type="button" class="btn btn-success abrir_modal " data-toggle="modal" data-target="#modalExemplo">
			<i class="material-icons">add</i>
        </button>
    </div>    
    </form>        
</article>
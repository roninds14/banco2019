<?php 
if ( session_status() !== PHP_SESSION_ACTIVE )
	session_start();	  
?>


<!--Para adicionar agência-->
<article id ="form_add_agencia" class="container">
    <form method="post" action="interface/inserir_agencia.php">
    <legend>Adicionar Agência</legend>    
    <div class = "row">
       <div class="col-12 col-md-3 offset-md-3">
        	<div class="form-group">
                <label for="banco">Banco</label>
                    <select name="banco" class="form-control">
                        <option value="0">Selecione o Banco</option>
                        <?php
							require_once "../interface/select_banco.php";
						?>						
                    </select>
            </div>
        </div>
        <div class="col-12 col-md-3">
        	<div class="form-group">
            	<label for="num_agencia">Agência</label>
                <input type="text" name="num_agencia" class="form-control" placeholder="0000-0"/>
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
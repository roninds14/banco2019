<!--Para realizar adição de uma pessoa ou correntista-->
<article id ="form_add_correntista" class="container">
    <form>
    <legend>Logar!</legend>
    <div class="row">    	
        <div class="col-12 col-md-4 offset-md-4">
        	<div class="form-group">
         		<label for="usuario">E-mail / CPF</label>
            	<input type="text" name="usuario" id="usuario" class="form-control" placeholder="E-mail ou CPF"/>
            </div>
        </div>
    </div>    
    <div class="row">
    	<div class="col-12 col-md-4 offset-md-4">
        	<div class="form-group">
         		<label for="senha">Senha</label>
            	<input type="password" name="senha" id="senha" class="form-control"/>
            </div>
        </div>        
    </div>    
    <div class="row mb-5">
    	<small class="col-12 col-md-4 offset-md-4"><a href="#">Me Esqueci-me minha senha!</a></small>
    </div>
    <div class="row justify-content-center mb-5">        
        <button type="submit" class="btn btn-primary btn-lg">Logar</button>
    </div>    
    </form>
</article>
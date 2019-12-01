<!--Para realizar adição de uma pessoa ou correntista-->
<article id ="form_add_correntista" class="container">
    <form method="post" action="interface/cadastar.php">
    <legend>Seja Bem Vindo!</legend>
    <div class="row">
    	<div class="col-12 col-md-3 offset-md-3">
        	<div class="form-group">
         		<label for="nome">Nome</label>
            	<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Cliente" required="required"/>
            </div>
        </div>
        <div class="col-12 col-md-3">
        	<div class="form-group">
         		<label for="cpf">CPF</label>
            	<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" required="required"/>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-12 col-md-3 offset-md-3">
        	<div class="form-group">
         		<label for="email">E-mail</label>
            	<input type="email" name="email" id="email" class="form-control" placeholder="usuarioo@servidor.aaa" required="required"/>
            </div>
        </div>
        <div class="col-12 col-md-3">
        	<div class="form-group">
         		<label for="re_email">Confirme o e-mail</label>
            	<input type="re_email" name="re_email" id="re_email" class="form-control" placeholder="usuarioo@servidor.aaa" required="required"/>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-12 col-md-3 offset-md-3">
        	<div class="form-group">
         		<label for="senha">Senha</label>
            	<input type="password" name="senha" id="senha" class="form-control" required="required">
            </div>
        </div>
        <div class="col-12 col-md-3">
        	<div class="form-group">
         		<label for="re_senha">Confirme senha</label>
            	<input type="password" name="re_senha" id="re_senha" class="form-control" required="required"/>
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
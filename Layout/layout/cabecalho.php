
<!-- Cabeçalho-->
    <div class="container">
        <?php
				
			if( !isset( $_SESSION['logado'] ) ) {
		
		?>
        
        <form class="form-inline">
        	<div class="col-auto" style="padding:5px 0">
        		<button class="btn btn-outline-success" type="button" data-tipo="cadastrar">Cadastrar</button>
        	</div>
            
            <div class="col-auto ml-auto">Bem vindo ao seu guia de <strong>Borderô</strong></div>
            
            <div class = "col-auto">
        		
                <button class="btn btn-sm btn-outline-secondary" type="button" data-tipo="login">Login</button>
        	</div>
        </form>
        <?php 
		}		
		?>
    </div>	
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-success col">	
		<a class="navbar-brand mb-0 h1" href="#">
        	<img src="img/logo.png" width="110" height="auto" alt="Logo Master Cheques">
           	Master Cheques
        </a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    
    	<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    		<ul class="navbar-nav">
    			<li class="nav-item">
    				<a class="nav-link <?= isset( $_SESSION['logado'] )? "": "active"; ?>" data-tipo="home" href="#">Home </a>
    			</li>
                <?php
				
				if( isset( $_SESSION['logado'] ) ) {
				
				?>
				
                <li class="nav-item"><a class="nav-link <?= isset( $_SESSION['logado'] )? "active": ""; ?>" data-tipo="lancamentos" href="#">Últimos Lançamentos </a></li>
				
    			<li class="nav-item dropdown">
    				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Inserir
                    </a>
    				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
    					<a class="dropdown-item adicionar" href="#" data-tipo="cliente">
                        	<i class="material-icons">how_to_reg</i>
                            Cliente
                        </a>
    					<a class="dropdown-item" href="#" data-tipo="correntista">
                        	<i class="material-icons">face</i>
                            Corentista
                        </a>
    						<div class="dropdown-divider"></div>
    					<a class="dropdown-item" href="#" data-tipo="banco">Banco</a>
                        <a class="dropdown-item" href="#" data-tipo="agencia">Agência</a>
                        <a class="dropdown-item" href="#" data-tipo="cheque">Cheque</a>                        
                        <a class="dropdown-item" href="#" data-tipo="modeloer">Modelo ER</a>
    				</div>
    			</li>
                <li class="nav-item">
    				<a class="nav-link" href="#" data-tipo="bordero">Criar Borderô </a>
    			</li>
                <?php
				}
				?>
                <li class="nav-item">
    				<a class="nav-link" href="#" data-tipo="quemsomos">Quem Somos </a>
    			</li>    			
    		</ul>    		
    	</div>
    </nav>
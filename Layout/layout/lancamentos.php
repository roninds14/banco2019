   <?php 
   if ( session_status() !== PHP_SESSION_ACTIVE )
	    session_start();	  
    ?>
   
   
   <!-- Apresentação dos Dados Solicitados -->
    	<article id = "dados" class = "container">
        	<div class = "row dados_correntista dados">
                <div class="col-12">
                    <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4"><?php $hora = date('H'); if( intval( $hora ) < 16 ) echo "Bom dia, "; else if( intval( $hora ) < 20 ) echo "Boa tarde, "; else echo "Boa noite, "; echo $_SESSION['dados']['usu_nome']."!"; ?></h1>
                        <p class="lead">CPF: <?= $_SESSION['dados']['usu_cpf']?></p>
                        
                        <p class="lead">E-mail: <?= $_SESSION['dados']['usu_email']?></p>
                        
                        <p class="lead">Telefones: <?= $_SESSION['dados']['telefones']?></p>
                        
                        <p class="lead">Data do Cadastro: <?= date_format( date_create( $_SESSION['dados']['data_cadastro'] ), "d/m/Y" );?></p> 
                        
                        <form method="post" action="interface/logout.php">
                        	<button id='logout' type = "submit" class="btn btn-danger">Sair</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        
        <article id="tabela_resultado" class="container">
        	<div id = "tabela_ultimos_lancamentos" class="row"> 
        		<h4 class="col-12 col-md-9 offset-md-3">Cheques</h4>
                <!-- Tabela ùltimos registros -->
                <?php 
					require_once "interface/busca_cheque_.php";
				?>     	            	
            </div>
            <div id = "tabela_ultimos_lancamentos" class="row"> 
        		<h4 class="col-12 col-md-9 offset-md-3">Borderos</h4>
                <!-- Tabela ùltimos registros -->
                <table id="tabela_bordero" class="col table table-striped table-hover tabela_sort">
                    <thead>                        
                    </thead>                
                    <tbody>                    	
                    </tbody>
                </table>        	            	
            </div>
        </article>  
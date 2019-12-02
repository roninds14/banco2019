<?php 
session_start();

//session_destroy();

?>


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
		nav{margin-top:48px }
    </style>
    
<?php
    if( isset( $_SESSION['bad_login'] ) ){
?>
	<script type="text/javascript"> alert("Erro ao Logar"); </script>
<?php 
	unset( $_SESSION['bad_login'] );
}

?>



<?php
    if( isset( $_SESSION['cadastro'] ) ){
		if( $_SESSION['cadastro'] ){
?>
			<script type="text/javascript"> alert("Cadastro efetuado com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao cadastrar!"); </script>
<?php
		}
		
		unset( $_SESSION['cadastro'] );
	}

?>

<?php
    if( isset( $_SESSION['cliente'] ) ){
		if( $_SESSION['cliente'] ){
?>
			<script type="text/javascript"> alert("Cliente inserido com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao cadastrar o cliente!"); </script>
<?php
		}
		
		unset( $_SESSION['cliente'] );
	}

?>

<?php
    if( isset( $_SESSION['banco'] ) ){
		if( $_SESSION['banco'] ){
?>
			<script type="text/javascript"> alert("Banco inserido com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao cadastrar o banco!"); </script>
<?php
		}
		
		unset( $_SESSION['banco'] );
	}

?>

<?php
    if( isset( $_SESSION['agencia'] ) ){
		if( $_SESSION['agencia'] ){
?>
			<script type="text/javascript"> alert("Agência inserida com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao cadastrar agência!"); </script>
<?php
		}
		
		unset( $_SESSION['agencia'] );
	}

?>

<?php
    if( isset( $_SESSION['correntista'] ) ){
		if( $_SESSION['correntista'] ){
?>
			<script type="text/javascript"> alert("Correntista inserida com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao cadastrar o correntista!"); </script>
<?php
		}
		
		unset( $_SESSION['correntista'] );
	}

?>

<?php
    if( isset( $_SESSION['cheque'] ) ){
		if( $_SESSION['cheque'] ){
?>
			<script type="text/javascript"> alert("Cheque inserido com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao cadastrar o cheque!"); </script>
<?php
		}
		
		unset( $_SESSION['cheque'] );
	}

?>

<?php
    if( isset( $_SESSION['bordero'] ) ){
		if( $_SESSION['bordero'] ){
?>
			<script type="text/javascript"> alert("Borderô criado com sucesso!"); </script>
<?php 
		}else{
?>
			<script type="text/javascript"> alert("Erro ao criar bordero!"); </script>
<?php
		}
		
		unset( $_SESSION['bordero'] );
	}

?>
    
</head>

<body>	
    <?php
	
		require_once "layout/cabecalho.php";
    
	?>           
    <section style="margin-top:120px">    	
        <?php		

			if( isset( $_SESSION['logado'] ) )
				require_once "layout/lancamentos.php";
			else
				require_once "layout/home.php";
        
		?>        
    </section>
    
    <?php
	
		//require_once "layout/rodape.php";
    
	?> 
    
    <div id="modalExemplo" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Título do modal</h5>
            <button id="close_modal" type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">            
          </div>
          <!--
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
          </div> 
          -->
        </div>
      </div>
    </div> 
</body>
    
    <!--CDN to JQuery -->    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
   		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js" ></script>
    <script type="text/javascript" src="js/tableSort.js"></script>
    
    <?php 
		if( !isset($_SESSION["logado"] ) ) {
	?>
    <script type="text/javascript">
		$(window).scroll(function(){
		
		var scrollMargin = 48 - parseInt($(document).scrollTop() );
		
		if( scrollMargin > 0 )
			$("nav").css("margin-top", scrollMargin + "px" );
		else
			$("nav").css("margin-top", "0" );
	});
	</script>
    <?php 
	}else{
	?>
    <script type="text/javascript">
    	$(document).ready(function(e) {
            $("nav").css("margin-top", "0" );
        });
    </script>
    <?php } ?>
    </html>
    </script>

</html>
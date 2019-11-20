// JavaScript Document[
$(document).ready(function() {			           
	var teste;
	
	criar_matriz( "tabela_geral" );
	
	$('#modalExemplo').on('shown.bs.modal', function () {
  		$('.abrir_modal').trigger('focus')
	});
	
	$( ".nav-item").children("a").click(function(){
				
		if( $(this).attr("id") != "navbarDropdown" ){
		
			$(".nav-item").children("a").each(function( ) {
				$(this).removeClass("active");
			});
			
			$(this).addClass("active");
		}
	});
	
	$( "body" ).on( "click", ".dropdown-item, .nav-link, .btn-outline-success, .btn-outline-secondary",function(){
		if( !$(this).attr("data-tipo") ) return;		
		
		var url = "layout/"+$(this).attr("data-tipo") + ".php";
		
		$.post( url , function( data, status ){
			if( status == "success"){
				$("section").empty();
				
				$("section").append( data );
			}		
		});	
	});
	
	$("body").on("click", "#add_fone",function(){
		var qtd = parseInt( $(this).attr("data-qtd") );
		
		qtd++;
		
		if(qtd>4) return;		
		
		$(this).parent().parent().append('<div class="col-12 col-md-3 offset-md-3"><div class="form-group"><label for="fone_0'+qtd+'">Número Telefone</label><input type="text" name="fone_0'+qtd+'" id="fone_0'+qtd+'" class="form-control fones" placeholder="00 00000-0000" /></div></div><div class="col-11 col-md-3"><div class="form-group"><label for="obs_0'+qtd+'">Observação</label><input type="text" name="obs_0'+qtd+'" id="obs_0'+qtd+'" class="form-control" placeholder="...." /></div></div><div class="col-1 col-md-3 p-4"><button type="button" id="add_fone" class="btn btn-danger btn-lg" style="display:inherit" data-qtd="'+qtd+'">+</button></div>');
		
		$(this).remove();
	});
	
	$("td").click(function(){
		if( $(this).attr( "data-tipo") != null ){					
			
			var mostrar = ".dados_" + $(this).attr( "data-tipo");
			
			var mostrar_tabela = ".dados_tabela_" + $(this).attr( "data-tipo");
			
			$(".dados").css("display","none");				
			
			$( mostrar ).css("display","flex");
			
			$("#btn_voltar").css("display","inline-block");
			
			if( $(this).siblings(".desconto").children("i").html() != "cancel" )
				$( mostrar_tabela ).css("display","table-cell");
		}			
	});
	
	$("body").on("click","#btn_voltar",function(){
		$.post( "layout/home.php" , function( data, status ){
			if( status == "success"){
				$("section").empty();
				
				$("section").append( data );
			}		
		});
	});
	
	$(".desconto").click(function(){
		if( $(this).children("i").html() == "cancel" ){
			$(".dados").css("display","none");	
			$("#tabela_resultado").css("display","none");
		
			teste = $(this).siblings();
			teste[10] = $(this);
			
			$("#descontar_nome").html( $( teste[0] ).html() );
			$("#descontar_banco").html( $( teste[1] ).html() );
			$("#descontar_agencia").html( $( teste[2] ).html() );
			$("#descontar_numero").html( $( teste[3] ).html() );
			$("#descontar_valor").html( $( teste[4] ).html() );
			$("#descontar_data").html( $( teste[5] ).html() );
			$("#descontar_bom").html( $( teste[6] ).html() );
			
			$("#descontar_cheque").css("display","block");
		}
	});
	
	$("#descontar").click(function(){
			$( teste[10] ).children("i").html("check_circle");
			
			$(".dados").css("display","none");	
			$("#descontar_cheque").css("display","none");
			$("#tabela_resultado").css("display","block");
	});
	
	$(".inserir").click(function(){					
			$(".dados").css("display","none");	
			$("#descontar_cheque").css("display","none");
			$("#tabela_resultado").css("display","block");
	});
	
	$(".adicionar").click(function(){
		$(".dados").css("display","none");	
		$("#descontar_cheque").css("display","none");
		$("#tabela_resultado").css("display","none");
		
		var mostrar = "#form_add_" + $(this).attr("data-tipo");
		
		$( mostrar ).css("display","block");			
		
	});
});

$(window).scroll(function(){
    
	var scrollMargin = 48 - parseInt($(document).scrollTop() );
	
	if( scrollMargin > 0 )
		$("nav").css("margin-top", scrollMargin + "px" );
	else
		$("nav").css("margin-top", "0" );
    
});
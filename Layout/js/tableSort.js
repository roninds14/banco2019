// JavaScript Document
// Scripit para ordenar uma tabela
var linha = [];

var inicio = 1;

var fim = 10;

var total;

$(document).ready(function() {
		
	$("th").click(function(){
		$("th").children("i").html("import_export");
		
		var num = ( parseInt( $( this ).attr("data-ordem") ) + 1 ) % 3;
		
		$("th").attr("data-ordem", "0" );	
		
		$(this).attr("data-ordem", num );
		
		if( num == 0 )
			$( this ).children("i").html("import_export");
		else if ( num == 1 )
			$( this ).children("i").html("arrow_downward");
		else 
			$( this ).children("i").html("arrow_upward");			
		
		ordenar( $(this).parent("tr").parent("thead").parent("table").attr("id") , num , $(this).attr("data-filho") );		
		
	});
	
	$("#controle_pesquisa").children("div").children(".custom-select").change(function(){
		fim = $( this ).val();
		
		if( fim < linha.length )
			$("#FIM").html( fim );
		else
			$("#FIM").html( linha.length );
			
		ordenar( $( this ).parent("div").parent("form").siblings("div").children("table").attr("id"), 0, 0 );
	});
	
	$("#buscar").keyup(function(){
		var tabela = $( this ).parent("div").parent("form").siblings("div").children("table").children("tbody");
		
		var cont = 0;
		
		$( tabela ).html("");
		
		for( var i = 0; i < linha.length; i ++){
			var texto = linha[i].toString();
			
			texto = texto.toLowerCase();
			
			if( texto.includes( $(this).val().toLowerCase() ) ){
				for( var j = 0; j < linha[ i ].length; j++ )			
					texto += "<td>"+ linha[i][j] +"</td>";		
				
				$( tabela ).append( "<tr>"+ texto +"</tr>");
				
				y = $( tabela ).children("tr").last();
				
				texto = "";
				
				cont++;
				
				total = cont;
		
				if( total < parseInt( $("#controle_pesquisa").children("div").children(".custom-select").val() ) ){
					$("#FIM").html( total );
					$("#TOTAL").html( total );
					
					fim = total;
				}
				else{
					$("#TOTAL").html( total );
					$("#FIM").html( $("#controle_pesquisa").children("div").children(".custom-select").val() );
					
					fim = parseInt( $("#controle_pesquisa").children("div").children(".custom-select").val() );
				}
				
				if( cont < inicio || cont > fim )
					$( y ).css("display","none");
			}						
		}
		
	});   
});

function criar_matriz( id ){	
	
	var primeiraLinha = $("#" + id ).children("thead").children("tr").children();
	
	for( var i = 0; $( primeiraLinha[i] ).html(); i++ ){
		$( primeiraLinha[i] ).html( $( primeiraLinha[i] ).html() + ' <i class="material-icons float-right">import_export</i>' );
		
		$( primeiraLinha[i] ).attr("data-filho", i );
		
		$( primeiraLinha[i] ).attr("data-ordem", "0" );
	
	}	
	
	var coluna = [];	
	
	var x = $( "#" + id ).children("tbody").children("tr");
	
	for( var i = 0; $( x[i] ).children().html() ; i++ ){
		
		var y = $( x[i] ).children();			
		
		for( var j = 0; $( y[j] ).html()  ; j++){		
			coluna[j] = $( y[j] ).html();			
			
			linha[i] = coluna;
		}
		
		coluna = [];
	}
	
	for( var i = 0; i <= x.length; i++ )
		if( i > 9 )
			$( x[i] ).css("display", "none");
	
	total = x.length;
	
	$("#INICIO").html( inicio );
	$("#FIM").html( fim );
	$("#TOTAL").html( total );
	
};

function ordenar( id, ordem, local ){		
	
	var temp = linha.slice();
	
	var texto;
	
	if( local && ordem )
		inverter( temp, local );	
	
	if( ordem == 1 )		
		temp.sort( verifica_tipo );		
	if( ordem == 2){
		temp.sort( verifica_tipo );
		temp.reverse();
	}
	
	if( local && ordem )
		inverter( temp, local );	
	
	$( "#" + id ).children("tbody").html("");	
	
	for( var i = 0; i < temp.length; i++ ){
		for( var j = 0; j < temp[ i ].length; j++ )			
			texto += "<td>"+ temp[i][j] +"</td>";		
				
		$( "#" + id ).children("tbody").append( "<tr>"+ texto +"</tr>");
		
		var y = $( "#" + id ).children("tbody").children("tr").last();
		
		texto = "";
		
		if( i + 1 < inicio || i + 1 > fim )
			$( y ).css("display","none");
		
	}	
};

function inverter( temp, local ){
	var troca;
	
	for( var i = 0; i < temp.length; i++ ){
		troca = temp[i][0];
		temp[i][0] = temp[i][local];
		temp[i][local] = troca;
	}		
};

function verifica_tipo( a, b ){
	var c;
	var d;
	
		
	if( /\d{2}\/\d{2}\/\d{2}/.test( a[0] ) && $("html").attr("lang") == "br" ){
		c = inverter_data( a[0] );
		d = inverter_data( b[0] );
	}
	
	if( !isNaN( Date.parse( c ) ) )
		return Date.parse( c ) > Date.parse( d )? 
			1 : Date.parse( c ) < Date.parse( d ) ? 
				-1 : 0;
	
	if( !isNaN( parseFloat( a[0] ) ) ){
		var e = a[0].replace(",",".");
		var f = b[0].replace(",",".");
				
		return parseFloat( e ) > parseFloat( f )? 
			1 : parseFloat( e ) < parseFloat( f ) ? 
				-1 : 0;
	}
	
	return a[0] > b[0] ? 
			1 : a[0] < b[0] ? 
				-1 : 0;
};

function inverter_data( a ){	
	var vetor = a.split("/");	
	
	return vetor[1] + "/" + vetor[0] + "/" + vetor[2];
};


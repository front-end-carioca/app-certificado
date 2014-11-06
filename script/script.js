// Starting file of script as JS

// Carregando minhas funções

// ------------------------------------------ //
//	Projeto: Certificado Front End Carioca 
//  Versão: v0.0.1 - boilerplate
//	Autor: Pedro Polisenso & André Vitor
//  Evento: Front End Carioca - 2014
// ------------------------------------------ //

$(document).ready(function(){
	AppCheckin();
	ObterCertificado();
});

// Iniciando uma função
function AppCheckin(){
	$('#checkin').click(function(){
		$('#Modal').css('display','block');
		var dados = $('#form-checkin').serialize();
		$.ajax({
		    type: 'POST',
		    dataType: 'text',
		    url: 'conection/RetornaDados.php',
		    async: true,
		    data: dados,

		    beforeSend: function(){
		    	//$('#load').html('<center><img src="assets/image/icon-load.gif"></center>');
		    },
		    
		    success: function(resp){
		    	var result = resp.split('|');
	    		$('#Name').html(result[0]);
	    		$('#rg').html(result[1]);
		    }

		});
	});				  
}

// Hidden na modal
function ObterCertificado(){
	$('#gerar').click(function(){
		$('#Modal').fadeOut(500);
	});
}
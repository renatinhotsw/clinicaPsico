$(function() {

    // Atribui evento e função para limpeza dos campos
    $('#busca').on('input', limpaCampos);

    // Dispara o Autocomplete a partir do segundo caracter
    $( "#busca" ).autocomplete({
	    minLength: 2,
	    source: function( request, response ) {
	        $.ajax({
	            url: "consulta.php",
	            dataType: "json",
	            data: {
	            	acao: 'autocomplete',
	                parametro: $('#busca').val()
	            },
	            success: function(data) {
	               response(data);
	            }
	        });
	    },
	    focus: function( event, ui ) {
	        $("#busca").val( ui.item.nome );
	        carregarDados();
	        return false;
	    },
	    select: function( event, ui ) {
	        $("#busca").val( ui.item.nome );
	        return false;
	    }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<a><b>Código do Paciente: </b>" + item.idAgend + "<br><b>Nome: </b>" + item.nome + " - <b> endereço: </b>" + item.endereco + "</a><br>" )
        .appendTo( ul );
    };

    // Função para carregar os dados da consulta nos respectivos campos
    function carregarDados(){
    	var busca = $('#busca').val();

    	if(busca != "" && busca.length >= 2){
    		$.ajax({
	            url: "consulta.php",
	            dataType: "json",	
	            data: {
	            	acao: 'consulta',
	                parametro: $('#busca').val()
	            },
	            success: function( data ) {
	               $('#codpac').val(data[0].idAgend);
	               $('#tipoConsulta').val(data[0].tipoConsulta);
	               $('#plano').val(data[0].plano);
	               $('#endereco').val(data[0].endereco);
	               $('#primeira').val(data[0].primeira);
	               $('#sessoes').val(data[0].sessoes);
	               $('#total').val(data[0].total);
	               $('#status').val(data[0].status);
	               $('#dataAtendimento').val(data[0].data_atendimento);
	               
	            }
	        });
    	}
    }

    // Função para limpar os campos caso a busca esteja vazia
    function limpaCampos(){
       var busca = $('#busca').val();

       if(busca == ""){
	   	   //$('#codigo_barra').val('');
           $('#codpac').val('');
           $('#tipoConsulta').val('');
           $('#plano').val('');
           $('#endereco').val('');
           $('#primeira').val('');
           $('#sessoes').val('');
           $('#sessoesrest').val('');
           $('#total').val('');
           $('#dataAtendimento').val('');
           $('#status').val('');
       }
    }
});
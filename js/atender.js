$(function(){
		function atender() { 
				
				var xmlhttp;

				var dadosajax ={
					'codpac' : $("#codpac").val(),
					'tipoConsulta' : $("#tipoConsulta").val(),
					'plano' : $("#plano").val(),
        			'plano' : $("#plano").val(),
        			'endereco' : $("#endereco").val(),
        			'primeira' : $("#primeira").val(),
        			'sessoes' : $("#sessoes").val(),
        			'total' : $("#total").val(),
        			'status' : $("#status").val(),
        			'dataAtemdimento' : $("#dataAtemdimento").val()
        		
				};

				pageurl = 'cadAtendimento.php';

				 $.ajax({
 
			        //url da pagina
			        url: pageurl,
			        //parametros a passar
			        data: dadosajax,
			        //tipo: POST ou GET
			        type: 'POST',
			        //cache
			        cache: false,
			        //se ocorrer um erro na chamada ajax, retorna este alerta
			        //possiveis erros: pagina nao existe, erro de codigo na pagina, falha de comunicacao/internet, etc etc etc
			        
			        //retorna o resultado da pagina para onde enviamos os dados
			        success: function(result)
			        { 
			            //se foi inserido com sucesso
			            if($.trim(result) == '1')
			            {
							  $('#codpac').val('');
         					  $('#tipoConsulta').val('');
					           $('#plano').val('');
					           $('#endereco').val('');
					           $('#primeira').val('');
					           $('#sessoes').val('');
					           $('#total').val('');
					           $('#dataAtendimento').val('');
					           $('#status').val('');
			            }
			            //se foi um erro
			            else
			            {
			                
			            }
			 
			        }
    			});	
				 alert("Paciente atendido com sucesso!");
		} 
});
	
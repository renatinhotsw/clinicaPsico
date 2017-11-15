
			function agendar() { 
				
				var xmlhttp;

				var dadosajax ={
					'nome' : $("#nome").val(),
        			'cpf' : $("#cpf").val(),
        			'endereco' : $("#endereco").val(),
        			'bairro' : $("#bairro").val(),
        			'cidade' : $("#cidade").val(),
        			'uf' : $("#uf").val(),
        			'tel' : $("#tel").val(),
        			'dtnasc' : $("#dtnasc").val(),
        			'dtcons' : $("#dtcons").val(),
        			'horario' : $("#horario").val(),
        			'primeira' : $("#primeira").val(),
        			'tipoconsulta' : $("#tipoconsulta").val(),
        			'plano' : $("#plano").val(),
        			'status' : $("#status").val(),
        			'sessoes' : $("#sessoes").val(),
        			'precoCons': $("#precoCons").val(),
        			'total' : $("#total").val()
        			
				};


				pageurl = 'cadastrar.php';

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
							alert("Paciente Agendado com sucesso!");

			            }
			            //se foi um erro
			            else
			            {
			             alert("Erro ao agendar paciente!");   
			            }
			 
			        }
    			});	
				 
				 
		} 
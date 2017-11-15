function habilitaagend(){
	
	//Encapsula o objeto select consulta
	var tipo = document.getElementById("tipoconsulta"); 

	var plano = document.getElementById("plano");
	
	var primeira = document.getElementById("primeira");
	
			$('#precoCons').val();	
			 $('#total').val();


		
		if(primeira.options[primeira.selectedIndex].value =='Não'){
				


			if(tipo.options[tipo.selectedIndex].value =='Particular'){
				

				plano.disabled=true;
			
			 	$('#precoCons').val(80.00);	
			 
			 	var qtdSessoes = $('#sessoes').val();

			 	$('#total').val(qtdSessoes * 80.00);

				 $( "#sessoes" )
	  				.focusout(function() {
	    			var qtdSessoes = $('#sessoes').val();
					$('#total').val(qtdSessoes * 80.00);
	    			
	  			});

			}else if(tipo.options[tipo.selectedIndex].value =='Plano'){
				plano.disabled=false;
				
				if(plano.options[plano.selectedIndex].value=="Unimed"){
					$('#precoCons').val(26.57);
					var qtdSessoes = $('#sessoes').val();
					$('#total').val(qtdSessoes * 26.57);

					 $( "#sessoes" )
	  				.focusout(function() {
	    			var qtdSessoes = $('#sessoes').val();
					$('#total').val(qtdSessoes  * 26.57);
	    			
	  			});



				}else if (plano.options[plano.selectedIndex].value=="Vitalis"){
					alert('Vitalis - Calculo Não Disponível');
				}else if (plano.options[plano.selectedIndex].value=="BrasilMed"){
					
					$('#precoCons').val(26.57);
					var qtdSessoes = $('#sessoes').val();
					$('#total').val(qtdSessoes * 26.57);

					 $( "#sessoes" )
	  				.focusout(function() {
	    			var qtdSessoes = $('#sessoes').val();
					$('#total').val(qtdSessoes  * 26.57);
					});
				}

			}
				
		}







}// NAO


	

		


			




			

		







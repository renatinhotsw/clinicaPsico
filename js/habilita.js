function habilita(){
	
	//Encapsula o objeto select consulta
	var tipo = document.getElementById("consulta"); 

	var plano = document.getElementById("plano");
	
	var primeira = document.getElementById("primeira"); 
	


	if(primeira.options[tipo.selectedIndex].value =='Não'){

		if(tipo.options[tipo.selectedIndex].value =='Particular'){
			plan.disabled=true;
			
			var precoCons = $('$precoCons');
			$('#precoCons').val(80.00);			

			var total = $('#total');
			var qtdSessoes = $('#sessoes').val();

			$('#total').val(150.00+(qtdSessoes * 80.00));

			$("#sessoes").click(function(){
				plan.disabled=true;
				var qtdSessoes = $('#sessoes').val();						

				$('#total').val(150.00+(qtdSessoes * 80.00));

			});


		}// fim particular com primeira ---- marcado

		

		if( (tipo.options[tipo.selectedIndex].value =='Plano') && (plano.options[plano.selectedIndex].value =='Unimed'))  {
				var valorCons = 26.33;
					
				$('#total').val(valorCons);
			
		}else if( (tipo.options[tipo.selectedIndex].value =='Plano') && (plano.options[plano.selectedIndex].value =='Vitalis') ){
				alert('Vitalis');
		}


	

			
			//primeira - desmarcado
	}else{	
			plan.disabled=false;
			
			if(tipo.options[tipo.selectedIndex].value =='Particular'){
				plan.disabled=true;
			
				var total = $('#total');
				var qtdSessoes = $('#sessao').val();

				$('#total').val(qtdSessoes * 80.00);
	
				$("#sessao").click(function(){
					
						var qtdSessoes = $('#sessao').val();					
						$('#total').val(qtdSessoes * 80.00);	
					
				});

			}else{
				if(plano.options[plano.selectedIndex].value =='Unimed'){
					alert('Unimed');
				}
			}

			
			
		
	}

	

















}// fim habilita

	


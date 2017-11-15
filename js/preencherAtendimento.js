function preencher(){
	
	//Encapsula o objeto select consulta
	var tipo = document.getElementById("tipoconsulta"); 

	var plano = document.getElementById("plano");
	
	var primeira = document.getElementById("primeira"); 
	
	
		if(tipo.options[tipo.selectedIndex].value =='Particular'){
			
			plano.disabled=true;
		

		}else{
			
			plano.disabled=false;

		}

		
	
	}


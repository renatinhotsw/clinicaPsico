var resultado = document.getElementById("info");

function agendar() { 
	
	var xmlhttp;
	
	 if(window.XMLHttpRequest) { 
		xmlhttp = new XMLHttpRequest; 
	} else { 
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
	} 
	
	var nome = document.getElementById("nome");
	var cpf = document.getElementById("cpf");
	var end = document.getElementById("endereco");
	var bairro = document.getElementById("bairro");
	var cidade = document.getElementById("cidade");
	var uf = document.getElementById("uf");
	var tel = document.getElementById("tel");
	var dtnasc = document.getElementById("dtnasc");
	var dtcons = document.getElementById("dtcons");
	var horario = document.getElementById("horario");

	var msg = "Paciente "+nome+ " gravado com sucesso!";


	xmlhttp.onreadystatechange = function() { 
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
			resultado.innerHTML = xmlhttp.responseText;
		} 



	} 
	xmlhttp.open("POST", "cadastrar.php",true); 
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(msg); 

} 
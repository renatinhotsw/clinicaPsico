var resultado = document.getElementById("info");

	function atualizar(){
		var xmlhttp;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		}

		xmlhttp.onreadystatechange=function(){
			if(this.readyState==4 && this.status ==200){
				resultado.innerHTML= this.responseText;
			}
		}
		xmlhttp.open("GET","servidor.php",true);
		xmlhttp.send();
	}
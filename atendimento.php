 <!DOCTYPE html>  

<html>
<head>
	
	<meta charset="utf-8">

	<title>Atendimento de Pacientes</title>

	<link rel="stylesheet" type="text/css" href="http://localhost/clinica/css/style.css">
	<script type="text/javascript" src="http://localhost/jquery/jquery-3.2.1.min.js"></script> 
	
	<script TYPE="text/javascript" src="http://localhost/clinica/js/habilita.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script type="text/javascript" src="http://localhost/clinica/js/atender.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	

</head>

<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo(a), <b> $login_cookie </b><br>";
     
    }
?>
<body>


	<hr>
	<div id="header">
	<header>
		<h3 align="center"> Atendimento de Pacientes </h1>
	</header>
	</div>
	<hr>

<div id="mainnav">
<?php 
include 'menu.html';
?>
</div>

  <hr>

	<div class='container'>
		
		
		<br>
		<div class="row">
			<div class="form-group col-md-6 col-md-offset-3">
			    <input type="text" class="form-control" id="busca" placeholder="Informe o Nome do Paciente">
			</div>
		</div>

		<header class="row">
			<h2 class='text-center text-danger'>Detalhes do Paciente</h2>
		</header>

		<br>
		<div class="row">
			<form>
				<div class="form-group col-md-3">
			        <label for="codpac">Código do Paciente</label>
			        <input type="text" class="form-control" id="codpac">
			    </div>

				<div class="form-group col-md-3">
			        <label for="tipoConsulta">Tipo da Consulta</label>
			        <input type="text" class="form-control" id="tipoConsulta">
			    </div>
			    	
			    <div class="form-group col-md-3">
			        <label for="exampleInputPassword1">Plano</label>
			        <input type="text" class="form-control" id="plano">
			    </div>

			    <div class="form-group col-md-3">
			        <label for="sessoes">Qtd.Sessões Incial</label>
			        <input type="text" class="form-control" id="sessoes">
			    </div>

			    <div class="form-group col-md-6">
			        <label for="endereco">Endereço</label>
			        <input type="text" class="form-control" id="endereco">
			    </div>
			    
			    <div class="form-group col-md-3">
			    	<label for="primeira">Primeira</label>
			        <input type="text" class="form-control" id="primeira">
			    </div>
			    
			    
			     <div class="form-group col-md-3">
			        <label for="sessoesrest">Qtd.Sessões Restantes</label>
			        <input type="text" class="form-control" id="sessoesrest">
			    </div>

			   
			    
			    <div class="form-group col-md-3">
			        <label for="status">Status</label>
			        <input type="text" class="form-control" id="status">
			    </div>


			    <div class="form-group col-md-3">
			        <label for="dataAtendimento">Data do Atendimento</label>
			        <input type="text" class="form-control" id="dataAtendimento">
				</div>

				 <div class="form-group col-md-3">
			        <label for="total">Total R$</label>
			        <input type="text" class="form-control" id="total">
			    </div>


			</form>
		</div>
	</div>
	
	
	<center>
	<button class="button" onclick="atender()">Atender</button>
	</center>
	
	</div>


	<div id="footer">
		<footer><center>Copyright &copy; Desenvolvido por @Vasconcellos	</center></footer>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script TYPE="text/javascript" src="http://localhost/clinica/js/custom.js"></script>
</body>
</html>
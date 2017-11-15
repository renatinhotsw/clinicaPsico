<DOCTYPE html>
<html>
<head>
	<title>Agendados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/agendados.css">
	<link rel="stylesheet" type="text/css" href="css/tabela.css">
	
	<script type="text/javascript" src="http://localhost/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="http://localhost/clinica/js/menufixo.js"></script>

	<script type="text/javascript" src="http://localhost/clinica/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://localhost/clinica/js/dataTableInitAtendidos.js"></script>
	<script type="text/javascript" src="http://localhost/clinica/js/jquery.dataTables.min.js"></script>

</head>

<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo(a), <b> $login_cookie </b><br>";
     
    }
?>
<hr>
<body>

<div class="container"></div>
	<header>
		<h3 align="center"> +Psico -Pacientes Atendidos </h1>
	</header>

	<hr>
	<div class="menu">
	<ul> 
    <li><a class="active" href="principal.php">Home</a></li> 
    <li><a href="agendados.html">Agendados</a></li>
	<li><a href="atendimento.php">Atendimento</a></li>
    <li><a href="">Relatórios</a> </li>
    <li><a href="index.php">Sair</a></li> 
  </ul>
</div>
  <hr>

<div id="info">
	<table id="atendidos" cellspacing="0">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo Consulta</th>
				<th>Plano</th>
				<th>Sessões</th>
				<th>Total</th>
				
			</tr>
		</thead>
		<tbody></tbody>
	</table>

</div>


<footer><center>Copyright &copy; - Desenvolvido por @Vasconcellos	</center></footer>
</body>
</html>
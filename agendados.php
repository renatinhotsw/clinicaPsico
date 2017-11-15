<?php

include "conexao.php";

$query = "SELECT horario,nome,YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dtnasc))) AS idade,endereco,telefone,plano,sessoes,DATE_FORMAT(dtcons, '%d/%m/%Y') AS data_agendamento,precoCons,total FROM agendamento order by idAgend";
$result = mysql_query($query);

?>


<DOCTYPE html>
<html>
<head>
	<title>Pacientes Agendados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/tabela.css">


<script type="text/javascript" src="http://localhost/clinica/js/idade.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.0/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



 
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
		<h3 align="center"> +Psico - Pacientes Agendados</h1>
	</header>
</div>
  <hr>

<div id="mainnav">
<?php 
include 'menu.html';
?>
</div>
	
<div class="container">

	<div class="table-responsive">
		<table id="agendados" class="table table-striped table-bordered">
    	<thead>
        <tr>
            <th>Horário</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Plano</th>
            <th>Sessões</th>
            <th>Data Consulta</th>
            <th>Preço Consulta</th>
            <th>Total</th>
        </tr>
        <tfoot>
            <tr>
              <th>Total</th>
          </tr>
        </tfoot>
   		</thead>
   		<?php 
   			while($row=mysql_fetch_array($result)){
   				echo '
   					<tr>
   						<td>'.$row["horario"].'</td>
   						<td>'.$row["nome"].'</td>
   						<td>'.$row["idade"].'</td>
   						<td>'.$row["endereco"].'</td>
   						<td>'.$row["telefone"].'</td>
              <td>'.$row["plano"].'</td>
   						<td>'.$row["sessoes"].'</td>
   						<td>'.$row["data_agendamento"].'</td>
              <td>'.$row["precoCons"].'</td>
              <td>'.$row["total"].'</td>

   					</tr>
   				';
   			}

   		?>
    	
		</table>
	</div>

</div>

<div id="footer">
	<footer><center>Copyright &copy; - Desenvolvido por @Vasconcellos	</center></footer>
<div>



<script type="text/javascript">
$(document).ready(function(){
    $('#agendados').DataTable({
      dom: 'Bfrtip',
      buttons: ['copy', 'excel', 'pdf']



    });
    


});


</script>



</body>


</html>



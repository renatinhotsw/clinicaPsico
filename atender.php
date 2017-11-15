<?php 

require "conexao.php";

$codPac = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$dtnasc = $_POST['dtnasc'];
$dtcons = $_POST['dtcons'];
$dataAtentimento = date('Y-m-d H:i');




$sql = "INSERT into atendimento(codPac,nome,endereco,cidade,dtnasc,dtcons,dataAtual) values";
$sql .= "('$codPac',$nome', '$endereco','$cidade','$dtnasc','$dtcons','$dataAtentimento')";

$result = mysql_query($sql);

if($result){
	echo("Paciente agendado com sucesso!");
}else{
	echo "Dados sobre o erro:" . mysql_error();
}
	

?>



<?php 

require "conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$tel = $_POST['tel'];
$dtnasc = $_POST['dtnasc'];
$dtcons = $_POST['dtcons'];
$horario = $_POST['horario'];
$dataAtual = date('Y-m-d H:i');
$primeira = $_POST['primeira'];
$tipoconsulta = $_POST['tipoconsulta'];

if($tipoconsulta =='Particular'){
	$plano = 'Particular';
}else{
	$plano = $_POST['plano'];
}


$status = $_POST['status'];
$sessoes = $_POST['sessoes'];
$precoCons = $_POST['precoCons'];
$total = $_POST['total'];


try{




$sql = "INSERT into agendamento(nome,cpf,endereco,bairro,cidade,uf,telefone,dtnasc,dtcons,horario,atendido,dataAtual,primeira,tipoConsulta,plano,status,sessoes,total,precoCons) values";
$sql .= "('$nome', '$cpf', '$endereco','$bairro','$cidade','$uf','$tel','$dtnasc','$dtcons','$horario','N','$dataAtual','$primeira','$tipoconsulta','$plano','$status','$sessoes','$total','$precoCons')";

$result = mysql_query($sql) or die(mysql_error());

echo "1"; //inserido com sucesso

}
catch(Exception $ex){
	echo "0"; //erro ao inserir
}


?>



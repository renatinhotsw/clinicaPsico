<?php 

require "conexao.php";

$codpac= $_REQUEST['codpac']; 
$tipoConsulta = $_REQUEST['tipoConsulta']; 
$plano = $_REQUEST['plano']; 
$endereco = $_REQUEST['endereco'];
$primeira = $_REQUEST['primeira'];
$sessoes = $_REQUEST['sessoes']; //qtd de sessoes
$total = $_REQUEST['total'];
$status = $_REQUEST['status'];
$dataAtendimento = $_REQUEST['dataAtendimento'];

try{

$sql = "INSERT into atendidos(codPac,tipoConsulta,plano,endereco,primeira,sessoes,total,status,dataAtendimento) values";
$sql .= "('$codpac', '$tipoConsulta','$plano','$endereco','$primeira','$sessoes','$total','$status','$dataAtendimento')";


$result = mysql_query($sql) or die(mysql_error());


$sqlu ="UPDATE agendamento set atendido ='S' where idAgend =$nomePac";
$resultu = mysql_query($sqlu) or die(mysql_error());

echo "1"; //inserido com sucesso

}
catch(Exception $ex){
	echo "0"; //erro ao inserir
}


?>



<?php 

require "conexao.php";

$nome = $_REQUEST['nome'];
$percent = $_REQUEST['percentual'];


try{

$sql = "INSERT into planos(nome,percentual) values";
$sql .= "('$nome', '$percent')";

$result = mysql_query($sql) or die(mysql_error());

echo "1"; //inserido com sucesso

}
catch(Exception $ex){
	echo "0"; //erro ao inserir
}


?>



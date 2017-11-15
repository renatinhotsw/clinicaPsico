<?php 

require "conexao.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];


try{

$sql = "INSERT into login(login,senha,email) values";
$sql .= "('$usuario', '$senha', '$email')";

$result = mysql_query($sql) or die(mysql_error());

header('location:login.html');	

}
catch(Exception $ex){
	echo "0"; //erro ao inserir
}


?>



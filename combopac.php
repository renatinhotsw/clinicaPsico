<?php

require "conexao.php";

$result = mysql_query("SELECT idAgend,nome, from agendamento");

	
		
	if($dados = mysql_query($result)){

		while($row=mysql_fetch_assoc($dados)){
			echo "<option value=".$row['nome']." </option>";
		}
	}


?>
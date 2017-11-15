<html>

<body>
<?php
	
	$conexao = mysql_connect("localhost","root","");
	mysql_select_db("clinica",$conexao);

	$sql = "select login,senha from login;";	
	$resultado = mysql_query($sql,$conexao);

	$rows = mysql_num_rows($resultado);

	
	//se o sql trouxe algum resultado
	if($rows > 0){
	
	//arquivo
		$xml = '<?xml version="1.0" encoding="utf-8"?>'."\n\t";
		//abre o arquivo se nao existir, cria
		$xml .= '<usuarios>'."\n\t";

		
	//for Percorrendo resultado e gravando os resultados do SQL no arquivo usuarios.xml
	for($i=0; $i<$rows;$i++){
		$login = mysql_result($resultado,$i,"login");
		$senha = mysql_result($resultado, $i,"senha");

		//Monta as tags do XML
		$xml .= "<usuario>"."\n\t";
		$xml .= "<login>$login</login>"."\n\t";
		$xml .= "<senha>$senha</senha>"."\n\t";
		$xml .= "</usuario>"."\n\t";

	}
	$xml .= "</usuarios>";
	
	//escreve no arquivo, se nao existir cria-o
	$fp = fopen('usuarios.xml', 'w+');
	fwrite($fp, $xml);
	fclose($fp);
	
	echo "Arquivo <b>".$fp."</b> foi gerado com sucesso!";

} // fecha if rows

	
?>
</body>
</html>
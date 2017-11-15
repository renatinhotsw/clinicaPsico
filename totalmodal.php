<?php

$total = 0;
$sessoes = 0; 
$precoCons = 0;



if($_POST['primeira']){$primeira = $_POST['primeira'];} else {$primeira = NULL;}
if($_POST['tipoconsulta']){$tipoconsulta = $_POST['tipoconsulta'];} else {$tipoconsulta = NULL;}

if($_POST['sessoes']){$sessoes = $_POST['sessoes'];} else {$sessoes = NULL;}

if( ($primeira == 'Não') && ($tipoconsulta =='Particular') ){
	$precoCons = 80;
	$total = calculaPart($sessoes,$precoCons);
	
}

function calculaPart($sessoes, $precoCons) {
    $total = $sessoes * $precoCons;
    
    return $total;
}

# Fazer inclusao dos dados no banco aqui

echo "Qtd.Sessões: $sessoes <br>";
echo "Valor Consulta: $precoCons <br>";
echo "Total: ";
echo calculaPart($sessoes, $precoCons);

?>
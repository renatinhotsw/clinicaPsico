<?php

$pdo = new PDO('mysql:host=localhost;dbname=clinica','root','');
$listar = $pdo->query("	select a.nome,b.tipoConsulta,b.qtd_sessoes,b.total
						from agendamento a, atendidos b
						where a.idAgend = b.codPac
                        ");


echo json_encode($listar->fetchAll(PDO::FETCH_OBJ));

?>
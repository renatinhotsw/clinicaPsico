<?php

$pdo = new PDO('mysql:host=localhost;dbname=clinica','root','');
$listar = $pdo->query("select * from agendamento where atendido='N' and dtcons <= NOW()");

echo json_encode($listar->fetchAll(PDO::FETCH_OBJ));

?>
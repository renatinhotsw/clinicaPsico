<?php
 
include "conexao.php";


  
$email = $_POST['email'];  
  


  $sql = "SELECT login,senha,email FROM LOGIN where email='$email'";
  $result = mysql_query($sql);

  $dados = mysql_fetch_array($result);

  $nome = $dados['login'];
  $senha = $dados['senha'];
  $emailsql = $dados['email'];

include "C:/xampp/htdocs/clinica/PHPMailer/src/Exception.php";
include "C:/xampp/htdocs/clinica/PHPMailer/src/PHPMailer.php";
include "C:/xampp/htdocs/clinica/PHPMailer/src/SMTP.php";
include "C:/xampp/htdocs/clinica/PHPMailer/src/POP3.php";



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Create a new PHPMailer instance
$mail = new PHPMailer(true);
// Set PHPMailer to use the sendmail transport
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'renatovascfarias@gmail.com';
$mail->Password = 'Ybr_12345';
$mail->Port = 587;
$mail->setFrom('renatovascfarias@gmail.com');
$mail->addReplyTo('renatovascfarias@gmail.com');
$mail->addAddress('renatinhotsw@gmail.com', '+PSICO-Sistemas');
$mail->isHTML(true);
$mail->Subject = 'Recuperação de Usuário e Senha +PSICO-Sistemas';
$mail->Body    = '<b>+PSICO-Sistemas - Recuperação de Usuário e Senha</b><br>Usuário: <b>'.$nome.'</b><br>Senha:<b>'.$senha.'</b>';
$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Usuário e Senha enviados, verifique sua caixa de entrada de emails.';
}


?>

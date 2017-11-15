<DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Pagina Inicial</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  

</head>


<body>

<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo(a), <b> $login_cookie </b><br>";
     
    }
?>


<hr>
<div id="header">
  <header>
    <h3 align="center"> +Psico  - Sistema Gerenciador de Clínica Psicológica </h1>
  </header>
</div>
<hr>


<div id="mainnav">
<?php 
include 'menu.html';
?>
</div>

 <div id="contents"></div>  

	 <hr>
   
   <div id="footer">
      <footer><center>Copyright &copy; - Desenvolvido por @Vasconcellos </center></footer>
    </div>

</body>
</html>
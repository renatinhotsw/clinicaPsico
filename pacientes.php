<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Agendar Pacientes</title>
<link rel="stylesheet" type="text/css" href="css/paciente.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript" src="http://localhost/clinica/js/cadastrar.js"></script>
<script type="text/javascript" src="http://localhost/clinica/js/habilitaagend.js"></script>
<script type="text/javascript" src="http://localhost/clinica/js/valida_cpf_cnpj.js"></script>

<script>
            $(function () {
                //Comportamento do botao de envio
                $('#agendar').click(function () {submit();});
                //Alteracao do comportamento do formulario de envio
                $("#dadosPac").submit(function (e) {e.preventDefault();});
                
            });
            //Funcao que faz o request
            function submit() {
                //Envia um request POST
                $.post(
                    $("#dadosPac").attr("action"),//Captura a action do FORM
                    $("#dadosPac").serialize(),//Captura os dados do FORM
                    //Captura a resposta do PHP
                    function (resp) {
                        //Passa a resposta pro corpo do MODAL
                        $('#modal-body').html(resp);
                        //Mostra o MODAL
                        $('#myModal').modal('show');

                        $('#dadosPac').each (function(){
  								this.reset();
							});
                    }

                );
            }

        </script>     


</head>

<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo(a), <b> $login_cookie </b><br>";
     
    }
?>

<body>
	<hr>
	<div id="header">
		<header>
			<h3 align="center"> Agendamento de Pacientes </h1>
		</header>
	</div>
	<hr>

	<ul> 
    	<li><a href="login.html">Sair</a></li> 
  </ul>


	<center>
	
	<div class='container'>
	<br>

	<div class="row">

	<form method="post" id="dadosPac" class="dadosPac" action="totalmodal.php">
		
		<br>
		<div class="row">
			<div class="form-group col-md-6 col-md-offset-3">
			    <label for="Primeira" align="left">Primeira:</label>
				
				<select  id="primeira" name="primeira"  onchange="habilitaagend()">	
					<option value="Sim">Sim</option>
					<option value="Não">Não</option>
				</select>		
			</div>

		</div>


		<div class="row">
			<h2 class='text-center text-danger'>Detalhes do Agendamento</h2>
		</div>

		<br>
		<div class="row">
				<div class="form-group col-md-3">

					<label for="tipoconsulta" align="left">Consulta:</label>
					<select class="form-control" id="tipoconsulta" name="tipoconsulta"  onchange="habilitaagend()" >	
								
					<option id="tipo" selected>Selecione o tipo da consulta</option>
					<option id="part">Particular</option>
					<option id="plan">Plano</option>
		
					</select><br>
				</div>
		
				<div class="form-group col-md-6">
			    	<label for="nome">Nome</label>
			        <input type="text" class="form-control" id="nome" required>
			    </div>

			    <div class="form-group col-md-3">
					<label for="cpf" align="left">CPF:</label>
					<input class="form-control" type="text" id="cpf" name="cpf" placeholder="Digite o CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
     				 title="Digite o CPF no formato nnn.nnn.nnn-nn" required><br>		
				</div>
			</div>
				


			    <div class="form-group col-md-3">

						<label for="plano">Plano:</label>
						<select class="form-control" id="plano" name="plano" disabled="true" onchange="habilitaagend()">
						<option value="" selected >Selecione o plano </option>
						<option value="Unimed">Unimed</option>		
						<option value="Vitalis">Vitalis</option>	
						<option value="BrasilMed">Brasil Med</option>	
						</select><br>
				</div>
			    
				<div class="form-group col-md-6">
					<label for="endereco">Endereço:</label> 
					<input class="form-control" type="text" id="endereco" name="endereco" placeholder="Digite o endereço" required>
				</div>

				
				<div class="form-group col-md-3">
				<label for="bairro">Bairro:</label> 
				<input class="form-control" type="text" id="bairro" name="bairro" placeholder="Digite o bairro" required><br>

			</div>


		<div class="form-group col-md-3">
			<label for="Cidade">Cidade:</label> 
			<select class="form-control" id="cidade" required>
			<option value ="Ituiutaba">Ituiutaba</option>
			<option value ="Capinópolis">Capinópolis</option>
			<option value ="Ipiaçu">Ipiaçu</option>
			<option value ="Santa Vitória">Santa Vitória</option>

		</select>
		</div>

		<div class="form-group col-md-3">

			<label for="uf"> UF </label> 
			<select class="form-control" id="uf" name="uf" required>
				<option value ="MG"> MG</option>
			</select>
		</div>

		<div class="form-group col-md-3">

			<label for="tel"> Telefone </label> 
			<input class="form-control" type="text" id="tel" name="tel" placeholder="Digite o telefone" required><br>
		</div>

		
		<div class="form-group col-md-3">
			<label for="dtNasc"> Data de Nascimento: </label> 
			<input class="form-control" type="Date" id="dtnasc" name="dtnasc" required><br>
		</div>

		<div class="form-group col-md-3">
			    	<label for="sessoes">Sessões</label>
			        <input type="text" class="form-control" id="sessoes" name="sessoes" required>
		</div>

			  

		<div class="form-group col-md-3">
			<label for="dataCons"> Data da Consulta: </label> 
			<input class="form-control" type="Date" id="dtcons" name="dtcons" required><br>
		</div>

		<div class="form-group col-md-3">
			<label for="horario"> Horário Atendimento: </label> 
			<input class="form-control" type="time" id="horario" name="horario" required>
			</div>
		
		<div class="form-group col-md-3">
			<label for="status"> Status</label> 
			<select  class="form-control" id="status" name="status" >	
					<option id="ativo" selected>Ativo</option>
					<option id="inativo" >Inativo</option>
				</select>		
			</div>

			
			<div class="form-group col-md-3">
			<label for="precoCons"> Valor da Consulta R$</label> 
			<input class="form-control" type="text" id="precoCons" name="precoCons" disabled ><br>
			</div>




			<div class="form-group col-md-3">
			<label for="total"> TOTAL R$</label> 
			<input class="form-control" type="text" id="total" name="total" disabled ><br>
			</div>



		</form>
		 <button type="button" id="agendar" onclick="agendar()" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Agendar</button>
	
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Valor total da Consulta R$</h4>
                        </div>
                        <div class="modal-body alert alert-success" id="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  

</div>
</center>
	

		</body>

		<script type="text/javascript">

		// Testando a validação usando jQuery
	$(function(){
 
    // ## EXEMPLO 3
    // Aciona a validação e formatação ao sair do input
    $('#cpf').blur(function(){
    
        // O CPF ou CNPJ
        var cpf_cnpj = $(this).val();
        
        // Testa a validação e formata se estiver OK
        if ( formata_cpf_cnpj( cpf_cnpj ) ) {
            $(this).val( formata_cpf_cnpj( cpf_cnpj ) );
        } else {
            alert('CPF inválido!');
        }
        
    });
 
});

		</script>
	
	
	<div id="footer">	
		<footer><center>Copyright &copy; Desenvolvido por @Vasconcellos	</center></footer>
	</div>

	
</html>


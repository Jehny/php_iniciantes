  <?php 

 	include_once 'header.php';

  ?>

   <script>
				function limpa() {

		                    if(document.getElementById('nameid').value!="") {
								document.getElementById('nameid').value="";
								document.getElementById('birthdayid').value="";
								document.getElementById('cpfid').value="";
								document.getElementById('emailid').value="";
								document.getElementById('endid').value="";
								document.getElementById('numid').value="";
								document.getElementById('notaid').value="";
								document.getElementById('telid').value="";                 }
								}   
			</script>
			<script >
				function envia(){
    				with(document.cadastro){    //função que envia o formulário
        			action = 'dados2.php';
        			submit();
   										}
								}
			</script>

	</head>

	<body>
		<div class="row">
			<div class="col-lg-3"></div>	
		</div>
		
        <div class="col-lg-9">           
	          <form name="cadastro" method="get" action="dados.php">
			  <legend>Cadastro de Usuário - PHP Teste</legend>
							
						<label>Nome</label> 
						<input type="text" name="nome" class="form-control" placeholder="Digite seu nome" id="nameid" required="Insira algo"/><br>

						<label>Data de Nascimento</label> 
						<input type="date" name="birthday" class="form-control" id="birthdayid" maxlength="10" required="Campo
							<Obrigatório"/><br>

						<label>CPF</label> 
						<input type="text" name="cpf" class="form-control" id="cpfid" maxlength="14" required="Campo
							<Obrigatório"/><br>

						<label>Email</label> 
						<input type="text" name="email" class="form-control" id="emailid" required="Campo
							<Obrigatório"/><br>		

						<label>Endereço</label> 
						<input type="text" name="endereco" class="form-control" id="endid" required="Campo
							<Obrigatório"/><br>		
									
						<label>Número</label> 
						<input type="number" name="numero" class="form-control" id="numid" required="Campo
							<Obrigatório"/><br>	

						<label>Telefone</label> 
						<input type="tel" name="tel" class="form-control" id="telid" required="Campo
							<Obrigatório"/><br>		

						<textarea class="form-control" rows="5" cols="30" id="notaid" placeholder="Nota"></textarea><br>
						

				<div class="col-lg-3">		
					<button class="btn btn-primary btn-lg btn-block" onclick="envia()">
						<span class="glyphicon glyphicon-ok-sign" ></span>Enviar           
					</button>
				</div>

				<div class="col-lg-3">		
					<button class="btn btn-primary btn-lg btn-block" onclick="limpa()">
						<span class="glyphicon glyphicon-ok-sign" ></span>Cancelar           
					</button><br>
				</div>		
			</form>
		</div>

	</body>


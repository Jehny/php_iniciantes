<?php
//TENHO Q INLCUIR O SUCESSO.PHP
//LÁ ESTÁ A CONEXAO
include_once 'sucesso.php';
include_once 'header.php';


/*echo $nome; 
echo "<br/>".$birthday;
echo "<br/>".$cpf;
echo "<br/>".$email;
echo "<br/>".$endereco;
echo "<br/>".$numero;
echo "<br/>".$tel;*/

//fazendo uma verificação se existe requisição de dados para essa página
if(isset($_POST)){

$nome = $_POST['nome']; 
$birthday = $_POST['birthday']; 
$cpf = $_POST['cpf']; 
$email = $_POST['email']; 
$endereco = $_POST['endereco']; 
$numero = $_POST['numero']; 
$telefone = $_POST['telefone']; 
$nota = $_POST['nota'];

//VOU SUBISTITUIR A VARIVEL TABLE PELO NOME DA SUA TABELA
//mudando o recebimento

$insert = 'INSERT INTO `cadastro` (`nome`, `dt_nascimento`, `cpf`, `email`, `endereco`, `numero`, `telefone` , `nota`)
 VALUES ("'.$nome.'", "'.$birthday.'", "'.$cpf.'", "'.$email.'", "'.$endereco.'", "'.$numero.'", "'.$telefone.'", "'.$nota.'") ';
//echo $insert;

	 //link é a variavel de conexao e estou passando o parametro insert q é uma string para nossa query
	 if ($link->query($insert)){//NESSA HORA ELE FOi ATE O BANCO, LEVOU TODOS OS DADOS E RECEBEU A RESPOSTA DE OK
	 	//se o resultado for verdadeiro...
	 	//header("Location: http://localhost/valida/cadastro.php?msg=cadastro_ok");
	 	echo "Dados Inseridos com sucesso";
	 	//saber qual o ultimo cadastro feito.
	 	//ter algo para buscar esse cadastro.
	 	//$id = mysql_insert_id();
	 }else{
	 	//funcao para informar o erro
	 	echo "<h2>Erro de cadstro</h2>" or die (mysqli_error());
	 }


 $select = 'SELECT *
	    FROM `cadastro` AS  Cadastro
	    WHERE Cadastro.`cpf` = 123 ';

	    if ($link->query($select)){
	     	echo "Dados selecionados";
		}else{
			echo "<h2>Erro no select </h2>" or die (mysqli_error());
		}

	$contact = $link->query($select);

}
?>

 


<!DOCTYPE html>
<html>
		<head>
			<title>Dados Pessoais</title>
			<meta charset="utf-8">

		</head>
		<body>

				<section id="d_pessoais">Dados Pessoais
				 	<table border="1px">
				   	    <tr>
					        <th>Nome</th>
					        <td><?php echo $nome; ?></td>
					    </tr>
					    <tr>
					        <th>Data de Nascimento</th>
					        <td><?php echo $birthday; ?></td>
					    </tr>
					    <tr>
					        <th>CPF</th>
					        <td><?php echo $cpf; ?></td>
					    </tr>
					    <tr>
					        <th>Email</th>
					        <td><?php echo $email; ?></td>
					    </tr>
					</table>    

				</section>	    

				<br></br>
					   

				<section id="end">Endereço
				 	
				 	<table border="1px">
				   	    <tr>
					        <th>Endereço</th>
					        <td><?php echo $endereco; ?></td>
					    </tr>
					    <tr>
					        <th>Número</th>
					        <td><?php echo $numero; ?></td>
					    </tr>
					    <tr>
					        <th>Telefone</th>
					        <td><?php echo $telefone; ?></td>
					    </tr>
					    <tr>
					        <th>Nota</th>
					        <td><?php echo $nota; ?></td>
					    </tr>
					</table>

				</section>
			<br></br>
		</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Dados Selecionados</title>
</head>
<body>
		<section id="d_selecionados">Consulta de dados
		 	<table border="1px">
		   	    <tr>
			        <th>Nome</th>
			        <td><?php echo 'Cadastro.`cpf`'?></td>
			    </tr>
			   <!-- <tr>
			        <th>Data de Nascimento</th>
			        <td><?php echo $birthday; ?></td>
			    </tr>
			    <tr>
			        <th>CPF</th>
			        <td><?php echo $cpf; ?></td>
			    </tr>
			    <tr>
			        <th>Email</th>
			        <td><?php echo $email; ?></td>
			    </tr>-->
			</table>    

		</section>	    
</body>
</html>
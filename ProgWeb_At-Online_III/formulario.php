<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br" xml:lang="en" lang="en">

<head>
	<title> Formulário Recebido com Sucesso! </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	
	
	<?php
		$nome = $_POST ['nome'];
		$email = $_POST ['email'];
		$mensagem = $_POST ['mensagem'];
		
		echo "Olá " $nome "<br>"
	?>
	
	<br>
	
	<table id = "dados" border = "2">
		<tr>
			<td id = "sucesso"> <h1> DADOS CADASTRADOS COM SUCESSO! </h1></td>
		</tr>
		<tr>
			<td id = "show1"> <h1> Olá, senhor(a) <?php echo "$nome"; ?>, os dados fornecidos por você foram os seguintes: </h1></td>
		</tr>
		<tr>
			<td id = "show2"> <h1> Endereço de E-mail: <?php echo "$email"; ?> </h1></td>
		</tr>
		<tr>
			<td id = "show3"> <h1> E a seguinte mensagem: </h1></td>
		</tr>
		<tr>
			<td id = "show4"> <h1> " <?php echo "$mensagem"; ?> " </h1></td>
		</tr>
		<tr>
			<td id = "voltar"> <a href = "home.php"> Voltar para a Página Inicial</a></td>
		</tr>

	</table>
	
</body>

</html>

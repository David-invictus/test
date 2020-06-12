<?php
/*
 * formulario.php
 * 
 * Copyright 2020  <pi@raspberrypi>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * Atividade Proposta:
 * Receber os dados enviados no formulário da página pessoal em PHP e armazenar os mesmos em variáveis,
 * construindo uma segunda página em PHP, que mostra os dados enviados.
 * Por fim, como pontuação extra, pesquise sobre o heroku, submeta a sua página pessoal nessa plataforma
 * (heroku) e disponibilize para os colegas.
 */
?>

<!DOCTYPE html>
<html lang = "en" "pt-br">

<head>
   <meta charset="utf-8" />
	<title> Página do David Franklin - Formulário Recebido com Sucesso! </title>
	<meta name="generator" content="Geany 1.33" />

	<style type="text/css">
		title {color: #9966CC;}
	</style>
	<style type="text/css">
		h1 {color: #993399;}
	</style>
	<style type="text/css">
		h2 {color: #800080;}
	</style>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>
	
	<table>
		<tr>
			<td> <img src="img/foto.jpg" alt="Foto do Perfil do FaceBook de David Franklin" width="100" heigth="150"> </td>
			<td> <h1>Página do <a href="http://lattes.cnpq.br/6483985204821792"> David Franklin Pessoa Ferreira </a> </h1> </td>
		</tr>
	</table>

	<hr>

	<h2> Sobre David Franklin </h2>
	Está é a pagina <i> "oficial" </i> do aluno de <b> Programação WEB </b> <u> David Franklin </u>!

	<hr>
	
	<?php
	
		$nome = $_POST ['nome'];
		$email = $_POST ['email'];
		$mensagem = $_POST ['mensagem'];
		
		echo "<br>", "Olá ", $nome, "<br>";
	
	?>

	<br>
	
	<table id = "dados" border = "2">
	<center>
		<tr>
			<td colspan="2" id = "sucesso"> <h3> DADOS CADASTRADOS COM SUCESSO! </h3></td>
		</tr>
		<tr>
			<td colspan="2" id = "show1"> <h4> Olá, senhor(a) <?php echo "$nome"; ?></h4></td>
		</tr>
		<tr>
			<td colspan="2" id = "show1.1"> <h4> Dados fornecidos por você foram os seguintes: </h4></td>
		</tr>
		<tr>
			<td id = "show1.2"> <h4> Seu Nome: </td>
			<td id = "show1.3"> <?php echo "$nome"; ?> </h4></td>
		</tr>
		<tr>
			<td id = "show2"> <h4> Endereço de E-mail: </td>
			<td id = "show2.1"> <?php echo "$email"; ?> </h4></td>
		</tr>
		<tr>
			<td id = "show3"> <h4> E a seguinte mensagem: </h4></td>
			<td id = "show3.1"> <h5> " <?php echo "$mensagem"; ?> " </h5></td>
		</tr>
		<tr>
			<td colspan="2" id = "voltar"> <a href = "home.php"> Voltar para a Página Inicial</a></td>
		</tr>
	</center>
	</table>
	
	
</body>

</html>

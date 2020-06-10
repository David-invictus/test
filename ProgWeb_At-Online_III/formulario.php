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

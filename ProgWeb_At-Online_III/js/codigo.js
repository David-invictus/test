/*Adicione a validação dos campos do formulário de sua página Web utilizando javascript.
 * Nenhum campo do formulário deve ser vazio.
 * O campo de e-mail deve seguir o padrão: algumNome@outroNome.
 * O campo nome deve ter, no mínimo 2 e máximo 40, caracteres.
 * O campo mensagem deve ter, no mínimo 5 e no máximo 80, caracteres.
 * 
 * Por fim, antes de submeter apresentes os dados informados, pelo usuário,
 * na tela e em seguida, envie seu site para uma página
 * que informa que o formulário foi enviado com sucesso.
 */

function validarEmail() {
/*Validação do E-mail
 * O campo de e-mail deve seguir o padrão: algumNome@outroNome.
 */
	var email = document.forms[0].email.value.length;
	var mensagem2 = "Campo E-mail deve conter o formato algumNome@outroNome";
	if (!email){
		alert ("Campo E-mail vazio!");
	}
	/*else if (email !(/\w {2}/ /\@ {1}/)) {
		alert (mensagem2);
	}*/
	else{
		document.forms[0].submit();
	}
}

function validacao(){
	var mensagem = document.forms[0].mensagem.value.length;
	var nome = document.forms[0].nome.value.length;
	var email = document.forms[0].email.value.length;
	
	var mensagem1 = "Campo E-mail vazio!";
	var mensagem2 = "Campo E-mail deve conter o formato algumNome@outroNome";
	var mensagem3 = "Campo Nome vazio!";
	var mensagem4 = "Nome insuficiente!";
	var mensagem5 = "O Campo Nome deve conter no mínimo 2 e máximo 40 caracteres.";
	var mensagem6 = "O Campo Mesagem está vazio!";
	var mensagem7 = "O campo mensagem deve ter, no mínimo 5 e no máximo 80, caracteres.";
	
	if (!email){
		alert (mensagem1);
	}
	else if (nome == ""){
		alert (mensagem3);
	}
	else if (nome == 1){
		alert (mensagem4);
	}
	else if (nome > 40){
		alert (mensagem5);
	}
	else if (mensagem == ""){
		alert (mensagem6);
	}
	else if (mensagem < 5 || mensagem > 80){
		alert (mensagem7);
	}
	else{
		document.forms[0].submit();
	}
}

function submeterForm(){
/*Por fim, antes de submeter apresentes os dados informados, pelo usuário,
 * na tela e em seguida, envie seu site para uma página
 * que informa que o formulário foi enviado com sucesso.
 */
	var nomeSubM = document.getElementById("nome_id").value;
	var emailSubM = document.getElementById("email_id").value;
	var mensagemSubM = document.getElementById("mensagem_id").value;
	var formFeito = "CONFIRMAR DADOS PREENCHIDOS!" + "Nome: " + nomeSubM + "E-mail: " + emailSubM + "Mensagem: " + mensagemSubM;
	return true;
	
}

function validarNome() {
/*Validação do Nome
 * O campo nome deve ter, no mínimo 2 e máximo 40, caracteres.
 * RESOLVIDO!
 */
	var nome = document.forms[0].nome.value.length;
	var mensagem1 = "Campo Nome vazio!";
	var mensagem2 = "Nome insuficiente!";
	var mensagem3 = "O Campo Nome deve conter no mínimo 2 e máximo 40 caracteres.";
	
	if (nome == ""){
		alert (mensagem1);
	} else if (nome == 1){
		alert (mensagem2);
	} else if (nome > 40){
		alert (mensagem3);
	} else{
		document.forms[0].submit();
	}
}

function validarSms() {
/*Validação da Mensagem
 * O campo mensagem deve ter, no mínimo 5 e no máximo 80, caracteres.
 * RESOLVIDO!
 */
	var mensagem = document.forms[0].mensagem.value.length;
	if (mensagem == ""){
		alert ("Campo Mesagem vazio!");
	}
	else if (mensagem < 5 || mensagem > 80){
		alert ("O campo mensagem deve ter, no mínimo 5 e no máximo 80, caracteres.");
	}
	else{
		document.forms[0].submit();
	}
}

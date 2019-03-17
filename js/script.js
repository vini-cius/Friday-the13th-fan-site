function validationForm() {
	var email = document.getElementById('email').value
	var mensagem = document.getElementById('msg').value

	if (email === '') {
		alert("Digite um E-mail Válido")
	}

	if (mensagem === '') {
		alert("Escreva sua mensagem")
	}
}
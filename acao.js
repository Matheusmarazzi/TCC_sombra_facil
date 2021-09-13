$(document).on('submit','#cadastros',function(e) {
	var url = 'https://maestoques.profrodolfo.com.br/sombra-facil/';
	$.ajax({
		url: url+'cadastrar.php',
		data:$(this).serialize(),
		type:'POST',
		success: function(retorno){
			alert(retorno);
			$('#nome').val("");
			$('#login').val("");
			$('#senha').val("");
			$('#rg').val("");
			$('#telefone').val("");
		}
	});
	//enviar o form sem atualizar a pagina
	e.preventDefault();

});
function redirecionar(){
window.location.href = 'addlocal.html';

};
$(document).on('submit','#adicionar',function(e) {
	var url = 'addlocal.php';
	$.ajax({
		url: url,
		data:$(this).serialize(),
		type:'POST',
		success: function(retorno){
			alert(retorno);
			$('#lat').val("");
			$('#long').val("");
		}
	});
	//enviar o form sem atualizar a pagina
	e.preventDefault();

});
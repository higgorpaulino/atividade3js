function validarCampo(nomeDoCampo, valor){
    var nomeCampoErro = 'erro-' + nomeDoCampo;
    if(valor === '' || valor === null) {
        document.getElementById(nomeDoCampo).style.borderColor = 'red';
        document.getElementById(nomeCampoErro).className = 'row d-flex';
    } else{
        document.getElementById(nomeDoCampo).style.borderColor = 'green';
        document.getElementById(nomeCampoErro).className = 'row d-none';
    }

}

function validar(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var mensagem = document.getElementById('mensagem').value;

    validarCampo('nome', nome);
    validarCampo('email', email);
    validarCampo('mensagem', mensagem);
}

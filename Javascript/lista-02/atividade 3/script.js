function verificarNumero (){
    var nome = document.getElementById("nome").value
    var senha = document.getElementById("senha").value
    var resultado = document.getElementById("resultado");

    senha = Number.parseInt(senha);

    if (nome === "admin" && senha === 12345){
        resultado.innerHTML= "Seja Bem-Vindo!";
    }

    else{
        resultado.innerHTML= "Incorreto";
    }
}
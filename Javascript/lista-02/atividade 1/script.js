function verificarIdade() {
    
    var idade = parseInt(document.getElementById("idade").value);
    
   
    if (isNaN(idade) || idade <= 0) {
        alert("insira uma idade válida.");
        return;
    }
    if (idade >= 18) {
        document.getElementById("resultado").innerText = "Você é maior de idade!";
    } else {
        document.getElementById("resultado").innerText = "Você é menor de idade!";
    }
}
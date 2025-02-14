function cadastrar() {
    var name = document.getElementById("nome").value; 
    document.getElementById("cadastrar").innerText ="seja bem vindo, " + name;

}

function verificarParOuImpar() {
    
   var numero = document.getElementById("numero").value;

    var number = parseInt(numero);

    if (number % 2 == 0) {
        alert("O número " + number + " é PAR!");
    } else {
        alert("O número " + number + " é ÍMPAR!");
    }
}

function converterParaCaixaAlta(str) {
    return str.toUpperCase();
}

function aplicarConversao() {
    var texto = document.getElementById("entradaTexto").value;  
    if (texto == "") {
        alert("insira um texto.");
        return;
    }
    var textoEmMaiusculas = converterParaCaixaAlta(texto);  
    document.getElementById("resultado").innerText = "Resultado: " + textoEmMaiusculas; 
}

function calcularValorComPorcentagem(valor, porcentagem) {
   
    var valorAcrescentado = valor + (valor * porcentagem / 100);
    return valorAcrescentado;
}


function aplicarCalculadora() {
    valor = parseFloat(document.getElementById("valor").value);  
    var porcentagem = parseFloat(document.getElementById("porcentagem").value); 
    
    if (isNaN(valor) || isNaN(porcentagem)) {
        alert("Por favor, insira valores válidos.");
        return;
    }
    
    
    var resultado = calcularValorComPorcentagem(valor, porcentagem);
    
    
    document.getElementById("resultado").innerText = "Resultado: R$ " + resultado.toFixed(2);
}

 
function changeColor() {
    var colors = ["red", "blue", "green", "yellow", "purple"];
    var box = document.getElementById("box");
    box.style.backgroundColor = colors[(new Date().getSeconds()) % colors.length];
}


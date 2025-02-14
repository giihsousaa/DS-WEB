function botao() {
    // Obtendo os valores dos campos
    var numero1 = document.getElementById("n1").value;
    var numero2 = document.getElementById("n2").value;
    var operacao = document.getElementById("operacao").value;
    var resultado = document.getElementById("resultado");
    var resultado2;

    
    numero1 = Number.parseInt(numero1);
    numero2 = Number.parseInt(numero2);

    if (operacao === "1") {
        resultado2 = numero1 + numero2;
    }

    if (operacao === "2") {
        resultado2 = numero1 - numero2;
    }

    if (operacao === "3") {
        resultado2 = numero1 * numero2;
    }

    if (operacao === "4") {
        
        if (numero2 !== 0) {
            resultado2 = numero1 / numero2;
        } else {
            resultado2 = "Erro: Divisão por zero!";
        }
    }


    resultado.innerHTML = "Resultado: " + resultado2;
}

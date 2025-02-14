function verificarNumero() {
    
    var numero = document.getElementById("numero").value
    var resultado = document.getElementById("resultado");

    numero = Number.parseInt(numero);

    if (numero>0 ){
        resultado.innerHTML= "Positivo!"
    }

    if (numero< 0){
        resultado.innerHTML= "Negativo!"
    }
    if (numero === 0){
        resultado.innerHTML= "0"
    }
}
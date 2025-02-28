function calcular() {
    const divNome = document.getElementById('nome').value;
    const divDesc = document.getElementById('descricao').value;

    const novaDiv = document.createElement("div");

/////////////////////////////////////////////////////////////

    const paragrafo = document.createElement("p");
    paragrafo.textContent = divNome + " - descricao: " + divDesc;

    paragrafo.style.margin = "2";
    paragrafo.style.fontSize = "20px";
    paragrafo.style.color = "black";

    const deletar = document.createElement("button");
    deletar.textContent = "Deletar";

//////////////////////////////////////////////////////////////////
    deletar.onmouseover = function() {
        deletar.style.backgroundColor = "pink";
    };
    deletar.onmouseout = function() {
        deletar.style.backgroundColor = "dark pink";
    };

    deletar.onclick = function() {
        novaDiv.remove();
    };

    novaDiv.appendChild(paragrafo);
    novaDiv.appendChild(deletar);

    const areaCartao = document.getElementById("cartao");
    areaCartao.appendChild(novaDiv);
}

document.body.style.backgroundColor = "purple";
document.body.style.color = "#5a4a42";
document.body.style.padding = "20px";
document.body.style.display = "flex";
document.body.style.flexDirection = "column";


////////////////////////////////////////////////////////////////////


botaoPrincipal.onmouseover = function() {
    botaoPrincipal.style.backgroundColor = "white";
};
botaoPrincipal.onmouseout = function() {
    botaoPrincipal.style.backgroundColor = "grey";
};

////////////////////////////////////////////////////////////////////
      


    
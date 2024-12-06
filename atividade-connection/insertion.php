<?php

//Incluo a minha  conexao com o bando de dados
    include_once('connection.php');

    $nome = $_POST['nome1'];
    $valor = $_POST['valor'];
    $estoque = $_POST['estoque'];

//Inicio a incerção de dados do banco

$sql = "INSERT INTO produto (nome1, valor, estoque) VALUES ('$nome', '$valor', '$estoque')";
if (mysqli_query($conexao, $sql)){
    echo "Novo registro inserido com sucesso!";
}else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>
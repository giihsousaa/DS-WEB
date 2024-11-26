<?php
echo "Frutas: <br>" ;
 $frutas = array ("banana", "kiwi", "amora", "morango", "uva"); 

 foreach ($frutas as $fruta) {
     echo $fruta . "<br>";
 }
$frutas[] = "maça";  

echo "<br>atualizado com nova fruta: <br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
sort($frutas);  

echo "<br> frutas ordenadas: <br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

$produto = [
    "nome" => "Frutas",
    "preco" => 20,05,
    "estoque" => 34
];

echo "<br>Informações do produto: <br>";
echo "Nome: " . $produto["nome"] . "<br>";
echo "Preço: R$ " . $produto["preco"] . "<br>";
echo "Estoque: " . $produto["estoque"] . "<br>";

$produto["preco"] = 35.00; 

echo "<br>Informações atualizadas do produto: <br>";
echo "Nome: " . $produto["nome"] . "<br>";
echo "Preço: R$ " . $produto["preco"] . "<br>";
echo "Estoque: " . $produto["estoque"] . "<br>";

$unidades = 5;
$valor_total = $produto["preco"] * $unidades;

echo "<br>Valor total de 5 produtos: R$ " . $valor_total . "<br>";

$produtos = ["Fruta", "Suco", "Sorvete"];
$precos = [25.05, 15.00, 9.00];

$produtos_com_preco = array_combine($produtos, $precos); 

echo "<br>Array associativo de produtos e preços: <br>";
print_r($produtos_com_preco);
echo "<br>";


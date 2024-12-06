<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection DB</title>
</head>
<body>
    <h3>Produtos</h3>
 <form action= 'insertion.php ' method="POST">
    <label>Nome: </label>
    <input type="text" name="nome1">
    <br>
    <label>Valor: </label>
    <input type="text" name="valor">
    <br>
    <label>Estoque: </label>
    <input type="text" name="estoque">
    <br>
    <input type="submit">
  </form>

  <h3>Clientes</h3>
  <form action = 'insertionCliente.php' method="POST">
    <label> Nome: <label>
    <input type="text" name="nome">
    <br>
    <label>Email: </label>
    <input type="text" name="email">
    <br>
    <input type="submit">
</form>

<br><br><br>

  <?php
    
    include_once('connection.php');

    $sql = "SELECT * FROM produto ORDER BY nome1 ASC";
    $resultado = mysqli_query($conexao, $sql);


    // Verificar se há registros

if (mysqli_num_rows($resultado) > 0) {
    echo "<h2>Produtos</h2>"; 
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "Nome: " . $linha['nome1'] . " - Valor: " . $linha['valor'] . "-Estoque: " .$linha['estoque'];
}
} else {
    echo "Nenhum registro de produtos encontrado.<br>";
}

echo '<br>';
$sql = "SELECT * FROM cliente ORDER BY nome ASC";
$resultado = mysqli_query($conexao,$sql);

if(mysqli_num_rows($resultado) > 0){
    echo "<h2>Cliente</h2>";
    while ($linha = mysqli_fetch_assoc($resultado)){
        echo "Nome: " . $linha['nome'] . " - email" . $linha['nome'] . "<br>"; 

    }
}else{
    echo "Nenhum registro de cliente foi encontrado.<br>";
}
?>
</body>
</html>
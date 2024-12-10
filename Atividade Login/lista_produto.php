<?php
include('config.php');

$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Produtos Cadastrados</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php while($produto = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $produto['ID']; ?></td>
                    <td><?php echo $produto['Nome']; ?></td>
                    <td><?php echo $produto['Descricao']; ?></td>
                    <td><?php echo "R$ " . number_format($produto['Preco'], 2, ',', '.'); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>